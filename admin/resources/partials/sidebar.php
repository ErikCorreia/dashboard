<div class="sidebar">
    <div class="sidebar-header my-4 px-2">
        <div class="user-card">
            <div class="row g-0">
                <!-- <div class="col-3 g-0">
                    <img class="border" src="/admin/resources/assets/img/logo.svg" alt="user-image" width="100%" style="border-radius: 50%;">
                </div> -->
                <div class="col my-auto ps-3">
                    <!-- <div><?php // echo $current_user->getUsername() ?></div> -->
                    <a class="nav-link" href="/"><h3>Dashboard</h3></a>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-body">
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
        <div class="d-none d-md-block">
            <hr>
            <div class="px-3 pt-3">
                <h4>Seus modulos</h4>
            </div>
            <nav class="navbar">
                <ul class="navbar-nav">
                    <?php foreach($user_modules as $user_module) { ?>
                        <li class="nav-item w-100 text-center text-md-start">
                            <a class="nav-link p-3 <?php if(Core\Helper::getRequestUri() == '/admin'.$user_module->getUrl()){ echo 'active';}?>" href="/admin<?php echo $user_module->getUrl() ?>">
                                <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/'.$user_module->getSlug().'-icon.svg') ?>
                                <span class="ms-2"><?php echo $user_module->getName() ?></span>
                            </a>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
    <div class="sidebar-footer"></div>
</div>
