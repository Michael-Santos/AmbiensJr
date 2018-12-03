<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
    <!-- Bootstrap List Group -->
    <ul class="list-group">
        <!-- Foto de perfil -->
        <div class="d-flex w-100 justify-content-start align-items-center text-white block-img-perfil">
            <img src="{{ asset('img/equipe/rodrigo.jpg') }}" alt="Rodrigo" class="img-perfil rounded-circle">
            <span>Rodrigo<br>Admin</span>
        </div>

        <!-- Separator with title -->
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            <small>MENU PRINCIPAL</small>
        </li>
        <!-- /END Separator -->
        <!-- Menu with submenu -->
        <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-home fa-fw mr-3"></span> 
                <span class="menu-collapsed">Home</span>
            </div>
        </a>
        
        <a href="#" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-user fa-fw mr-3"></span>
                <span class="menu-collapsed">Perfil</span>
            </div>
        </a>

        <!-- Separator with title -->
        <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            <small>ADMINISTRAÇÂO</small>
        </li>
        <!-- /END Separator -->

        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-user fa-fw mr-3"></span>
                <span class="menu-collapsed">Equipe</span>
                <span class="submenu-icon ml-auto"></span>
            </div>
        </a>
        <!-- Submenu content -->
        <div id='submenu2' class="collapse sidebar-submenu">
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Setores</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                <span class="menu-collapsed">Membros</span>
            </a>
        </div>   

        <a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-handshake-o fa-fw mr-3"></span>
                <span class="menu-collapsed">Projetos</span>
            </div>
        </a>

        <a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-calendar fa-fw mr-3"></span>
                <span class="menu-collapsed">Cursos</span>
            </div>
        </a>
        
        <a href="#" class="bg-dark list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-image fa-fw mr-3"></span>
                <span class="menu-collapsed">Galeria</span>
            </div>
        </a>

        <a href="#" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-file fa-fw mr-3"></span>
                <span id="collapse-text" class="menu-collapsed">Processo Seletivo</span>
            </div>
        </a>
    </ul><!-- List Group END-->
</div><!-- sidebar-container END -->

<main>
    @yield('content')
<main>