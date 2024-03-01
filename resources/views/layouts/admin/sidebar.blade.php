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
        <li class="menu-item"><a href="{{route('notes.index')}}">
            <div class="icon-item"><i data-feather="shopping-bag"></i></div><span>Gestion des notes</span></a>
        </li>

        <li class="menu-item"><a href="javascript:void(0);">
            <div class="icon-item"><i class="fa fa-mortar-board"></i></div><span>Configurations</span><i class="fa fa-angle-down"></i></a>
          <ul class="submenu-list">
            <li><a href="{{route('classrooms.index')}}">Classes</a></li>
            <li><a href="{{route('students.index')}}">Etudiants</a></li>
            <li><a href="{{route('teaching_units.index')}}">UE</a></li>
            <li><a href="{{route('element_teaching_units.index')}}">ECUE</a></li>
          </ul>
        </li>

        </ul>
    </div>
  </aside>
  <!-- sidebar end-->
