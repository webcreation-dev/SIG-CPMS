<!-- sidebar start-->
<aside class="codex-sidebar">
    <div class="logo-gridwrap"><a class="codexbrand-logo" href="index.html"><img class="img-fluid" src="{{asset('shipito/fr/imgs/logo.png')}}" alt="theeme-logo"></a>
      <div class="sidebar-action"><i data-feather="menu"></i></div>
    </div>
    <div class="icon-logo"><a href="index.html"><img class="img-fluid" src="{{asset('files/logo-mobile.png')}}" alt="theeme-logo"></a></div>
    <div class="codex-menuwrapper">
      <ul class="codex-menu custom-scroll" data-simplebar>

        <li class="cdxmenu-title">
           <a style="padding: 0px 0px 0px 0px !important;" href="{{route('dashboard')}}"><h5>TABLEAU DE BORD</h5></a>
        </li>

        <li class="menu-item">
            <a href="{{route('users.index')}}">
                <div class="icon-item">
                    <i data-feather="user"></i>
                </div>
                <span>Utilisateurs</span>
            </a>
        </li>
        <li class="menu-item"><a href="{{route('package.index')}}">
            <div class="icon-item"><i data-feather="shopping-bag"></i></div><span>Gestion Colis</span></a>
        </li>

        </ul>
    </div>
  </aside>
  <!-- sidebar end-->
