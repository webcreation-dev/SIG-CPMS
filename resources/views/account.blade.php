<!DOCTYPE html>
<!-- saved from url=(0064)https://www.shipito.com/fr/account/incoming-packages/no-packages -->
<html dir="ltr" lang="fr">

    @include('layouts.head-auth')

  <body cz-shortcut-listen="true">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGCCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="menu-filler" class=""></div>
    <a name="page-top" id="page-top" class=""></a>
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
    <div id="page-content" class="page-content">
      <div class="main-body">
        <div class="container package-list">
          <h1>Et maintenant ?</h1>
          <p> Avec votre nouvelle adresse Lynia Delivery Express, vous pouvez commencer vos achats sur presque tous les sites internet. Il vous suffit simplement d’utiliser cette nouvelle adresse lors de vos commandes. Nous vous informons de l'arrivée de vos articles à l'entrepôt. </p>
          <div id="getting-started">
            <div class="container">
              <div id="start-shopping" class="row">
                <div class="text-center col-sm-12 col-xs-12">
                  <p style="font-size:larger; margin-bottom:50px;">Commencez à magasiner et expédiez à votre adresse Lynia Delivery Express!</p>
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
                  <div class="step-text">Utilisez votre adresse Lynia Delivery Express au moment de la commande</div>
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
                    <a href="#" id="btn-copy-address" class="btn btn-lg btn-secondary" onclick="return gaPopUpDisplay(this);"> Copier Mon Adresse</a>
                  </div>
                </div>
              </div>
              <div class="row" id="getting-started-bottom">
                <div class="col-sm-12 col-xs-12 text-center">
                  <hr class="hide-lg vbar getting-started">
                  <a href="#" id="btn-getting-started" class="btn btn-lg btn-secondary"> Comment commencer</a>
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
            <!--- Web Server 30245 -->
          </div>
          <script>
            $(document).ready(function() {
              $("#getting-started").load("../help/ajx-getting-started");
            });
          </script>
        </div>
      </div>
    </div>

    @include('layouts.footer-auth')

  </body>
</html>
