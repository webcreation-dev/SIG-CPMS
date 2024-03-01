
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
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Nouveau colis</a></li>
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
      <div class="theme-body cdxshopping-cart">
        <div class="custom-container">
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <div class="info-group">
                    <form>
                      <div class="form-group">
                        <label class="form-label">Product Name</label>
                        <input class="form-control" type="text" placeholder="Enter Your Product Name">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Product Description</label>
                        <textarea id="crowenkeditor" placeholder="Enter YourProduct Description"></textarea>
                      </div>
                      <div class="form-group">
                        <div class="small-group">
                          <div>
                            <label class="form-label">Categories</label>
                            <select class="form-select">
                              <option>Select Categories</option>
                              <option>Fashion</option>
                              <option>Cosmetics</option>
                              <option>Sweater</option>
                              <option>Dress</option>
                              <option>Shirt</option>
                              <option>Sandel</option>
                              <option>Jacket</option>
                              <option>Pent</option>
                            </select>
                          </div>
                          <div>
                            <label class="form-label">Brand</label>
                            <select class="form-select">
                              <option>Select Brand</option>
                              <option>Zara</option>
                              <option>Cartier</option>
                              <option>Lululemon</option>
                              <option>Moncler</option>
                              <option>Fendi</option>
                              <option>Old Navy</option>
                              <option>Moncler</option>
                              <option>Delhiwear</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-0">
                        <label class="form-label">Comment</label>
                        <textarea class="form-control" placeholder="Enter Your Comment"></textarea>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <form class="dropzone needsclick" id="demo-upload" action="/upload">
                    <div class="dz-message needsclick">
                      <div class="upload-icon"><i class="fa fa-cloud-upload"></i></div>
                      <h3>Drop files here or click to upload.</h3>
                      <p>(This is just a demo dropzone. Selected files are<strong>
                          not actually uploaded.)</strong></p>
                    </div>
                  </form>
                  <div class="preview-dropzon" style="display: none;">
                    <div class="dz-preview dz-file-preview">
                      <div class="dz-image"><img data-dz-thumbnail="" src="" alt=""></div>
                      <div class="dz-details">
                        <div class="dz-size"><span data-dz-size=""></span></div>
                        <div class="dz-filename"><span data-dz-name=""></span></div>
                      </div>
                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                      <div class="dz-success-mark"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="info-group">
                    <form>
                      <div class="form-group">
                        <label class="form-label">Price</label>
                        <input class="form-control" type="text" placeholder="Enter Product Price">
                      </div>
                      <div class="form-group mb-0">
                        <label class="form-label">Status</label>
                        <div class="small-group">
                          <div>
                            <div class="chek-group"><span class="custom-check-input custom-chek">
                                  <input class="form-check-input" type="radio" id="pricerange_1" name="Status"></span>
                              <label class="ml-5" for="pricerange_1">Online</label>
                            </div>
                          </div>
                          <div>
                            <div class="chek-group"><span class="custom-check-input custom-chek">
                                  <input class="form-check-input" type="radio" id="pricerange_2" name="Status"></span>
                              <label class="ml-5" for="pricerange_2">Offline</label>
                            </div>
                          </div>
                          <div>
                            <div class="chek-group"><span class="custom-check-input custom-chek">
                                  <input class="form-check-input" type="radio" id="pricerange_3" name="Status"></span>
                              <label class="ml-5" for="pricerange_3">Draft</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="group-button text-end"><a class="btn btn-success" href="javascript:void(0)">Add</a><a class="btn btn-danger ml-15" href="javascript:void(0)">cancle</a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- theme body end-->
    </div>
    
    @include("layouts.admin.footer")
  </body>
</html>
