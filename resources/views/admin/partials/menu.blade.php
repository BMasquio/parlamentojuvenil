<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> Hotsite</a>
            </li>

            <li class="nav-item" active="{{ request()->is('admin/subscriptions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.home') }}"><i class="fa fa-list fa-fw"></i> Inscrições</a>
            </li>

            <li class="nav-item" active="{{ request()->is('2016') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.schools') }}"><i class="fa fa-graduation-cap fa-fw"></i> Escolas</a>
            </li>

            <li class="nav-item" active="{{ request()->is('admin/elected') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.elected') }}"><i class="fa fa-users fa-fw"></i> Eleitos</a>
            </li>

            <li class="nav-item" active="{{ request()->is('admin/seeduc') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.seeduc') }}"><i class="fa fa-search fa-fw"></i> Seeduc</a>
            </li>

            <li class="nav-item" active="{{ request()->is('admin/users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-user fa-fw"></i> Usuários</a>
            </li>
        </ul>
    </div>
</nav>
