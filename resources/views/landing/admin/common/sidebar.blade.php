<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="header">
                <a href="{{ route('index') }}">
                    <i class="fa fa-circle-o"></i> {{ env('APP_NAME') }}
                </a>
            </li>
            <li class="active treeview">
                <li class=""><a href="{{ route('home.index') }}"><i class="fa fa-circle-o"></i> Home</a></li>
                <li class=""><a href="{{ route('about.index') }}"><i class="fa fa-circle-o"></i> About</a></li>
                <li class=""><a href="{{ route('service.index') }}"><i class="fa fa-circle-o"></i> Services</a></li>
                <li class=""><a href="{{ route('portfolio.index') }}"><i class="fa fa-circle-o"></i> Portfolios</a></li>
                <li class=""><a href="{{ route('team.index') }}"><i class="fa fa-circle-o"></i> Team</a></li>
                <li class=""><a href="{{ route('client.index') }}"><i class="fa fa-circle-o"></i> Clients</a></li>
                <li class=""><a href="{{ route('menu.index') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>