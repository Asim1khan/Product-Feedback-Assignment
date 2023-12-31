@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{ route('admin.dashboard') }}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
                        <h3><b>Easy</b> Shop</h3>
                    </div>
                </a>
            </div>
        </div>
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class=" {{ $route == 'dashboard' ? 'active' : '' }}  ">
                <a href="{{ url('admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="{{ route('user') }}"><i class="ti-more"></i>Manage User</a>
                    </li>


                </ul>
            </li>
            <li class="treeview  ">
                <a href="#">
                    <i data-feather="mail"></i> <span>FeedBack Item</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu  ">
                    <li class="">
                        <a href="{{ route('manage.feedback.item') }}"><i class="ti-more"></i>
                           Manage Feedback Item
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview  ">
                <a href="#">
                    <i data-feather="mail"></i> <span>Comments</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu  ">
                    <li class="">
                        <a href="{{ route('manage.comments') }}"><i class="ti-more"></i>
                           Manage Comments
                        </a>
                    </li>



                </ul>
            </li>


        </ul>



    </section>
    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title=""
            data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
