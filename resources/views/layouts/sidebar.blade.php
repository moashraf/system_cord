<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img
                    src="https://us.123rf.com/450wm/kraft2727/kraft27271412/kraft2727141200018/34583214-logo-admin-icon-administrator-illustration-of-a-man-in-a-jacket-and-shirt-ties-jacket-and-shirt-.jpg?ver=6"
                    class="img-circle"
                    alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>admin</p>
                @else
                <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    Online</a>
            </div>
        </div>

        <br>
            <br>
                <!-- Sidebar Menu -->

                <ul class="sidebar-menu">
                    @include('layouts.menu')
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
     