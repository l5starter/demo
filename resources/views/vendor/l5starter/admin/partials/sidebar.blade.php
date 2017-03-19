<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- Inner sidebar -->
    <section class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/adminLTE/img/default-avatar.png') }}" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <li class="{{ (Request::is('admin/dashboard*') ? 'active' : '') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('l5starter::general.dashboard') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/roles*') ? 'active' : '') }}">
                <a href="{{ route('admin.roles.index') }}">
                    <i class="fa fa-cog"></i> <span>{{ trans('l5starter::general.roles') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/permissions*') ? 'active' : '') }}">
                <a href="{{ route('admin.permissions.index') }}">
                    <i class="fa fa-cog"></i> <span>{{ trans('l5starter::general.permissions') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/users*') ? 'active' : '') }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-user"></i> <span>{{ trans('l5starter::general.users') }}</span>
                </a>
            </li>
            <li class="{{ (Request::is('admin/settings*') ? 'active' : '') }}">
                <a href="{{ route('admin.settings.index') }}">
                     <i class="fa fa-cog"></i> <span>{{ trans('l5starter::general.settings') }}</span>
                </a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside><!-- /.main-sidebar -->