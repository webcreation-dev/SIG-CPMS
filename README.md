# SIG-CPMS

Gestion pédagogique du Cycle Préparatoire Marie Stella (Laravel 9, PHP 8.2).

## Démarrage local

Les dépendances verrouillées nécessitent PHP 8.0 à 8.3. Utiliser PHP 8.2 pour Composer et Artisan.

```sh
cp .env.example .env
composer install
php artisan key:generate
php artisan serve --host=127.0.0.1 --port=8000
```

Créer un `.env` avec les paramètres de la base locale. Ne pas importer le dump dans une base existante : créer une base dédiée puis y importer `sig_.sql`. Ne pas lancer `migrate:fresh` ni les seeders sur les données importées.

Sur cette machine, lancer les commandes PHP avec `/opt/homebrew/opt/php@8.2/bin/php` (PHP par défaut est 8.4). Les ressources CSS/JS compilées sont déjà dans `public`, aucun build Node n’est nécessaire pour ces modifications.

Sur cette machine, la copie locale est `sig_cpms_local`, port `3307`. Le serveur MySQL dédié utilise `storage/app/mysql-local` (ignoré par Git), sans modifier les bases MySQL préexistantes. Pour le redémarrer :

```sh
/opt/homebrew/opt/mysql/bin/mysqld --no-defaults --datadir="$PWD/storage/app/mysql-local" --port=3307 --bind-address=127.0.0.1 --socket=/tmp/sig-cpms-mysql.sock --mysqlx=OFF
```

## Règles de validation

L’année de début de la classe (`classrooms.year`), et non la date d’impression, détermine la version. Jusqu’à 2025-2026, les relevés et fiches individuels gardent leur logique historique, y compris leurs seuils et appréciations.

À partir de 2026-2027, dans les deux niveaux : moyenne générale d’au moins 12 et chaque UE scientifique d’au moins 10 valident le semestre et toutes les UE par compensation, sans minimum non scientifique. Si le semestre échoue, seules les UE d’au moins 12 sont validées. Toutes les UE à 12 valident donc automatiquement le semestre.

Le calcul des moyennes et le choix des notes de rattrapage restent identiques. Les seuils sont comparés avant arrondi d’affichage. Les notes absentes gardent le comportement existant (zéro dans les calculs).

`app/Services/SemesterValidation.php` centralise la nouvelle décision. `config/validation_versions/2026.php` fige les seuils et la liste des UE scientifiques pour cette version. Ne jamais modifier une version déjà utilisée : copier ce fichier vers une nouvelle version puis ajouter son année d’effet dans `config/validation.php`, sous `versions`. Une version reste applicable aux années suivantes jusqu’à l’entrée en vigueur de la prochaine. Ajouter une version en 2028 préserve ainsi 2026-2027 et 2027-2028.

```sh
php vendor/bin/pest --filter=SemesterValidation
```

Les tests utilisent SQLite en mémoire, séparément de la base importée.

L’export global historique reste inchangé pour les anciennes promotions. Dès qu’une promotion 2026-2027 ou ultérieure fait partie des deux classes récentes, l’export global utilise les fiches individuelles de chaque étudiant et de ses deux semestres, avec la règle de son année.

## Vérifications effectuées

- 13 tests ciblés réussis : compensation, limites, versions, quatre semestres, UE composées, rattrapages et cohérence des deux documents.
- 632 comparaisons des relevés et fiches individuels des 158 étudiants importés contre les vues d’origine : HTML identique hors espaces.
- Relevé, fiche individuelle et export global 2026-2027 générés et contrôlés visuellement avec une simulation transactionnelle annulée.
- Page de connexion accessible en HTTP 200 sur `http://127.0.0.1:8000/login`.
- Base importée conservée : 158 étudiants, 6 866 notes. Aucune classe 2026-2027 fictive créée.

## Humanité C à partir de 2026-2027

La migration `2026_10_27_220000_version_humanities_curriculum.php` ajoute FHS (4 crédits) et Conduite (1 crédit) aux quatre UE Humanité C. Sur une base importée, l’appliquer après l’import :

```sh
php artisan migrate --path=database/migrations/2026_10_27_220000_version_humanities_curriculum.php
```

Cette migration est déjà appliquée à la copie locale. Les anciennes UE restent physiquement `singular`, avec leurs notes et identifiants d’origine. `TeachingUnit::forAcademicYear()` expose leur structure composée uniquement pour les classes dont l’année de début est 2026 ou ultérieure, et filtre les ECUE selon leur année d’effet. Les notes de l’ancienne UE ne sont pas transférées automatiquement à FHS ou Conduite.

Pour ces quatre UE seulement, la moyenne est `(4 × FHS + Conduite) / 5`, en prenant la note finale de chaque ECUE (rattrapage s’il est renseigné). Les autres UE composées conservent une moyenne arithmétique. Le même calcul alimente la moyenne générale, la validation et les PDF individuels et globaux.

