<header class="header-top" header-theme="dark">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <!-- <div class="header-search">
                    <div class="input-group">
                        <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                    </div>
                </div>
                <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button> -->
            </div>
            <div class="top-menu d-flex align-items-center">
                
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-user ik-2x text-white"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        
                        <a data-toggle="tooltip" data-placement="left" title="Sair do sistema" class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>"><i class="ik ik-power dropdown-icon text-danger"></i> Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>