<div class="sidebar">
    <div class="sidebar-header my-4 px-2">
        <div class="user-card">
            <div class="row g-0">
                <div class="col-3 g-0">
                    <img class="border" src="/admin/resources/assets/img/logo.svg" alt="user-image" width="100%" style="border-radius: 50%;">
                </div>
                <div class="col my-auto ps-3">
                    <div><?= $current_user->getUsername() ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-body border-top border-2">
        <nav class="navbar py-0">
            <ul class="navbar-nav">
                <li class="nav-item w-100 text-center text-md-start">
                    <a class="nav-link p-3 <?php if(Core\Helper::getRequestUri() == '/admin/'){ echo 'active';} ?>" href="/admin">
                        <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/home-4-svgrepo-com.svg') ?>
                        <span class="ms-2">Home</span>
                    </a>
                </li>

                <li class="nav-item w-100 text-center text-md-start">
                    <a class="nav-link p-3 <?php if(Core\Helper::getRequestUri() == '/admin/users'){ echo 'active';} ?>" href="/admin/users">
                        <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/users-icon.svg') ?>
                        <span class="ms-2">Usuários</span>
                    </a>
                </li>

                <li class="nav-item w-100 text-center text-md-start">
                    <a class="nav-link p-3 <?php if(Core\Helper::getRequestUri() == '/admin/modules-manager'){ echo 'active';} ?>" href="/admin/modules-manager">
                    <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/webpack-svgrepo-com.svg') ?>
                        <span class="ms-2">Modules</span>
                    </a>
                </li>

                <li class="nav-item d-block d-md-none w-100 text-center text-md-start" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <a class="nav-link p-3" href="#">
                    <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/bars-right.svg') ?>
                        <span class="ms-2">Modules</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="sidebar-footer"></div>
</div>
