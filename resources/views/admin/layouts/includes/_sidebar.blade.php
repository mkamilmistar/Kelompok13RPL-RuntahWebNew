<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/assets/img/default.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->username}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li @yield('dashboard')><a href="/admins/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li @yield('index')><a href="/admins/index"><i class="fa fa-users"></i> <span>Volunteer Member</span></a></li>
            <li @yield('diy')><a href="/admins/diypost"><i class="fa fa-tasks"></i> <span>Post DIY</span></a></li>
            <li @yield('info')><a href="/admins/information"><i class="fa fa-map-o"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>