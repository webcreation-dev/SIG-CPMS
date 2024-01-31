<!DOCTYPE html>
<!-- saved from url=(0066)https://www.shipito.com/fr/account/incoming-packages/ready-to-ship -->
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
              <a href="/packages-in-progress">En cours <span class="badge">0</span>
              </a>
            </div>
            <div>
              <a href="/packages-ready-to-ship" class="active-ajax-link">Prêt Pour l’Envoi <span class="badge">0</span>
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
          <h2>Vos colis actuellement au sein de l’entrepôt de Lynia Delivery Express sont prêts pour l’envoi</h2>
          <div class="row action-blocks">
            <div class="col-sm-4 col-xs-12 action-block">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">UN COLIS</div>
                  <div class="service">Envoyer un colis</div>
                </div>
                <div class="col-xs-5">
                  <div class="image">
                    <img src="files/OnePKG.svg" border="0" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="description">Envoyer un seul colis à une seule adresse. La plus simple des options!</div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center select-button">
                  <form method="POST" action="https://www.shipito.com/servlet/Account" name="shipsingleform">
                    <input type="HIDDEN" name="act" value="MailOut.startMailOut">
                    <input type="HIDDEN" name="cmscountry" value="us">
                    <input type="HIDDEN" name="cmslanguage" value="fr">
                    <input type="HIDDEN" name="gasv" value="2924807557820894208">
                    <input type="HIDDEN" name="postingpageurl" value="/fr/account/incoming-packages/ready-to-ship">
                    <input type="HIDDEN" name="mailout.shipmenttype" value="10">
                    <button type="SUBMIT" class="btn btn-primary btn-lg" title="Sélectionner un colis">Sélectionner un colis</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 action-block">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">MULTIPLES COLIS</div>
                  <div class="service">Envoyer plusieurs colis à la même adresse en même temps</div>
                </div>
                <div class="col-xs-5">
                  <div class="image">
                    <img src="files/MultiplePKG.svg" border="0" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="description visible-sm">Regrouper le contenu des cartons mais pas les cartons. Economisez sur les frais de livraison du transporteur. Disponible uniquement avec les transporteurs sélectionnés.</div>
                  <div class="description hidden-sm">Regrouper le contenu des cartons mais pas les cartons. Disponible uniquement avec les transporteurs sélectionnés.</div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center select-button">
                  <form method="POST" action="https://www.shipito.com/servlet/Account" name="shipmpsform">
                    <input type="HIDDEN" name="act" value="MailOut.startMailOut">
                    <input type="HIDDEN" name="cmscountry" value="us">
                    <input type="HIDDEN" name="cmslanguage" value="fr">
                    <input type="HIDDEN" name="gasv" value="2924807557820894208">
                    <input type="HIDDEN" name="postingpageurl" value="/fr/account/incoming-packages/ready-to-ship">
                    <input type="HIDDEN" name="mailout.shipmenttype" value="20">
                    <button type="SUBMIT" class="btn btn-primary btn-lg" title="Sélectionner plusieurs colis">Sélectionner plusieurs colis</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 action-block">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading">Regroupement</div>
                  <div class="service">Réalisez d'importantes économies en regroupant plusieurs colis en un!</div>
                </div>
                <div class="col-xs-5">
                  <div class="image">
                    <img src="files/Consolidation.svg" border="0" class="img-responsive">
                  </div>
                </div>
                <div class="col-xs-7">
                  <div class="description">Demandez le regroupement de vos colis et économisez jusqu'à 80% sur les frais d'envoi!</div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 text-center select-button">
                  <form method="POST" action="https://www.shipito.com/servlet/Account" name="consolform">
                    <input type="HIDDEN" name="act" value="Consolidation.startConsolidation">
                    <input type="HIDDEN" name="cmscountry" value="us">
                    <input type="HIDDEN" name="cmslanguage" value="fr">
                    <input type="HIDDEN" name="gasv" value="2924807557820894208">
                    <input type="HIDDEN" name="postingpageurl" value="/fr/account/incoming-packages/ready-to-ship">
                    <button type="SUBMIT" class="btn btn-primary btn-lg" title="Commencer le regroupement">Commencer le regroupement</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="panel-group">
            <h2>Vous n'avez actuellement aucun colis prêt pour l’envoi</h2>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
