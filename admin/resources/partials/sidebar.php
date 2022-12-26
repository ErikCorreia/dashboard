<div class="sidebar">
    <div class="sidebar-header bold h4 py-3">Dashboard</div>
    <div class="sidebar-body border-top border-2">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin">Home</a>
                </li>
                <?php foreach($modules as $module) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin<?= $module['url'];?>">
                            <?php echo $module['name'];?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>
    <div class="sidebar-footer"></div>
</div>
