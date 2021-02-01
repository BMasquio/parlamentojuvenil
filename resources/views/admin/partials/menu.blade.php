<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Parlamento Juvenil - Admin</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li>
            <a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i></a>
        </li>

        {{--<li class="dropdown">--}}
            {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                {{--<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>--}}
            {{--</a>--}}
            {{--<ul class="dropdown-menu dropdown-user">--}}
                {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                {{--</li>--}}
                {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                {{--</li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
            {{--<!-- /.dropdown-user -->--}}
        {{--</li>--}}
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                {{--<li class="sidebar-search">--}}
                    {{--<div class="input-group custom-search-form">--}}
                        {{--<input type="text" class="form-control" placeholder="{{'captions.search'}}...">--}}
                                {{--<span class="input-group-btn">--}}
                                {{--<button class="btn btn-default" type="button">--}}
                                    {{--<i class="fa fa-search"></i>--}}
                                {{--</button>--}}
                            {{--</span>--}}
                    {{--</div>--}}
                    {{--<!-- /input-group -->--}}
                {{--</li>--}}

                <li>
                    <a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> Hotsite</a>
                </li>

                <li active="{{ request()->is('admin/subscriptions') ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}"><i class="fa fa-list fa-fw"></i> Inscrições</a>
                </li>

                <li active="{{ request()->is('2016') ? 'active' : '' }}">
                    <a href="{{ route('admin.schools') }}"><i class="fa fa-graduation-cap fa-fw"></i> Escolas</a>
                </li>

                <li active="{{ request()->is('admin/elected') ? 'active' : '' }}">
                    <a href="{{ route('admin.elected') }}"><i class="fa fa-users fa-fw"></i> Eleitos</a>
                </li>

                <li active="{{ request()->is('admin/seeduc') ? 'active' : '' }}">
                    <a href="{{ route('admin.seeduc') }}"><i class="fa fa-search fa-fw"></i> Seeduc</a>
                </li>

                <li active="{{ request()->is('admin/users') ? 'active' : '' }}">
                    <a href="{{ route('admin.users') }}"><i class="fa fa-user fa-fw"></i> Usuários</a>
                </li>
{{--                --}}
{{--                <li active="{{ request()->is('admin/contest') ? 'active' : '' }}">--}}
{{--                    <a href="{{ route('admin.contest') }}"><i class="fa fa-user fa-fw"></i> Concurso (inscritos)</a>--}}
{{--                </li>--}}

{{--                <li active="{{ request()->is('admin/contest/votes') ? 'active' : '' }}">--}}
{{--                    <a href="{{ route('admin.contest-votes') }}"><i class="fa fa-user fa-fw"></i> Concurso (votação)</a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
