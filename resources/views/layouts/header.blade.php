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
            <a href="https://www.shipito.com/servlet/Account?act=Customer.logOut" class="btn btn-secondary btn-lg">Fermer la session</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right customer-name hide-lg">
          <li>
            <a href="https://www.shipito.com/fr/account/notifications/full-list" class="mobile-notifications-link">
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
            <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" data-toggle="dropdown">
              <i class="icon-my-us-address"></i> L’adresse de mon entrepôt <span class="ga-caret hide-lg"></span>
            </a>
            <div class="dropdown-menu mega-menu">
              <div class="container my-us-address">
                <div class="row">
                  <div class="col-sm-5 col-xs-12 default-warehouse-address">
                    <div class="top">
                      <label>
                        <i class="icon-my-us-address"></i> L’adresse de mon entrepôt </label>
                      <p class="upper hide-lg">Votre principale adresse Shipito</p>
                      <div class="row">
                        <div class="col-sm-2 col-xs-1"></div>
                        <div class="col-sm-8 col-xs-10 whaddress">
                          <p class="upper hide-sm">Votre principale adresse Shipito</p>
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
                          <a href="https://www.shipito.com/fr/account/copy-address" class="btn btn-lg btn-secondary" onclick="return gaPopUpDisplay(this);">Copier Mon Adresse</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 hide-lg">
                    <p class="upper">Votre entrepôt Shipito en Californie</p>
                  </div>
                  <div class="col-sm-3 col-xs-6 warehouse-map text-center">
                    <div class="top">
                      <img src="files/Map CA.svg" class="img-responsive">
                      <br>
                    </div>
                    <div class="bottom">
                      <a href="https://www.shipito.com/fr/account/settings/address-book" class="hide-sm view-all-link">Voir tous les entrepôts &gt;</a>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-6">
                    <div class="top">
                      <p class="bolded hide-sm"> Votre entrepôt Shipito en Californie </p>
                      <p class="warehouse-description"> Frais d‘envoi les plus bas et temps d‘envoi les plus rapides. </p>
                    </div>
                    <div class="bottom">
                      <p class="bolded hide-sm how-to-use"> Comment utiliser votre nouvelle adresse </p>
                      <a href="https://www.shipito.com/fr/account/newuservideo" onclick="return gaPopUpStaticDisplay(this);" class="hide-sm btn btn-lg btn-secondary">Regarder la vidéo</a>
                    </div>
                  </div>
                  <div class="hide-lg col-xs-12">
                    <a href="https://www.shipito.com/fr/account/settings/address-book" class="warehouses-link hide-lg">Voir tous les entrepôts &gt;</a>
                    <p> Comment utiliser votre nouvelle adresse </p>
                  </div>
                  <div class="hide-lg col-xs-12 text-center">
                    <a href="https://www.shipito.com/fr/account/newuservideo" onclick="return gaPopUpStaticDisplay(this);" class="btn btn-lg btn-secondary">Regarder la vidéo</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown no-mega-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.shipito.com/fr/account/incoming-packages/no-packages#">
              <i class="icon-help"></i> Aide Shipito <span class="ga-caret hide-lg"></span>
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
                <a href="/lynia-university">Académie Shipito </a>
              </li>
            </ul>
          </li>

          <li class="dropdown mega-dropdown hide-lg">
            <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" data-toggle="dropdown">
              <i class="icon-my-account"></i> Mon compte <span class="ga-caret"></span>
            </a>
            <div class="dropdown-menu mega-menu my-account-menu">
              <div class="container">
                <div class="row">
                  <div class="col-xs-12 links">
                    <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" class="submenu-title">Paramètres de Votre Compte <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="https://www.shipito.com/fr/account/settings/preferences">Préférences de Compte</a>
                      <a href="https://www.shipito.com/fr/account/settings/membership">Mon abonnement</a>
                      <a href="https://www.shipito.com/fr/account/settings/fast-mailout">Paramètres de l'Envoi Rapide</a>
                      <a href="https://www.shipito.com/fr/account/settings/account-deposit">Dépôt de Compte</a>
                      <a href="https://www.shipito.com/fr/account/settings/account-info">Modifier les informations du compte</a>
                      <a href="https://www.shipito.com/fr/account/settings/additional-names">Noms Additionnels</a>
                      <a href="https://www.shipito.com/fr/account/settings/virtual-wallet">Méthodes de paiement enregistrées</a>
                      <a href="https://www.shipito.com/fr/account/settings/change-password" onclick="return gaPopUpDisplay(this);">Modifier le Mot de Passe</a>
                      <a href="https://www.shipito.com/fr/account/settings/address-book">Modifier le Carnet d‘Adresses</a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" class="submenu-title">MES RÉCOMPENSES <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="https://www.shipito.com/fr/account/rewards/how-it-works">Spécificités des récompenses des abonnés </a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" class="submenu-title">MES COMMANDES <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="https://www.shipito.com/fr/account/invoices">Voir l‘historique de mes commandes</a>
                      <a href="https://www.shipito.com/fr/account/payment/transaction-history" onclick="return gaPopUpDisplay(this);">Mes transactions</a>
                    </div>
                  </div>
                  <div class="col-xs-12 links">
                    <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" class="submenu-title">Mon Compte D'Affilié <span class="sub-menu-caret"></span>
                    </a>
                    <div class="sub-menu-body">
                      <a href="https://www.shipito.com/fr/account/affiliate/register">Inscription pour Affiliés</a>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="links">
                      <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages#" class="submenu-title">SUPPORT DE MON COMPTE <span class="sub-menu-caret"></span>
                      </a>
                      <div class="sub-menu-body">
                        <a href="https://www.shipito.com/fr/account/support-tickets/open-new" onclick="return gaPopUpDisplay(this);">Signaler un problème</a>
                        <a href="https://www.shipito.com/fr/account/support-tickets">Tickets d'Assistance</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="dropdown mega-dropdown no-menu hide-sm">
            <a href="https://www.shipito.com/fr/account/settings/membership">
              <span class="customer-name">Bonjour, Julian</span>
              <i class="icon-my-account"></i> Mon compte </a>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right st-main-links hide-lg">
          <li class="dropdown">
            <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages" data-toggle="dropdown">
              <i class="icon-services"></i>Nos services <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="https://www.shipito.com/fr/shipito-rewards">Shipito Pour Mois</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/shipito-for-business">Shipito Pour les Entreprises</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages" data-toggle="dropdown">
              <i class="icon-pricing"></i>Débuter <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="https://www.shipito.com/fr/shipito-forwarding-service">Comment ça Marche</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/shipito-pricing">Tarifs et Options</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/help/faq">FAQs</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/help/postage">Modes de livraison</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/help/tutorials/prohibited-items">Que puis-je expédier ?</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="https://www.shipito.com/fr/account/incoming-packages/no-packages" data-toggle="dropdown">
              <i class="icon-about-us"></i>À Propos de Nous <span class="ga-caret hide-lg"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="https://www.shipito.com/fr/services/what-is-shipito">Qu’est-ce que Shipito ?</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/help/locations">Emplacements des entrepôts</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/blog">Blog</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/newsroom">Actualités</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/shipito-reviews">Commentaires des clients</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/shipito-affiliates">Programme d’Affiliation</a>
              </li>
              <li>
                <a href="https://www.shipito.com/fr/shipito-for-direct-sales">Vendeurs directs</a>
              </li>
            </ul>
          </li>

          <li class="hide-sm logged-in">
            <a href="https://www.shipito.com/fr/account">
              <span class="customer-name">Bonjour, Julian</span> Mon compte </a>
          </li>

          <li class="hide-sm">
            <a href="https://www.shipito.com/servlet/Account?act=Customer.logOut&amp;nextpage=%2F" class="btn btn-secondary">Fermer la session</a>
          </li>

          <li class="dropdown hide-lg">
            <a class="dropdown-toggle contact-sm-link" data-toggle="dropdown" href="https://www.shipito.com/fr/account/incoming-packages/no-packages#">
              <i class="icon-contact-us"></i> Service clientèle <span class="ga-caret"></span>
            </a>
            <div class="dropdown-menu contact-sm">
              <div class="contact">
                <a href="https://www.shipito.com/fr/contact">
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
