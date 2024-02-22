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
            <div class="col-sm-4 col-xs-4">
              <a href="/packages-action-required" class="ACTIVE">
                <i class="icon-packages-in-warehouse"></i>
                <br class="hide-lg"> Colis dans l'entrepôt </a>
            </div>
            <div class="col-sm-4 col-xs-4">
              <a href="/packages-in-transit" >
                <i class="icon-sent-packages"></i>
                <br class="hide-lg"> Colis Expédiés </a>
            </div>
            {{-- <div class="col-sm-3 col-xs-3">
              <a href="/packages-add-ship">
                <i class="icon-expected-package"></i>
                <br class="hide-lg"> Colis attendus </a>
            </div> --}}
            <div class="col-sm-4 col-xs-4">
              <a href="/purchase-add-articles">
                <i class="icon-assisted-purchase"></i>
                <br class="hide-lg"> Achat Assisté </a>
            </div>
          </div>
        </div>
    </div>


    <div id="page-content" class="page-content">
        <?php
            $packages = App\Models\Package::where('user_id', Auth::user()->id)->where('level_id', 3)->with('level')->get();
        ?>

      <div class="subtabs">
        <div class="container">
          <div class="subtabs-wrapper">
            <div>
              <a href="/packages-action-required">Action Requise <span class="badge">{{App\Models\Package::countActionRequise(Auth::user()->id ) }}</span>
              </a>
            </div>
            <div>
              <a href="/packages-in-progress">En cours <span class="badge">{{App\Models\Package::countEnCours(Auth::user()->id ) }}</span>
              </a>
            </div>
            <div>
              <a href="/packages-ready-to-ship" class="active-ajax-link">Prêt Pour l’Envoi <span class="badge">{{App\Models\Package::countPretEnvoi(Auth::user()->id ) }}</span>
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

          <div class="panel-group">
            <h2>Colis prêt pour l’envoi ({{App\Models\Package::countPretEnvoi(Auth::user()->id ) }})</h2>
          </div>

          @foreach ($packages as $key => $package )

            <div class="panel panel-packages">
                <div class="icons">
                    <img width="40" height="40" src="{{asset('assets/images/pages/product/box' . (($key % 3) + 1) . '.png')}}" alt="">
                </div>
                <div class="panel-heading">

                <div class="package-id">

                    {{$package->name_package}} </div>
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <label>Numéro de Suivi 24567</label>
                    </div>

                    <div class="col-sm-2 col-xs-3">
                        <label>Recu le</label> {{ Carbon\Carbon::parse($package->date)->format('d F Y') }}
                    </div>

                    <div class="col-sm-2 col-xs-3">
                        <label>Poids</label> {{$package->weight}} KG
                    </div>

                    <div class="col-sm-1 col-xs-3">
                        <label>Prix</label> {{$package->price}} CFA
                    </div>

                    <div class="col-sm-1 col-xs-3">
                        <label>Destinataire</label> {{$package->address}}
                    </div>

                    <div class="col-sm-4 col-xs-12">
                    <a href="#" class="btn btn-{{ App\Models\Package::LEVEL_BADGE[$package->level->id] }}" >{{$package->level->name}}</a>
                    <button class="btn btn-secondary" title="Supprimer le Colis">{{$package->status}}</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                    <div class="edit-label">
                        <div class="static"> <label>Détail</label> {{$package->description}}</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
    @include('layouts.footer-auth')
  </body>
</html>
