<!DOCTYPE html>
<!-- saved from url=(0052)https://www.shipito.com/fr/account/assisted-purchase -->
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
              <a href="/packages-action-required" >
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
              <a href="/purchase-add-articles" class="ACTIVE">
                <i class="icon-assisted-purchase"></i>
                <br class="hide-lg"> Achat Assisté </a>
            </div>
          </div>
        </div>
    </div>


    <div id="page-content" class="page-content">
      <div class="main-body">
        <div class="container package-list">
          <div class="row">
            <div class="col-xs-12 col-sm-6 text-left">
              <h2>Achats Assistés</h2>
            </div>
            <div class="col-xs-12 col-sm-6 text-right text-center-sm">
              <form method="POST" action="/purchase-add-articles">
                <input type="HIDDEN" name="act" value="AssistedPurchase.startAssistedPurchase">
                <input type="HIDDEN" name="cmscountry" value="us">
                <input type="HIDDEN" name="cmslanguage" value="fr">
                <input type="HIDDEN" name="gasv" value="2924807557820894208">
                <input type="HIDDEN" name="postingpageurl" value="/fr/account/assisted-purchase">
                <button type="SUBMIT" class="btn btn-primary" title="Nouvel Achat Assisté">Nouvel Achat Assisté</button>
              </form>
            </div>
          </div>
          <div class="panel package-list" style="margin-top:5px;">
            <div class="panel-heading"> Vous n'avez effectué aucune demande d'Achat Assisté </div>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
