@inject('view', \App\Http\Classes\Helpers\Admin\ViewHelper)

{{-- Dashboard--}}
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard" aria-hidden="true"></i><span>{{ trans('structure.title.dashboard') }}</span></a></li>

<li class='header'>{{ trans('structure.title.advanced_permissions') }}</li>

{{-- Users --}}
<li><a href="{{ url($view->userRoute) }}"><i class="fa fa-user-o" aria-hidden="true"></i><span>{{ trans('entities.user.plural') }}</span></a></li>

{{-- Permissions --}}
<li class="treeview">
    <a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i><span>{{ trans('entities.permission.plural') }}</span><i class="fa fa-angle-left pull-right" aria-hidden="true"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url($view->roleRoute) }}"><i class="fa fa-group" aria-hidden="true"></i><span>{{ trans('entities.role.plural') }}</span></a></li>
        <li><a href="{{ url($view->permissionRoute) }}"><i class="fa fa-key" aria-hidden="true"></i><span>{{ trans('entities.permission.plural') }}</span></a></li>
    </ul>
</li>

<li class='header'>{{ trans('structure.title.development_zone') }}</li>

{{-- Logs --}}
<li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal" aria-hidden="true"></i><span>{{ trans('entities.log.plural') }}</span></a></li>