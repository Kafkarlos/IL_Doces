<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.html">
            <div class="logo-img">
                <img src="<?php echo base_url('public/'); ?>src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">ThemeKit</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                <div class="nav-lavel">Cadastros</div>
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Categorias" href="<?php echo base_url('categorias') ?>"><i class="ik ik-grid"></i><span>Categorias</span></a>
                </div>
               
                <div class="nav-item">
                    <a data-toggle="tooltip" data-placement="right" title="Produtos" href="<?php echo base_url('produtos') ?>"><i class="ik ik-tv"></i><span>Produtos</span></a>
                </div>                
            </nav>
        </div>
    </div>
</div>