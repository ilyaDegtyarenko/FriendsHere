{{-- Dashboard--}}
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i><span>{{ trans('structure.title.dashboard') }}</span></a></li>

<li class='header'>{{ trans('structure.title.advanced_permissions') }}</li>

{{-- Users --}}
<li><a href="{{ url(\App\Http\Traits\Helpers\Admin\UserHelper::route(false)) }}"><i class="fa fa-user-o" aria-hidden="true"></i><span>{{ trans('entities.user.plural') }}</span></a></li>

{{-- Permissions --}}
<li class="treeview">
    <a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i><span>{{ trans('entities.permission.plural') }}</span><i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url(\App\Http\Traits\Helpers\Admin\PermissionHelper::route('role', false)) }}"><i class="fa fa-group"></i><span>{{ trans('entities.role.plural') }}</span></a></li>
        <li><a href="{{ url(\App\Http\Traits\Helpers\Admin\PermissionHelper::route('permission', false)) }}"><i class="fa fa-key"></i><span>{{ trans('entities.permission.plural') }}</span></a></li>
    </ul>
</li>

<li class='header'>{{ trans('structure.title.development_zone') }}</li>

{{-- Logs --}}
<li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i><span>Logs</span></a></li>