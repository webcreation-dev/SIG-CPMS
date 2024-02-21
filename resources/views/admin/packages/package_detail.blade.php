
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
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Colis</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Détail du colis</a></li>
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
        <div class="theme-body product-detail-page">
            <div class="custom-container">
            <div class="row">
                <div class="col-md-5 cdx-xl-45">
                <div class="product-card">
                    <div class="product-for">
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/1.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/2.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/3.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/4.jpg" alt="product-detail"></div>
                    </div>
                    </div>
                    <div class="product-to">
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/1.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/2.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/3.jpg" alt="product-detail"></div>
                    </div>
                    <div>
                        <div class="product-imgwrap"><img class="img-fluid" src="../assets/images/pages/product-detail/4.jpg" alt="product-detail"></div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-7 cdx-xl-55 cdxpro-detail">
                <div class="product-card">
                    <div class="detail-group">
                    <div class="media">
                        <div>
                        <h2>Men Pink T-shirtual Jacket</h2>
                        <h6 class="text-light">Special price</h6>
                        <ul class="product-rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <ul class="product-price">
                            <li class="new-price">$70</li>
                            <li class="old-price text-light fw-400">
                            <del>$80</del>
                            </li>
                            <li class="ofr-price"><span class="badge badge-success">32% off</span></li>
                        </ul>
                        </div>
                        <div class="media-body">
                        <div class="product-share"><span class="proshare-toggle"><i data-feather="share-2">                        </i></span>
                            <ul class="share-iconlist">
                            <li class="bg-fb"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li class="bg-twt"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li class="bg-insta"><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li class="bg-whp"><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="detail-group">
                    <h6>product detail</h6>
                    <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud </p>
                    <h5 class="mb-5">Hurry! Only 3 left in stock</h5>
                    <div class="progress progress-danger">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    <div class="text-danger fs-14 mt-5 mb-10 fw-500">20 sold in last 24 hours</div>
                    <h6>select size</h6>
                    <ul class="product-size">
                        <li><a href="javascript:void(0);">s</a></li>
                        <li><a href="javascript:void(0);">m</a></li>
                        <li><a href="javascript:void(0);">l</a></li>
                        <li><a href="javascript:void(0);">xl    </a></li>
                    </ul>
                    </div>
                    <div class="detail-group">
                    <h6>select color</h6>
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
                        <div></div>
                        </li>
                    </ul>
                    <h6>Quantity</h6>
                    <div class="mb-15">
                        <div class="input-group pro-quantity"><span class="input-group-text count-minus"> <i data-feather="minus"></i></span>
                            <input class="form-control pro-qty" type="text" name="qty count" value="1"><span class="input-group-text count-plus"> <i data-feather="plus"></i></span>
                        </div>
                    </div><a class="btn btn-primary" href="cart.html">add to cart</a><a class="btn btn-primary ml-15" href="wishlist.html">wishlist</a>
                    </div>
                    <div class="detail-group pb-0 mb-0 border-0">
                    <h6>Delivery</h6>
                    <div class="input-group product-delivery"><span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                        <input class="form-control" type="text" value="368900" placeholder="Enter your pincod"><span class="input-group-text">check</span>
                    </div>
                    <h5 class="fs-14 mt-10 text-light">Usually delivered in 3 days            </h5>
                    </div>
                </div>
                </div>
                <div class="col-sm-12">
                <div class="product-card product-detail-tab">
                    <ul class="nav nav-tabs">
                    <li><a class="btn active" data-bs-toggle="tab" href="#tab-1">Description                </a></li>
                    <li><a class="btn" data-bs-toggle="tab" href="#tab-2">Information               </a></li>
                    <li><a class="btn" data-bs-toggle="tab" href="#tab-3">Review (03)</a></li>
                    </ul>
                    <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-1">
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <ul class="review-list">
                        <li>
                            <div class="media"><img class="img-fluid" src="../assets/images/avtar/2.jpg" alt="review">
                            <div class="media-body">                         <a href="profile.html">
                                <h5>Thomas Vactom</h5></a>
                                <ul class="rating-list">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            </div>
                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.           </p>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid" src="../assets/images/avtar/3.jpg" alt="review">
                            <div class="media-body"><a href="profile.html">
                                <h5>Johan deo</h5></a>
                                <ul class="rating-list">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            </div>
                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.           </p>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid" src="../assets/images/avtar/4.jpg" alt="review">
                            <div class="media-body"><a href="profile.html">
                                <h5>Omeni Rome</h5></a>
                                <ul class="rating-list">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            </div>
                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.           </p>
                        </li>
                        </ul>
                        <div class="review-box">
                        <h4 class="mb-5">Your Rating</h4>
                        <ul class="rating-list mb-10">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <h4 class="mb-10">Write Review</h4>
                        <form class="form-theme">
                            <div class="form-group">
                            <div class="small-group">
                                <div>
                                <input class="form-control" type="text" placeholder="Enter your name">
                                </div>
                                <div>
                                <input class="form-control" type="email" placeholder="Enter your email">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" placeholder="Your Review"></textarea>
                            </div>
                            <div class="form-group mb-0"><a class="btn btn-primary" href="javascript:void(0)">Post review</a></div>
                        </form>
                        </div>
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
