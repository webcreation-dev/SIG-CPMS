<!-- sidebar start-->
<aside class="codex-sidebar">

    <div class="logo-gridwrap">
        <a class="codexbrand-logo" href="index.html"><img class="img-fluid" src="{{asset('logo_cpms.png')}}" alt="theeme-logo"></a>
      <div class="sidebar-action"><i data-feather="menu"></i></div>
    </div>


    <div class="icon-logo"><a href="index.html"><img class="img-fluid" src="{{asset('favicon.png')}}" alt="theeme-logo"></a></div>
    <div class="codex-menuwrapper">

        <ul class="codex-menu custom-scroll" data-simplebar>

            <li class="cdxmenu-title">
            <a style="padding: 0px 0px 0px 0px !important;" href="{{route('dashboard')}}"><h5><i class="fa fa-area-chart"></i> TABLEAU DE BORD</h5></a>
            </li>

            <li class="menu-item {{ Route::is('users.index') ? 'active' : '' }}">
                <a href="{{route('users.index')}}">
                    <div class="icon-item">
                        <i class="ti-panel"></i>
                    </div>
                    <span>Utilisateurs</span>
                </a>
            </li>

            <li class="cdxmenu-title">
                <a style="padding: 0px 0px 0px 0px !important;" href="{{route('dashboard')}}"><h5> <i class="fa fa-mortar-board"></i> GESTION ETUDIANTS</h5></a>
            </li>

            <li class="menu-item {{ Route::is('classrooms.index') ? 'active' : '' }}">
                <a href="{{route('classrooms.index')}}">
                    <div class="icon-item">
                        <i class="ti-bookmark-alt"></i>
                    </div>
                    <span>Classes</span>
                </a>
            </li>
            <li class="menu-item {{ Route::is('students.index') ? 'active' : '' }}">
                <a href="{{route('students.index')}}">
                    <div class="icon-item">
                        <i class="ti-user"></i>
                    </div>
                    <span>Etudiants</span>
                </a>
            </li>
            <li class="menu-item {{ Route::is('teaching_units.index') ? 'active' : '' }}">
                <a href="{{route('teaching_units.index')}}">
                    <div class="icon-item">
                        <i class="ti-layers"></i>
                    </div>
                    <span>UE</span>
                </a>
            </li>
            <li class="menu-item {{ Route::is('element_teaching_units.index') ? 'active' : '' }}">
                <a href="{{route('element_teaching_units.index')}}">
                    <div class="icon-item">
                        <i class="ti-layers-alt"></i>
                    </div>
                    <span>ECUE</span>
                </a>
            </li>

            {{-- <li class="menu-item active"><a href="javascript:void(0);">
                <div class="icon-item"><i class="fa fa-mortar-board"></i></div>
                <span>email</span><i class="fa fa-angle-down"></i></a>
              <ul class="submenu-list" style="display: block !important;">
                <li class="active"><a href="email-inbox.html" class="active">email inbox</a></li>
                <li><a href="email-read.html">email read</a></li>
              </ul>
            </li> --}}


        </ul>
    </div>
  </aside>
  <!-- sidebar end-->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Sélectionnez le sous-menu et ajoutez la classe "show" pour l'ouvrir automatiquement
        var submenu = document.querySelector('.menu-item.active .submenu-list');
        if (submenu) {
            submenu.classList.add('show');
        }
    });
</script>

