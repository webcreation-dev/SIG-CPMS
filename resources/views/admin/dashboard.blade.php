<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin.head')
  <body>
      <!-- Loader Start-->
        {{-- <div class="codex-loader">
          <div class="linespinner"></div>
        </div> --}}
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
                  <h1>Accueil</h1></a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">Tableau de bord</a></li>
            </ul>
          </div>
          <div class="right-breadcrumb">
            <ul>
              <li>
                <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
              </li>
              <li>
                <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      <div class="theme-body common-dash" data-simplebar>
        <div class="custom-container">
          <div class="row">
            @php
                $ues_count = App\Models\TeachingUnit::where('status','singular')->count();
                $ues_multiple = App\Models\TeachingUnit::where('status','multiple')->pluck('id')->toArray();

                $ecues_count = App\Models\ElementTeachingUnit::whereIn('teaching_unit_id', $ues_multiple)->count();

                $student_count = count(App\Models\Student::all());


            @endphp

            <div class="col-xl-4 cdx-xl-50">
              <div class="card welcome-card overflow-hidden">
                <div class="card-header"></div>
                <div class="card-body">
                  <div class="img-wrap"><img class="img-fluid" src="{{asset('directrice.png')}}" alt="image"></div>
                  <h3>Bienvenue cher Directrice</h3>
                  <p class="mb-6" style="text-align: justify;">De l'administration des étudiants à la gestion des professeurs, des cours à la gestion du personnel, gérer votre université depuis votre espace administrateur.</p>
                </div>
              </div>
            </div>
            <div class="col-xl-8 cdx-xl-100">
                <div class="row">
                  <div class="col-xxl-12">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="card project-status">
                          <div class="card-header">
                            <h4>Etudiants</h4>
                            <div class="setting-card action-menu"><a class="action-toggle" href="javascript:void(0)"><i class="codeCopy" data-feather="more-horizontal"></i></a>
                              <ul class="action-dropdown">
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-body progressCounter">
                            <div class="media">
                              <div>
                                <h2><span class="count">{{$student_count}}</span></h2>
                              </div>
                              <div class="media-body">                             <span class="badge badge-success">25.7%<i class="fa fa-angle-up"></i></span></div>
                            </div>
                            <div class="progress progress-primary">
                              <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">             </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card project-status">
                          <div class="card-header">
                            <h4>Filières</h4>
                            <div class="setting-card action-menu"><a class="action-toggle" href="javascript:void(0)"><i class="codeCopy" data-feather="more-horizontal"></i></a>
                              <ul class="action-dropdown">
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly                                          </a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-body progressCounter">
                            <div class="media">
                              <div>
                                <h2><span class="count">{{$ues_count + $ecues_count}}</span></h2>
                              </div>
                              <div class="media-body">                             <span class="badge badge-secondary">25.7%<i class="fa fa-angle-down"></i></span></div>
                            </div>
                            <div class="progress progress-secondary">
                              <div class="progress-bar" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">     </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6" style="opacity: 0.3;">
                        <div class="card project-status">
                          <div class="card-header">
                            <h4>Professeurs</h4>
                            <div class="setting-card action-menu"><a class="action-toggle" href="javascript:void(0)"><i class="codeCopy" data-feather="more-horizontal"></i></a>
                              <ul class="action-dropdown">
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-body progressCounter">
                            <div class="media">
                              <div>
                                <h2><span class="count">0</span></h2>
                              </div>
                              <div class="media-body"><span class="badge badge-danger">0.0%<i class="fa fa-angle-down"></i></span></div>
                            </div>
                            <div class="progress progress-info">
                              <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6" style="opacity: 0.3;">
                        <div class="card project-status">
                          <div class="card-header">
                            <h4>Personnel</h4>
                            <div class="setting-card action-menu"><a class="action-toggle" href="javascript:void(0)"><i class="codeCopy" data-feather="more-horizontal"></i></a>
                              <ul class="action-dropdown">
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                                <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="card-body progressCounter">
                            <div class="media">
                              <div>
                                <h2><span class="count">0</span></h2>
                              </div>
                              <div class="media-body"><span class="badge badge-success">0.0%<i class="fa fa-angle-up"></i></span></div>
                            </div>
                            <div class="progress progress-warning">
                              <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>



            {{-- <div class="col-xl-6 cdx-xl-50">
              <div class="card earning-chart">
                <div class="card-header">
                  <h4>Statistiques des visites</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="site-impres">
                    <h2><span class="counter">82545</span></h2>
                    <p class="text-light">5.5% change from yesterday</p>
                  </div>
                  <div id="earning-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 cdx-xl-50 cdxorder-xl-1">
              <div class="card countri-tbl">
                <div class="card-header">
                  <h4>Pays d'expédition</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table tblbody-p0">
                      <tbody>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-gbr"></i></div>
                              <div class="media-body">United Kingdom</div>
                            </div>
                          </td>
                          <td class="text-success">48.00%<i class="fa fa-angle-down ml-5"></i></td>
                          <td> Nove/22</td>
                          <td>
                            <h6>905k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-umi"></i></div>
                              <div class="media-body">United states</div>
                            </div>
                          </td>
                          <td class="text-success">30.7%<i class="fa fa-angle-up ml-5"></i></td>
                          <td> Sep/15</td>
                          <td>
                            <h6>750k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-egy"></i></div>
                              <div class="media-body">Egypt</div>
                            </div>
                          </td>
                          <td class="text-danger">25.7%<i class="fa fa-angle-down ml-5"></i></td>
                          <td>Jun/16</td>
                          <td>
                            <h6>598k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-ind"></i></div>
                              <div class="media-body">India</div>
                            </div>
                          </td>
                          <td class="text-success">35.00%<i class="fa fa-angle-up ml-5"></i></td>
                          <td>Sep/17</td>
                          <td>
                            <h6>320k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-mkd"></i></div>
                              <div class="media-body">Makedonia</div>
                            </div>
                          </td>
                          <td class="text-success">48.00%<i class="fa fa-angle-down ml-5"></i></td>
                          <td>Octo/20</td>
                          <td>
                            <h6>748k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-niu"></i></div>
                              <div class="media-body">Niue</div>
                            </div>
                          </td>
                          <td class="text-danger">28.07%<i class="fa fa-angle-down ml-5"></i></td>
                          <td>Sep/18</td>
                          <td>
                            <h6>580k</h6>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="flag-wrap"><i class="flag-icon flag-icon-dnk"></i></div>
                              <div class="media-body">Denmark</div>
                            </div>
                          </td>
                          <td class="text-danger">20.00%<i class="fa fa-angle-down ml-5"></i></td>
                          <td> Dece/16</td>
                          <td>
                            <h6>777k</h6>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 cdx-xl-50">
              <div class="card project-summarytbl">
                <div class="card-header">
                  <h4>Historiques</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Order</th>
                          <th>Project Name</th>
                          <th>Project Cost</th>
                          <th>Project Status</th>
                          <th>Payment</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Racing Game</td>
                          <td>$45,376</td>
                          <td>Completed</td>
                          <td><span class="badge badge-primary">Done</span></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Cytrust Dashboard</td>
                          <td>$40,258</td>
                          <td>In Progress</td>
                          <td><span class="badge badge-secondary">Pending</span></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Travel App</td>
                          <td>$32,256</td>
                          <td>Completed</td>
                          <td><span class="badge badge-primary">Done</span></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Reyalestet  App</td>
                          <td>$25,058</td>
                          <td>In Progress</td>
                          <td><span class="badge badge-secondary">Pending</span></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Agriculture Website</td>
                          <td>$36,585</td>
                          <td>In Progress</td>
                          <td> <span class="badge badge-secondary">Pending</span></td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>TRavel Website</td>
                          <td>$25,255</td>
                          <td>Completed</td>
                          <td> <span class="badge badge-primary">Done</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 cdx-xl-50">
              <div class="card recent-ordertbl">
                <div class="card-header">
                  <h4>Paiement des colis</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Customer</th>
                          <th>Product</th>
                          <th>Amount</th>
                          <th>Vendor</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/6.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">Mark Wangar</div>
                            </div>
                          </td>
                          <td><a class="text-light" href="product-detail.html"> Apple Airpod Pro</a></td>
                          <td>$847.39</td>
                          <td>Palestine</td>
                          <td> <span class="badge badge-primary">Paid</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">Thomos Vactom</div>
                            </div>
                          </td>
                          <td><a class="text-light" href="product-detail.html">Redmi Note 10s</a></td>
                          <td>$470.34</td>
                          <td>Serbia</td>
                          <td> <span class="badge badge-secondary">Unpaid</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/3.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">Johan Deo</div>
                            </div>
                          </td>
                          <td> <a class="text-light" href="product-detail.html">Razer kraken headset</a></td>
                          <td>$394.39</td>
                          <td>Republic</td>
                          <td> <span class="badge badge-primary">Paid</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/4.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">Leena Odem</div>
                            </div>
                          </td>
                          <td> <a class="text-light" href="product-detail.html">iphone 12 pro max</a></td>
                          <td>$249.29</td>
                          <td>Greece</td>
                          <td> <span class="badge badge-primary">Paid</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/5.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">Omini Rome</div>
                            </div>
                          </td>
                          <td> <a class="text-light" href="product-detail.html">DJL Mavic Pro 2</a></td>
                          <td>$147.70</td>
                          <td>Central</td>
                          <td> <span class="badge badge-secondary">Unpaid</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 cdx-xl-50 cdxorder-xl-1">
              <div class="card visitor-performance">
                <div class="card-header">
                  <h4>Performance des visites</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div id="visitor-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 cdx-xl-50">
              <div class="card visitor-ratetbl">
                <div class="card-header">
                  <h4>Statistiques des visiteurs</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div id="visitor-rank">              </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 cdx-xl-50">
              <div class="card support-inboxtbl">
                <div class="card-header">
                  <h4>Support Client</h4>
                  <div class="setting-card action-menu">
                    <div class="action-toggle"><i class="codeCopy" data-feather="more-horizontal"></i></div>
                    <ul class="action-dropdown">
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>weekly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar-check-o"></i>monthly</a></li>
                      <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>yearly</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/6.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Jordan Nt</h6>
                                <p class="text-light">My item doesn’t shio to correct address</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge badge-primary">10 hours ago</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Carolien Bloeme</h6>
                                <p class="text-light">You Shipped Color, i need it to be</p>
                              </div>
                            </div>
                          </td>
                          <td> <span class="badge badge-primary">8 hours ago</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/3.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Lisanne Viscaal</h6>
                                <p class="text-light">Can you please refund back my mony</p>
                              </div>
                            </div>
                          </td>
                          <td> <span class="badge badge-primary">6 hours ago</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/4.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Sun Jun</h6>
                                <p class="text-light">Thank you very much for quick support!</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge badge-primary">4 hours ago</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/5.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Tolos Joune</h6>
                                <p class="text-light">My item doesn’t shio to correct address</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge badge-primary">30 minute ago</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="media">
                              <div class="img-wrap"><img class="img-fluid" src="{{asset('assets/images/avtar/4.jpg')}}" alt="recent-product"></div>
                              <div class="media-body">
                                <h6>Sun Jun</h6>
                                <p class="text-light">Thank you very much for quick support!</p>
                              </div>
                            </div>
                          </td>
                          <td><span class="badge badge-primary">4 hours ago</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 cdx-xl-100 cdxorder-xl-1">
              <div class="card dash-chat">
                <div class="card-header">
                  <h4>Chat en ligne</h4>
                </div>
                <div class="card-body">
                  <div class="dash-chatbox">
                    <ul class="chating-list" data-simplebar>
                      <li>
                        <div class="user-msgbox">
                          <div class="media"><img class="img-fluid" src="{{asset('assets/images/avtar/1.jpg')}}" alt="image">
                            <div class="media-body">
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="admin-msgbox">
                          <div class="media">
                            <div class="media-body">
                              <p>Adipisicing elit, sed do eiusmod.</p>
                            </div><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="image">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="admin-msgbox">
                          <div class="media">
                            <div class="media-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="image">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="user-msgbox">
                          <div class="media"><img class="img-fluid" src="{{asset('assets/images/avtar/1.jpg')}}" alt="image">
                            <div class="media-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="admin-msgbox">
                          <div class="media">
                            <div class="media-body">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="image">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="user-msgbox">
                          <div class="media"><img class="img-fluid" src="{{asset('assets/images/avtar/1.jpg')}}" alt="image">
                            <div class="media-body">
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="admin-msgbox">
                          <div class="media">
                            <div class="media-body">
                              <p>Adipisicing elit, sed do eiusmod.</p>
                            </div><img class="img-fluid" src="{{asset('assets/images/avtar/2.jpg')}}" alt="image">
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="userchat-typebox d-flex"><a class="btn btn-primary mr-10"><i data-feather="smile"></i></a>
                      <input class="form-control" type="text" placeholder="Type a message" value="" autocomplete="off"><a class="btn btn-primary ml-10"> <i data-feather="send">              </i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
      </div>
      <!-- theme body end-->
    </div>
    @include("layouts.admin.footer")
  </body>
</html>
