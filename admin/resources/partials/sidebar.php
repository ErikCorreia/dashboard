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
                <li class="nav-item">
                    <a class="nav-link <?php if(Core\Helper::getRequestUri() == '/admin/'){ echo 'active';} ?>" href="/admin">
                        <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/home-4-svgrepo-com.svg') ?>
                        <span class="ms-2">Home</span>
                    </a>
                </li>
            
                <li class="accordion accordion-flush" id="accordionFlushExample" style="--bs-accordion-bg: #fff !important;">
                    <div class="accordion-item">
                        <a class="nav-link d-flex align-items-center" href="#" id="flush-headingOne" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/webpack-svgrepo-com.svg') ?>
                            <span class="ms-2">Modulos</span>
                        </a>
                        <ul class="navbar-nav accordion-collapse collapse" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <?php foreach($user_modules as $module) { ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if(Core\Helper::getRequestUri() == '/admin'.$module->getUrl()){ echo 'active';} ?>" href="/admin<?= $module->getUrl()?>">
                                        <?php echo file_get_contents(__DIR__.'/../assets/svg/icons/'.$module->getSlug().'-icon.svg') ?>
                                        <span class="ms-2"><?php echo $module->getName();?></span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
    </div>
    <div class="sidebar-footer"></div>
</div>
