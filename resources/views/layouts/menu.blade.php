<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('docTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('docTypes.index') }}"><i class="fas fa-building"></i><span>Tipo Documentación</span></a>
</li>

<li class="side-menus {{ Request::is('documentations*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('documentations.index') }}"><i class="fas fa-building"></i><span>Documentación</span></a>
</li>

<li class="side-menus {{ Request::is('contentDocs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contentDocs.index') }}"><i class="fas fa-building"></i><span>Content Docs</span></a>
</li>