La saisie par étudiant sélectionne désormais les UE/ECUE du semestre et de l’année, sans découpage fixe de 18 notes. Les liens de saisie conservent la classe sélectionnée. Les anciennes promotions ne peuvent pas recevoir de notes pour les nouveaux ECUE, et les nouvelles promotions ne peuvent plus noter directement l’ancienne UE Humanité C.

```sh
php vendor/bin/pest --filter='SemesterValidation|HumanitiesCurriculum'
```

Après l’évolution Humanité C : 19 tests ciblés réussis, dont la saisie HTTP des deux ECUE, les quatre semestres, la pondération, les rattrapages et l’isolation des promotions. Les 632 comparaisons historiques restent identiques hors espaces HTML. Les nouvelles fiches ont un espacement adapté pour conserver le bilan sur la même page ; le style des anciennes fiches est conservé.

## Import annuel des étudiants

Dans **Classes → Importer les étudiants (Excel)**, un popup reprend le style des formulaires existants. Sélectionner une classe à partir de 2026-2027 et un fichier `.xlsx` (5 Mo maximum), puis importer. L’ancienne adresse `/students/import` ouvre ce popup sur la liste des classes.

La classe choisie détermine l’année et le niveau de destination. Un niveau différent dans le fichier bloque l’import ; une ancienne année dans l’en-tête est signalée, mais la destination sélectionnée est utilisée.

Le lecteur reconnaît les colonnes `Nom et Prénoms`, `Sexe`, `Date et lieu de naissance`, les noms de famille en majuscules (y compris composés), les dates `jj/mm/aaaa à Lieu` ou `jj-mm-aaaa à Lieu`, et ignore les numéros seuls après la fin de la liste. Les accents sont conservés. Les fichiers ne sont pas conservés après lecture.

La fiche d’un étudiant est identifiée dans sa classe par son nom complet normalisé et sa date de naissance. Un réimport ne crée pas de doublon. Les conflits de naissance, sexe ou lieu bloquent la transaction sans écraser les fiches. Les étudiants absents d’une nouvelle liste ne sont pas supprimés. Les anciennes inscriptions et notes restent intactes. Un verrou et des clés uniques protègent les réimports simultanés.

Après un déploiement sur une base existante :

```sh
php artisan migrate --path=database/migrations/2026_10_27_230000_add_roster_import_identifiers.php
```

Les extensions PHP ZIP, SimpleXML et mbstring sont nécessaires (intl est disponible sur l’environnement local pour la normalisation Unicode). Aucun paquet Excel ni service externe n’est requis.

```sh
php vendor/bin/pest --filter='SemesterValidation|HumanitiesCurriculum|StudentRosterImport'
```

Vérifications : 32 tests ciblés réussis. Les fichiers administratifs fournis ont été importés localement en 2026-2027 : Prépa 1, 37 étudiants ; Prépa 2, 29 étudiants. Pour Prépa 2, l’en-tête 2025-2026 a été remplacé par la destination 2026-2027 demandée, cohérente avec le nom du fichier. Un réimport réel des deux fichiers a créé zéro doublon (66 fiches reconnues). Les données des anciennes classes ont été comparées avant/après import et sont identiques.

## Simulateur de semestre

La page `/simulation-semestre` permet de tester les quatre semestres pour une année scolaire choisie. Elle est accessible après connexion à la direction et au directeur des études, depuis « Simulation de semestre » en bas du menu de gestion des étudiants. Elle reprend l’en-tête, le menu et les composants de l’interface d’administration. Elle lit seulement le catalogue des UE et calcule des moyennes fictives.

L’export PDF reste disponible via la route POST `simulation.semester.sheet` ; son bouton a été retiré du simulateur. Le serveur recalcule les moyennes et appréciations selon l’année choisie. Le document porte la mention « Simulation - données fictives », utilise directement la vue `fiche_de_calcul`, ses styles et le même format PDF que la fiche réelle et laisse les notes détaillées non saisies vides. Aucun étudiant ni aucune note ne sont créés.

Les moyennes se recalculent automatiquement à la saisie, sans bouton de calcul. La page affiche les appréciations par UE, la moyenne générale, le statut du semestre et les motifs de non-validation. Les exemples incluent une scientifique à 10 compensée, une scientifique sous 10 bloquante, des non scientifiques sous 10 compensées, et Humanité avec FHS à 10 et Conduite à 20.

Les nouvelles règles appellent `SemesterValidation::evaluate()`. Humanité utilise `TeachingUnit::averageFromNotes()` avec des notes fictives en mémoire. Pour les autres UE, on renseigne directement la moyenne finale de l’UE. Avant 2026-2027, le simulateur reproduit les seuils historiques et présente Humanité C comme une UE unique. Aucun élève, aucune classe et aucune note ne sont créés ni modifiés.

```sh
php vendor/bin/pest tests/Feature/SemesterSimulationTest.php
```
