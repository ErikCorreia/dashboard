<main id="page">
    <div class="container">
        <div class="page-title bg-white rounded shadow-sm px-4 py-2">
            <h1 class="m-0"><?= $title ?></h1>
        </div>

        <div class="mt-5 bg-white shadow rounded">
            <div class="section-title p-3 border-bottom">
                <h4 class="mb-0">Seus modulos</h4>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="8%">Status</th>
                        <th>Module name</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($modules as $module) { ?>
                        <tr>
                            <td>
                                <input class="ms-3" type="checkbox" name="module" data-user-id="<?= $currentUser->getId() ?>" data-name="<?= $module['name'] ?>" value="<?= $module['slug'] ?>" id="module-<?= $module['slug'] ?>" 
                                    <?php foreach($currentUser->getModules() as $um) { ?>
                                        <?= $module['slug'] == $um->getSlug() ? 'checked' : ''?>
                                    <?php }?>
                                >
                            </td>
                            <td><?= $module['name']?></td>
                            <td><?= $module['description'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <hr class="my-5 border border-2 border-primary">

        <div class="bg-white shadow rounded">
            <div class="section-title p-3 border-bottom">
                <h4 class="mb-0">Modulos por usuários</h4>
            </div>

            <table class="table table-striped table-hover bg-white shadow mt-5 rounded" >
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>Role</th>
                        <th>Modules</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr class="user-table-row" table-modules="table-modules-<?= $user->getId() ?>">
                            <td class="<?= $user->getId() == $currentUser->getId() ? 'text-success' : null?>"><?= $user->getUsername()?></td>
                            <td><?= $user->getEmail()?></td>
                            <td><?= $user->getRole()?></td>
                            <td>
                                <?php foreach($user->getModules() as $um) { ?>
                                    <span class="badge badge-success bg-primary"><?= $um->getName()?></span>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr class="d-none" id="table-modules-<?= $user->getId() ?>">
                            <td>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="8%">Status</th>
                                            <th>Module name</th>
                                            <th>Descrição</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach ($modules as $module) { ?>
                                            <tr>
                                                <td>
                                                    <input class="ms-3" type="checkbox" name="module" data-user-id="<?= $user->getId() ?>" data-name="<?= $module['name'] ?>" value="<?= $module['slug'] ?>" id="module-<?= $module['slug'] ?>" 
                                                        <?php foreach($user->getModules() as $um) { ?>
                                                            <?= $module['slug'] == $um->getSlug() ? 'checked' : ''?>
                                                        <?php }?>
                                                    >
                                                </td>
                                                <td><?= $module['name']?></td>
                                                <td><?= $module['description'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
    <!-- <div class="toast text-white" style="position: fixed; bottom: 20px; right: 30px;">
        <div class="toast-body text-center">
            <small id="toast-message"></small>
        </div>
    </div> -->
</main>

