<!DOCTYPE html>
<!-- saved from url=(0055)https://www.shipito.com/fr/account/help/getting-started -->
<html dir="ltr" lang="fr">

  @include('layouts.head-auth')

  <body cz-shortcut-listen="true">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NGCCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="menu-filler" class="with-tabs"></div>
    <a name="page-top" id="page-top" class="with-tabs"></a>

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
            <a href="https://www.shipito.com/fr/account/incoming-packages/action-required">
              <i class="icon-packages-in-warehouse"></i>
              <br class="hide-lg"> Colis dans l'entrepôt </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/sent-packages">
              <i class="icon-sent-packages"></i>
              <br class="hide-lg"> Colis Expédiés </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/expected-packages">
              <i class="icon-expected-package"></i>
              <br class="hide-lg"> Colis attendus </a>
          </div>
          <div class="col-sm-3 col-xs-3">
            <a href="https://www.shipito.com/fr/account/assisted-purchase">
              <i class="icon-assisted-purchase"></i>
              <br class="hide-lg"> Achat Assisté </a>
          </div>
        </div>
      </div>
    </div>
    <div id="page-content" class="page-content">
      <style>
        #start-shopping,
        #getting-started-bottom {
          display: none;
        }

        .dropdown-menu.account-help:HOVER {
          margin-top: 0px;
        }
      </style>
      <div id="getting-started">
        <div class="container-fluid st-page-header getting-started">
          <div class="container help-header getting-started">
            <h1>Pour commencer</h1>
          </div>
        </div>
        <section class="container">
          <div id="GSDIV">
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
              $("#GSDIV").load("ajx-getting-started");
            });
          </script>
          <h2 class="section-title">
            <span>Vous êtes maintenant prêt(e) pour vos achats!</span>
          </h2>
          <div class="row text-center">
            <div class="col-sm-4 col-xs-12"> Cette vidéo vous aidera à commencer vos achats <div class="amazon-help">
                <div class="amazon-img videothumbs not-mobile">
                  <div class="play-btn">
                    <a href="https://www.shipito.com/fr/account/newuservideo" onclick="return gaPopUpDisplay(this);">
                      <img src="files/play.svg">
                    </a>
                  </div>
                  <img class="amazon-img" src="files/VideoThumbnail1.svg">
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12"> Comment saisir votre adresse sur Amazon <div class="amazon-help">
                <div class="amazon-img">
                  <img class="hide-sm img-responsive" src="files/GettingStarted_Arrow.svg" id="next-arrow">
                  <img class="hide-sm img-responsive" src="files/GettingStarted_Address.svg">
                  <img class="hide-lg img-responsive" src="files/GettingStarted_AddressMobile.svg">
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12"> Voilà à quoi ça ressemblera: <div class="amazon-help">
                <div class="amazon-img">
                  <img class="img-responsive" id="amazon-form" src="files/GettingStarted_Address.png">
                </div>
              </div>
            </div>
          </div>
        </section>
        <h2 class="section-title">
          <span>Voici une liste de magasins intéressants pour commencer vos achats</span>
        </h2>
        <div class="container" style="margin:0 auto 0 auto; padding-left:0px; padding-right: 0px;">
          <header class="scroll">
            <table class="brands-table">
              <tbody>
                <tr>
                  <td class="brand-cell-left brand-odd">
                    <div>
                      <a class="brand-link" href="https://www.adidas.com/" target="_blank">
                        <img src="files/Adidas.svg" border="0" class="brand-image">
                        <span class="brand-name">Adidas</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.guess.com/" target="_blank">
                        <img src="files/Guess.svg" border="0" class="brand-image">
                        <span class="brand-name">Guess</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.funko.com/" target="_blank">
                        <img src="files/Funco.svg" border="0" class="brand-image">
                        <span class="brand-name">Funko</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-even">
                    <div>
                      <a class="brand-link" href="https://www.amazon.com/?&amp;_encoding=UTF8&amp;tag=shipitocom-20&amp;linkCode=ur2&amp;linkId=736098cc6fdeb17752e43810887585d2&amp;camp=1789&amp;creative=9325" target="_blank">
                        <img src="files/Amazon.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Amazon</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.calvinklein.us/" target="_blank">
                        <img src="files/CalvinKlein.svg" border="0" class="brand-image">
                        <span class="brand-name">Calvin Klein</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.newegg.com/" target="_blank">
                        <img src="files/Newegg.svg" border="0" class="brand-image">
                        <span class="brand-name">Newegg</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-odd">
                    <div>
                      <a class="brand-link" href="https://www.boxycharm.com/" target="_blank">
                        <img src="files/BoxyCharm.svg" border="0" class="brand-image-top">
                        <span class="brand-name">BoxyCharm</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.nordstrom.com/" target="_blank">
                        <img src="files/Nordstrom.svg" border="0" class="brand-image">
                        <span class="brand-name">Nordstrom</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.guitarcenter.com/" target="_blank">
                        <img src="files/GuitarCenter.svg" border="0" class="brand-image">
                        <span class="brand-name">Guitar Center</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-even">
                    <div>
                      <a class="brand-link" href="http://www.walmart.com/" target="_blank">
                        <img src="files/Walmart.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Walmart</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.carters.com/" target="_blank">
                        <img src="files/Carters.svg" border="0" class="brand-image">
                        <span class="brand-name">Carter’s</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.timberland.com/" target="_blank">
                        <img src="files/Timberland.svg" border="0" class="brand-image">
                        <span class="brand-name">Timberland</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-odd">
                    <div>
                      <a class="brand-link" href="https://www.ebay.com/" target="_blank">
                        <img src="files/eBay.svg" border="0" class="brand-image-top">
                        <span class="brand-name">eBay</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.crocs.com/" target="_blank">
                        <img src="files/Crocs.svg" border="0" class="brand-image">
                        <span class="brand-name">Crocs</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.overstock.com/" target="_blank">
                        <img src="files/Overstock.svg" border="0" class="brand-image">
                        <span class="brand-name">Overstock.com</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-even">
                    <div>
                      <a class="brand-link" href="https://www.nike.com/" target="_blank">
                        <img src="files/Nike.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Nike</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://stores.advanceautoparts.com/" target="_blank">
                        <img src="files/AdvanceAutoParts.svg" border="0" class="brand-image">
                        <span class="brand-name">Advance Auto Parts</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://bcbg.com/" target="_blank">
                        <img src="files/BCBG.svg" border="0" class="brand-image">
                        <span class="brand-name">BCBG</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-odd">
                    <div>
                      <a class="brand-link" href="https://www.macys.com/" target="_blank">
                        <img src="files/Macy&#39;s.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Macy's</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.zara.com/us/" target="_blank">
                        <img src="files/Zara.svg" border="0" class="brand-image">
                        <span class="brand-name">Zara</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.abercrombie.com/shop/us" target="_blank">
                        <img src="files/A&amp;F.svg" border="0" class="brand-image">
                        <span class="brand-name">Abercrombie &amp; Fitch</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-even">
                    <div>
                      <a class="brand-link" href="https://www.zulily.com/" target="_blank">
                        <img src="files/Zulily.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Zulily</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.bathandbodyworks.com/" target="_blank">
                        <img src="files/Bath&amp;BodyWorks.svg" border="0" class="brand-image">
                        <span class="brand-name">Bath &amp; Body Works</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.michaelkors.com/" target="_blank">
                        <img src="files/MichaelKors.svg" border="0" class="brand-image">
                        <span class="brand-name">Michael Kors</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell brand-odd">
                    <div>
                      <a class="brand-link" href="https://colourpop.com/" target="_blank">
                        <img src="files/Colourpop.svg" border="0" class="brand-image-top">
                        <span class="brand-name">ColourPop</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.backcountry.com/" target="_blank">
                        <img src="files/Backcountry.svg" border="0" class="brand-image">
                        <span class="brand-name">Backcountry</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.carparts.com/" target="_blank">
                        <img src="files/CarParts.svg" border="0" class="brand-image">
                        <span class="brand-name">CarParts.com</span>
                      </a>
                    </div>
                  </td>
                  <td class="brand-cell-right brand-even">
                    <div>
                      <a class="brand-link" href="https://www.aeropostale.com/" target="_blank">
                        <img src="files/Aeropostale.svg" border="0" class="brand-image-top">
                        <span class="brand-name">Aéropostale</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://bananarepublic.gap.com/" target="_blank">
                        <img src="files/BananaRepublic.svg" border="0" class="brand-image">
                        <span class="brand-name">Banana Republic</span>
                      </a>
                    </div>
                    <div>
                      <a class="brand-link" href="https://www.wayfair.com/" target="_blank">
                        <img src="files/Wayfair.svg" border="0" class="brand-image">
                        <span class="brand-name">Wayfair</span>
                      </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </header>
        </div>
      </div>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
