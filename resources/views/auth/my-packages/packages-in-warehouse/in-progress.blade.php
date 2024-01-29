<!DOCTYPE html>
<!-- saved from url=(0064)https://www.shipito.com/fr/account/incoming-packages/in-progress -->
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
              <a href="/packages-action-required">Action Requise <span class="badge">0</span>
              </a>
            </div>
            <div>
              <a href="/packages-in-progress" class="active-ajax-link">En cours <span class="badge">0</span>
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

      <div class="main-body">
        <div class="container package-list">
          <h2>Demandes en cours de traitement (0)</h2>
        </div>
      </div>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
