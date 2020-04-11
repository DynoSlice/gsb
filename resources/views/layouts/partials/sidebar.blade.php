<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
          {{-- <img src="adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
      <img src="/uploads/avatars/{{ Auth::user()->avatar}} " class="img-circle" alt="User Image">
          </div>
          
      <div class="pull-left info">
        <p>{{ Auth::user()->name }} {{ Auth::user()->prenom }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGATION PRINCIPALE</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{url('home')}}"><i class="fa fa-dashboard"></i></i> <span>Dashboard</span></a></li>
      <li><a href="{{url('calendar')}}"><i class="fa fa-calendar"></i> <span>Calendrier</span></a></li>
      @vm
      <li class="treeview">
        <a href="#"><i class="fa fa-sticky-note"></i> <span>Note de Frais</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('hebergement')}}">Ajouter Hotel</a></li>
          <li><a href="{{url('listhebergement')}}">Mes Hotels</a></li>
          <li><a href="{{url('pressing')}}">Ajouter Pressing</a></li>
          <li><a href="{{url('listpressing')}}">Mes Pressings</a></li>
          <li><a href="{{url('create')}}">Nouvelle Note de Frais</a></li>
          <li><a href="{{url('listmission')}}">Mes Notes de Frais</a></li>
        </ul>
      </li>
      @endvm
      @gestion
      <li class="treeview">
        <a href="#"><i class="fa fa-sticky-note"></i> <span>Salariés</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        
        <ul class="treeview-menu">
          <li><a href="{{url('register')}}">Ajouter Salariés</a></li>
          <li><a href="{{url('listsalarie')}}">Liste Salariés</a></li>
        </ul>
      </li>
      @endgestion
      @gestion
      <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-folder-open-o"></i> <span>Gestion des dossiers</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        
        <ul class="treeview-menu">
          <li><a href="{{url('gestion')}}">Note de Frais</a></li>
        </ul>
      </li>
      @endgestion
      @gestion<li><a href="{{url('article')}}"><i class="fa fa-fw fa-envelope-o"></i> <span>Message d'information</span></a></li>@endgestion
      <li class="treeview">
        <a href="#"><i class="fa fa-fw fa-folder-open-o"></i> <span>Webservice</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        
        <ul class="treeview-menu">
          <li><a href="{{url('web')}}">Mon Webservices</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>

