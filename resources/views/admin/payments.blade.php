<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin.head')
  <body>
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    <div class="themebody-wrap">
      <!-- breadcrumb start-->
        <div class="codex-breadcrumb">
          <div class="breadcrumb-contain">
            <div class="left-breadcrumb">
              <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html">
                    <h1>Tableau de bord</h1></a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Liste des paiements</a></li>
              </ul>
            </div>
            <div class="right-breadcrumb">
              <ul>
                <li>
                  <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
                </li>
                <li>
                  <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"> </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      <div class="theme-body myCustomScrollbar cdxshopping-cart" data-mcs-theme="minimal-dark">
        <div class="custom-container">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table productlist-tbl display dataTable cell-border" id="basicdata-tbl" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nom du colis  </th>
                          <th>Prix</th>
                          <th>ID Paiement</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>
                                    <div class="product-imgwrap"><img class="img-fluid" src="{{asset('assets/images/pages/product/box' . (($key % 3) + 1) . '.png')}}" alt=""></div>
                                </td>
                                <td>{{$payment->package->name_package}} </td>
                                <td>{{$payment->package->price}}</td>
                                <td>#{{$package->payment_id}}</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger" type="button">{{$package->payment_status}}</button>
                                </td>
                            </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- theme body end-->
    </div>


    @include("layouts.admin.footer")
</body>
</html>
