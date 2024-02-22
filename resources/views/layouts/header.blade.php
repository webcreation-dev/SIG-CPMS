<NAV CLASS="navbar navbar-default navbar-fixed-top st-navbar">
    <DIV ID="banner-container" CLASS="top-banners"></DIV>
    <DIV CLASS="container">
      <DIV CLASS="navbar-header">
        <BUTTON TYPE="BUTTON" CLASS="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <SPAN CLASS="icon-bar top-bar"></SPAN>
          <SPAN CLASS="icon-bar middle-bar"></SPAN>
          <SPAN CLASS="icon-bar bottom-bar"></SPAN>
        </BUTTON>
        <DIV CLASS="navbar-brand slide-position">
          <A HREF="#">
            <img src="shipito/fr/imgs/logo.png" class="logo-desktop" alt="">
            <img src="shipito/fr/imgs/logo-mobile.png" class="logo-mobile" alt="">
          </A>
        </DIV>
      </DIV>

      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-right customer-name hide-lg">
          <li class="text-center">
            <a href="#" class="btn btn-secondary btn-lg">Fermer la session</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right customer-name hide-lg">
          <li>
            <a href="#" class="mobile-notifications-link">
              <img src="files/MyPortrait.svg"> Bonjour, Julian <i class="icon-notification"></i>
            </a>
            <p> Mes solde des comptes: <span class="usd-full">
                <small>$</small>0.00 <small>USD</small>
              </span>
              <br>
            </p>
          </li>
        </ul>

        <br class="hide-sm">

        <ul class="nav navbar-nav navbar-right st-main-links">

          <li class="dropdown mega-dropdown no-menu">
            <a href="/packages-action-required">
              <i class="icon-my-packages"></i> Mes paquets </a>
          </li>

          <li class="dropdown mega-dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="icon-my-us-address"></i> L’adresse de mon entrepôt <span class="ga-caret hide-lg"></span>
            </a>
            <div class="dropdown-menu mega-menu">
              <div class="container my-us-address">
                <div class="row">
                  <div class="col-sm-5 col-xs-12 default-warehouse-address">
                    <div class="top">
                      <label>
                        <i class="icon-my-us-address"></i> L’adresse de mon entrepôt </label>
                      <p class="upper hide-lg">Votre principale adresse Lynia Delivery Express</p>
                      <div class="row">
                        <div class="col-sm-2 col-xs-1"></div>
                        <div class="col-sm-8 col-xs-10 whaddress">
                          <p class="upper hide-sm">Votre principale adresse Lynia Delivery Express</p>
                          <b>Julian ADJIBI</b>
                          <br>
                          <br> 444 Alaska Avenue <br>Suite #AMJ971 <br>Torrance, CA 90503 <br>USA
                        </div>
                        <div class="col-sm-2 col-xs-1"></div>
                      </div>
                    </div>
                    <div class="bottom">
                      <div class="row">
                        <div class="col-xs-12 text-center">
                          <a href="#" class="btn btn-lg btn-secondary" onclick="return gaPopUpDisplay(this);">Copier Mon Adresse</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 hide-lg">
                    <p class="upper">Votre entrepôt Lynia Delivery Express en Californie</p>
                  </div>
                  <div class="col-sm-3 col-xs-6 warehouse-map text-center">
                    <div class="top">
                      <img src="files/Map CA.svg" class="img-responsive">
                      <br>
                    </div>
                    <div class="bottom">
                      <a href="#" class="hide-sm view-all-link">Voir tous les entrepôts &gt;</a>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-6">
                    <div class="top">
                      <p class="bolded hide-sm"> Votre entrepôt Lynia Delivery Express en Californie </p>
                      <p class="warehouse-description"> Frais d‘envoi les plus bas et temps d‘envoi les plus rapides. </p>
                    </div>
                    <div class="bottom">
                      <p class="bolded hide-sm how-to-use"> Comment utiliser votre nouvelle adresse </p>
                      <a href="#" onclick="return gaPopUpStaticDisplay(this);" class="hide-sm btn btn-lg btn-secondary">Regarder la vidéo</a>
                    </div>
                  </div>
                  <div class="hide-lg col-xs-12">
                    <a href="#" class="warehouses-link hide-lg">Voir tous les entrepôts &gt;</a>
                    <p> Comment utiliser votre nouvelle adresse </p>
                  </div>
                  <div class="hide-lg col-xs-12 text-center">
                    <a href="#" onclick="return gaPopUpStaticDisplay(this);" class="btn btn-lg btn-secondary">Regarder la vidéo</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown no-mega-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-help"></i> Aide Lynia Delivery Express <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu account-help" role="menu">
              <li>
                <a href="/help-getting-started">Débuter</a>
              </li>
              {{-- <li>
                <a target="_blank" href="#">Articles interdits et faisant l’objet de restrictions</a>
              </li>
              <li>
                <a target="_blank" href="#">Calculateur de frais d’expédition</a>
              </li> --}}
              <li>
                <a href="/lynia-university">Académie Lynia Delivery Express </a>
              </li>
            </ul>
          </li>

            <LI class="dropdown no-mega-dropdown">
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <A HREF = "{{route('logout')}}" style="margin: 10px 40px 40px 10px;"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                    CLASS = "btn btn-lg btn-secondary btn-login">Déconnexion</A>
                </form> --}}

                {{-- <li class="hide-sm"> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <a href="{{route('logout')}}" style="margin: 13px 15px 10px 50px;"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="btn btn-secondary">Fermer la session</a>
                    </form>
                  {{-- </li> --}}

            </LI>
            {{-- <LI class="dropdown no-mega-dropdown">
                <A HREF = "#" CLASS = "btn btn-lg btn-primary">INSCRIPTION</A>
            </LI> --}}

          <li class="dropdown mega-dropdown hide-lg">
            <a href="#" data-toggle="dropdown">
              <i class="icon-my-account"></i> Mon compte <span class="ga-caret"></span>
            </a>
            <div class="dropdown-menu mega-menu my-account-menu">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 links">
                    <a href="#" class="submenu-title">Paramètres de Votre Compte <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="#">Préférences de Compte</a>
                      <a href="#">Mon abonnement</a>
                      <a href="#">Paramètres de l'Envoi Rapide</a>
                      <a href="#">Dépôt de Compte</a>
                      <a href="#">Modifier les informations du compte</a>
                      <a href="#">Noms Additionnels</a>
                      <a href="#">Méthodes de paiement enregistrées</a>
                      <a href="#" onclick="return gaPopUpDisplay(this);">Modifier le Mot de Passe</a>
                      <a href="#">Modifier le Carnet d‘Adresses</a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="#" class="submenu-title">MES RÉCOMPENSES <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="#">Spécificités des récompenses des abonnés </a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="#" class="submenu-title">MES COMMANDES <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="#">Voir l‘historique de mes commandes</a>
                      <a href="#" onclick="return gaPopUpDisplay(this);">Mes transactions</a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="#" class="submenu-title">Mon Compte D'Affilié <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="#">Inscription pour Affiliés</a>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="links">
                      <a href="#" class="submenu-title">SUPPORT DE MON COMPTE <span class="sub-menu-caret"></span>
                      </a>
                      <div class="sub-menu-body">
                        <a href="#" onclick="return gaPopUpDisplay(this);">Signaler un problème</a>
                        <a href="#">Tickets d'Assistance</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown mega-dropdown no-menu hide-sm">
            <a href="#">
              <span class="customer-name">Bonjour, {{Auth::user()->lastname}} </span>
              <i class="icon-my-account"></i> Mon compte </a>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right st-main-links hide-lg">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="icon-services"></i>Nos services <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Lynia Delivery Express Pour Mois</a>
              </li>
              <li>
                <a href="#">Lynia Delivery Express Pour les Entreprises</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="icon-pricing"></i>Débuter <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Comment ça Marche</a>
              </li>
              <li>
                <a href="#">Tarifs et Options</a>
              </li>
              <li>
                <a href="#">FAQs</a>
              </li>
              <li>
                <a href="#">Modes de livraison</a>
              </li>
              <li>
                <a href="#">Que puis-je expédier ?</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="icon-about-us"></i>À Propos de Nous <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Qu’est-ce que Lynia Delivery Express ?</a>
              </li>
              <li>
                <a href="#">Emplacements des entrepôts</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Actualités</a>
              </li>
              <li>
                <a href="#">Commentaires des clients</a>
              </li>
              <li>
                <a href="#">Programme d’Affiliation</a>
              </li>
              <li>
                <a href="#">Vendeurs directs</a>
              </li>
            </ul>
          </li>

          <li class="hide-sm logged-in">
            <a href="#">
              <span class="customer-name">Bonjour, Julian</span> Mon compte </a>
          </li>

          <li class="hide-sm">
            <a href="#" class="btn btn-secondary">Fermer la session</a>
          </li>

          <li class="dropdown hide-lg">
            <a class="dropdown-toggle contact-sm-link" data-toggle="dropdown" href="#">
              <i class="icon-contact-us"></i> Service clientèle <span class="ga-caret"></span>
            </a>
            <div class="dropdown-menu contact-sm">
              <div class="contact">
                <a href="#">
                  <i class="icon-contact-us"></i> Prenez Contact Avec Nous </a>
              </div>
              <div class="contact">
                <a href="mailto:support@shipito.com">
                  <i class="icon-email"></i> support@shipito.com </a>
              </div>
              <div class="contact">
                <i class="icon-live-chat"></i> Chat en direct (Heure du Pacifique): <br>En semaine: 6h à 18h <br>Samedi: 6h à 15h <br>Dimanche: Fermé
              </div>
            </div>
          </li>

        </ul>
      </div>
    </DIV>
</NAV>
