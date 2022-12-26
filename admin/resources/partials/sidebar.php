<div class="sidebar">
    <div class="sidebar-header bold h4 p-4 m-0 d-flex">
        <a class="mx-auto d-block" href="/admin">
            <img src="/admin/resources/assets/img/logo.svg" alt="">
        </a>
    </div>
    <div class="sidebar-body border-top border-2">
        <nav class="navbar py-0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if(Core\Helper::getRequestUri() == '/admin/'){ echo 'active';} ?>" href="/admin">Home</a>
                </li>
                <?php foreach($modules as $module) { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if(Core\Helper::getRequestUri() == '/admin'.$module['url']){ echo 'active';} ?>" href="/admin<?= $module['url'];?>">
                            <?php echo $module['name'];?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="sidebar-footer"></div>
</div>
