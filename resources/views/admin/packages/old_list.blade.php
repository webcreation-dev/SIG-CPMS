
<!DOCTYPE html>
<html lang="en">
    @include("layouts.admin.head")
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
                <li class="breadcrumb-item"><a href="javascript:void(0);">Liste des colis</a></li>
                {{-- <li class="breadcrumb-item active"><a href="javascript:void(0);">product</a></li> --}}
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
      <div class="theme-body">
        <div class="custom-container">
          <div class="row">
            <div class="col-12">
              <div class="row position-relative">
                {{-- <div class="col-xl-3 cdx-xxl-30 product-filter cdxapp-xl-sidebar">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="filter-title">Category      </h5>
                      <ul class="filter-list">
                        <li>
                          <div class="chek-group mb-8">                 <span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="checkAll" name="category"></span>
                            <label class="fs-16 ml-5" for="checkAll">All</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="category-2" name="category" checked=""></span>
                            <label class="fs-16 ml-5" for="category-2">Mens</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="category-3" name="category"></span>
                            <label class="fs-16 ml-5" for="category-3">Womans</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="category-4" name="category"></span>
                            <label class="fs-16 ml-5" for="category-4">Child</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="category-5" name="category"></span>
                            <label class="fs-16 ml-5" for="category-5">House &amp; kitchen</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="category-6" name="category"></span>
                            <label class="fs-16 ml-5" for="category-6">Technology                                   </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="filter-title">Price Range</h5>
                      <ul class="filter-list">
                        <li>
                          <div class="chek-group mb-8">                 <span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="radio" id="pricerange-1" name="priceRange"></span>
                            <label class="fs-16 ml-5" for="pricerange-1">Up to $100</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="radio" id="pricerange-2" name="priceRange"></span>
                            <label class="fs-16 ml-5" for="pricerange-2">Up to $500</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="radio" id="pricerange-3" name="priceRange"></span>
                            <label class="fs-16 ml-5" for="pricerange-3">Up to $1000</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-8"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="radio" id="pricerange-4" name="priceRange"></span>
                            <label class="fs-16 ml-5" for="pricerange-4">Up to $1500</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="radio" id="pricerange-5" name="priceRange" checked="checked"></span>
                            <label class="fs-16 ml-5" for="pricerange-5">Up to $2000</label>
                          </div>
                        </li>
                        <li>
                          <div class="range-group">
                            <input class="minmax-range" type="text" name="my-range" value="">
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="filter-title">Discount </h5>
                      <ul class="filter-list">
                        <li>
                          <div class="chek-group mb-5"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="checkAll-discount" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="checkAll-discount">All</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-5"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="discount-1" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="discount-1">20% - 40% Discount</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-5"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="discount-2" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="discount-2">40% - 60% Discount</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-5"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="discount-3" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="discount-3">60% - 80% Discount</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group mb-5"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="discount-4" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="discount-4">80% - 90% Discount</label>
                          </div>
                        </li>
                        <li>
                          <div class="chek-group"><span class="custom-check-input custom-chek">
                                <input class="form-check-input" type="checkbox" id="discount-5" name="discount-group"></span>
                            <label class="fs-16 ml-5" for="discount-5">90% - 95% Discount  </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="filter-title">Colors</h5>
                      <ul class="product-color">
                        <li class="bg-primary">
                          <div></div>
                        </li>
                        <li class="bg-secondary">
                          <div></div>
                        </li>
                        <li class="bg-success">
                          <div></div>
                        </li>
                        <li class="bg-info">
                          <div></div>
                        </li>
                        <li class="bg-warning">
                          <div>                                                                                      </div>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="col-xl-9 cdx-xxl-70 cdx-xl-100"> --}}
                  <div class="row grid-view-page">
                    {{-- <div class="col-12">
                      <div class="card mb-20">
                        <div class="card-body">
                          <div class="grid-wrap-header">
                            <ul class="gridfilter-list">
                              <li class="cdxapp-toggle d-lg-none"><a href="javascript:void(0);"> <i data-feather="filter"></i></a></li>
                              <li class="gridview-toggle">                             <a href="javascript:void()"><i data-feather="grid"></i></a></li>
                              <li class="listview-toggle"><a href="javascript:void()"> <i data-feather="list">                        </i></a></li>
                            </ul>
                            <div><a class="btn btn-primary" href="add-product.html"> <i class="ti-plus mr-5"></i>Add Product</a></div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <a class="btn btn-md btn-primary mb-15 float-end" href="{{route('package.create')}}"> <i class="ti-plus mr-5"></i>Ajouter un colis</a>
                        </div>
                    </div>

                    {{-- <div class="col-md-3 col-sm-6 mb-24">
                        <div class="product-boxwrap">
                          <div class="product-imgwrap"><a href="product-detail.html"><img class="img-fluid" src="../assets/images/pages/product/box1.jpg" alt="product box"></a><span class="product-sale-label">Hot</span><span class="product-discount-label">-8%</span>
                            <ul class="social">
                              <li><a href="cart.html" data-tip="add to cart"><i class="icofont-shopping-cart"></i></a></li>
                              <li><a href="{{route('package.create')}}" data-tip="Quick View">
                                <i class="ti-eye"></i>
                            </a></li>
                              <li><a href="wishlist.html" data-tip="Wishlist"><i class="icofont-heart-alt"></i></a></li>
                            </ul>
                          </div>
                          <div class="product-detailwrap">
                            <div><a href="product-detail.html">
                                <h5>Cheks red Shirt</h5></a>
                                <div class="pro-rating">
                                  <input type="radio" id="input-11" name="input-1">
                                  <label class="star" for="input-11">   </label>
                                  <input type="radio" id="input-12" name="input-1">
                                  <label class="star" for="input-12">   </label>
                                  <input type="radio" id="input-13" name="input-1">
                                  <label class="star" for="input-13">   </label>
                                  <input type="radio" id="input-14" name="input-1">
                                  <label class="star" for="input-14">   </label>
                                  <input type="radio" id="input-15" name="input-1">
                                  <label class="star" for="input-15">   </label>
                                </div>
                              <div class="pro-price">$252<span class="old-price">$238</span></div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-24">
                        <div class="product-boxwrap">
                          <div class="product-imgwrap"><a href="product-detail.html"><img class="img-fluid" src="../assets/images/pages/product/box2.jpg" alt="product box"></a><span class="product-sale-label">Hot</span>
                            <ul class="social">
                              <li><a href="cart.html" data-tip="add to cart"><i class="icofont-shopping-cart"></i></a></li>
                              <li><a href="product-detail.html" data-tip="Quick View"><i class="icofont-eye-alt"></i></a></li>
                              <li><a href="wishlist.html" data-tip="Wishlist"><i class="icofont-heart-alt"></i></a></li>
                            </ul>
                          </div>
                          <div class="product-detailwrap">
                            <div><a href="product-detail.html">
                                <h5>pink T-shirt</h5></a>
                                <div class="pro-rating">
                                  <input type="radio" id="input-21" name="input-2">
                                  <label class="star" for="input-21">   </label>
                                  <input type="radio" id="input-22" name="input-2">
                                  <label class="star" for="input-22">   </label>
                                  <input type="radio" id="input-23" name="input-2">
                                  <label class="star" for="input-23">   </label>
                                  <input type="radio" id="input-24" name="input-2">
                                  <label class="star" for="input-24">   </label>
                                  <input type="radio" id="input-25" name="input-2">
                                  <label class="star" for="input-25">   </label>
                                </div>
                              <div class="pro-price">$180<span class="old-price">$180</span></div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-24">
                        <div class="product-boxwrap">
                          <div class="product-imgwrap"><a href="product-detail.html"><img class="img-fluid" src="../assets/images/pages/product/box3.jpg" alt="product box"></a><span class="product-discount-label">-18%</span>
                            <ul class="social">
                              <li><a href="cart.html" data-tip="add to cart"><i class="icofont-shopping-cart"></i></a></li>
                              <li><a href="product-detail.html" data-tip="Quick View"><i class="icofont-eye-alt"></i></a></li>
                              <li><a href="wishlist.html" data-tip="Wishlist"><i class="icofont-heart-alt"></i></a></li>
                            </ul>
                          </div>
                          <div class="product-detailwrap">
                            <div><a href="product-detail.html">
                                <h5>sky blue shirt</h5></a>
                                <div class="pro-rating">
                                  <input type="radio" id="input-31" name="input-3">
                                  <label class="star" for="input-31">   </label>
                                  <input type="radio" id="input-32" name="input-3">
                                  <label class="star" for="input-32">   </label>
                                  <input type="radio" id="input-33" name="input-3">
                                  <label class="star" for="input-33">   </label>
                                  <input type="radio" id="input-34" name="input-3">
                                  <label class="star" for="input-34">   </label>
                                  <input type="radio" id="input-35" name="input-3">
                                  <label class="star" for="input-35">   </label>
                                </div>
                              <div class="pro-price">$90<span class="old-price">$110</span></div>
                            </div>
                          </div>
                        </div>
                    </div> --}}
                    <div class="card">
                <div class="card-body">
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Pays</th>
                        <th>Age</th>
                        <th>Sexe</th>
                        <th>Statut</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td><span class="badge badge-success">ACTIF </span></td>
                        <td>
                            <a href="{{route('users.create')}}"><span class="badge badge-info"><i class="ti-eye"></i> </span></a>
                            <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                            <span class="badge badge-danger"></i> <i class="ti-plus"></i> </span>
                        </td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td><span class="badge badge-danger">INACTIF </span></td>
                        <td>
                            <a href="{{route('users.create')}}"><span class="badge badge-info"> <i class="ti-eye"></i> </span></a>
                            <span class="badge badge-warning"></i> <i class="ti-pencil"></i> </span>
                            <span class="badge badge-danger"></i> <i class="ti-trash"></i> </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

                  </div>
                {{-- </div> --}}
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
