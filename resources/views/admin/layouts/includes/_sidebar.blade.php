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
            <li class="{{ request()->is('admins/dashboard') ? 'active treeview' : '' }}"><a href="/admins/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="{{ request()->is('admins/index') ? 'active treeview' : '' }}"><a href="/admins/index"><i class="fa fa-users"></i> <span>Volunteer Member</span></a></li>
            <li class="{{ request()->is('admins/diypost') ? 'active treeview' : '' }}"><a href="/admins/diypost"><i class="fa fa-tasks"></i> <span>Post DIY</span></a></li>
            <li class="{{ request()->is('admins/information') ? 'active treeview' : '' }}"><a href="/admins/information"><i class="fa fa-map-o"></i> <span>Information</span></a></li>
            <li class="{{ request()->is('admins/report') ? 'active treeview' : '' }}"><a href="/admins/report"><i class="fa fa-exclamation-triangle"></i> <span>Report</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>