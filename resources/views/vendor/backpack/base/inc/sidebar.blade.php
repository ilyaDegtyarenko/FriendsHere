@if (backpack_auth()->check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
            {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
            <!-- ================================================ -->
                <!-- ==== Recommended place for admin menu items ==== -->
                <!-- ================================================ -->
                <li class="header">
                    <hr style='margin: 0; padding: 0;'>
                </li>
                @include('backpack::inc.sidebar_content')
                <li class="header">
                    <hr style='margin: 0; padding: 0;'>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endif
