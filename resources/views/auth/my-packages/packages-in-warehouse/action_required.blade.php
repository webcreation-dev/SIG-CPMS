<!DOCTYPE html>
<html dir="ltr" lang="fr">
    @include('layouts.head-auth')

    <body cz-shortcut-listen="true">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGCCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="menu-filler" class="with-tabs with-sub-tabs"></div>
    <a name="page-top" id="page-top" class="with-tabs with-sub-tabs"></a>

    @include('layouts.header')


    <div id="responsive-package-search-wrapper" class="hide-lg collapsed">
      <form method="POST" action="https://www.shipito.com/fr/account/incoming-packages/search" name="responsivepackagesearchform" id="responsivepackagesearchform" class="form-inline">
        <div class="form-group">
          <div class="input-group input-group-lg">
            <input type="text" name="incomingpackage.keyword" id="responsive-package-search-input" class="form-control collapsed" placeholder="Recherche de colis">
            <span class="input-group-btn">
              <button type="BUTTON" class="btn" id="responsive-package-search-btn">
                <i class="icon-search"></i>
              </button>
              <button type="BUTTON" class="btn" id="responsive-package-search-close-btn">
                <i class="icon-times"></i>
              </button>
            </span>
          </div>
        </div>
      </form>
    </div>

    <div class="my-packages-wrapper">
        <div class="container my-packages">
          <div class="row">
            <div class="col-sm-3 col-xs-3">
              <a href="/packages-action-required" class="ACTIVE">
                <i class="icon-packages-in-warehouse"></i>
                <br class="hide-lg"> Colis dans l'entrepôt </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/packages-in-transit" >
                <i class="icon-sent-packages"></i>
                <br class="hide-lg"> Colis Expédiés </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/packages-add-ship">
                <i class="icon-expected-package"></i>
                <br class="hide-lg"> Colis attendus </a>
            </div>
            <div class="col-sm-3 col-xs-3">
              <a href="/purchase-add-articles">
                <i class="icon-assisted-purchase"></i>
                <br class="hide-lg"> Achat Assisté </a>
            </div>
          </div>
        </div>
    </div>

    <div id="page-content" class="page-content">
      <div class="subtabs">
        <div class="container">
          <div class="subtabs-wrapper">
            <div>
              <a href="/packages-action-required" class="active-ajax-link">Action Requise <span class="badge">0</span>
              </a>
            </div>
            <div>
              <a href="/packages-in-progress">En cours <span class="badge">0</span>
              </a>
            </div>
            <div>
              <a href="/packages-ready-to-ship">Prêt Pour l’Envoi <span class="badge">0</span>
              </a>
            </div>
            <div class="search-bar hide-sm">
              <form method="POST" action="https://www.shipito.com/fr/account/incoming-packages/search" name="packagesearchform" id="packagesearchform" class="form-inline">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" name="incomingpackage.keyword" id="package-search-input" class="form-control collapsed" placeholder="Rechercher des colis par numéro de suivi, vendeur, ou vos notes">
                    <span class="input-group-btn">
                      <button type="BUTTON" class="btn" id="package-search-btn">
                        <i class="icon-search"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <style type="text/css">
        P.damaged-notes {
          font-size: 14px;
          font-weight: 600;
        }
      </style>

      <div class="main-body">
        <div class="container package-list">
          <h2>Action Requise (0)</h2>
          <div class="row">
            <div class="col-xs-12">
              <div id="header-content-action-required">
                <p>
                  <strong> Veuillez noter : <strong> Si vous avez été informé par un transporteur qu'un colis a été livré à Shipito et que vous ne voyez pas votre colis listé ici, veuillez prévoir 1 à 2 jours ouvrables pour l'enregistrement du colis et la mise à jour du système. </strong>
                  </strong>
                </p>
              </div>
            </div>
          </div>
          <strong>
            <strong>
              <div class="panel-group"></div>
            </strong>
          </strong>
        </div>
        <strong>
          <strong>
            <div id="getting-started">
              <div class="container">
                <div id="start-shopping" class="row">
                  <div class="text-center col-sm-12 col-xs-12">
                    <p style="font-size:larger; margin-bottom:50px;">Commencez à magasiner et expédiez à votre adresse Shipito!</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-8 col-xs-12 steps">
                    <img class="step-number" src="files/circle1.svg">
                    <div class="step-text">Faites vos achats sur vos sites internet préférés</div>
                    <div class="hide-lg">
                      <img id="step1" src="files/GettingStarted_MobileStep1.svg">
                      <hr class="vbar">
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <img class="step-number" src="files/circle2.svg">
                    <div class="step-text">Utilisez votre adresse Shipito au moment de la commande</div>
                    <div class="hide-lg">
                      <img id="step2" src="files/GettingStarted_MobileStep2.svg">
                    </div>
                    <div id="customer-info">
                      <div id="customer-name">
                        <b>Julian ADJIBI</b>
                      </div> 444 Alaska Avenue <br>Suite #AMJ971 <br>Torrance, CA 90503 <br>USA
                    </div>
                    <div id="address-copy">
                      <i class="icon-lightbulb bulb"></i> Vous pouvez copier l'adresse dans votre presse-papiers en appuyant sur chaque ligne.
                    </div>
                    <div id="copy-address-btn">
                      <a href="https://www.shipito.com/fr/account/copy-address" id="btn-copy-address" class="btn btn-lg btn-secondary" onclick="return gaPopUpDisplay(this);"> Copier Mon Adresse</a>
                    </div>
                  </div>
                </div>
                <div class="row" id="getting-started-bottom">
                  <div class="col-sm-12 col-xs-12 text-center">
                    <hr class="hide-lg vbar getting-started">
                    <a href="https://www.shipito.com/fr/account/help/getting-started" id="btn-getting-started" class="btn btn-lg btn-secondary"> Comment commencer</a>
                  </div>
                </div>
              </div>
              <script>
                $('FORM').off('submit', bsValidateForm);
                $('FORM').submit(bsValidateForm);
                $('.submitbutton').off('click', bsSubmitForm);
                $('.expandtextareabtn').off('click', bsExpandTextArea);
                $('.submitbutton').click(bsSubmitForm);
                formvalidator.initializeForms();
              </script>
              <script>
                initializeWidgets();
                formvalidator.initializeForms();
              </script>
              <!--- Copyright 2024 GlobalAccess All Rights Reserved -->
              <!--- Web Server 3095 -->
            </div>
            <script>
              $(document).ready(function() {
                $("#getting-started").load("../help/ajx-getting-started");
              });
            </script>
          </strong>
        </strong>
      </div>

      @include('layouts.footer-auth')
    </div>


    <div id="chat-widget-container" style="opacity: 0; visibility: hidden; z-index: -1; position: fixed; bottom: 0px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px; transition: none 0s ease 0s !important;">
      <iframe allow="clipboard-read; clipboard-write; autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;" src="files/open_chat.html" allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important; display: none; visibility: hidden;"></iframe>
      <iframe allowtransparency="true" id="chat-widget-minimized" name="chat-widget-minimized" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; display: block;" src="files/saved_resource.html"></iframe>
    </div>
  </body>
</html>
