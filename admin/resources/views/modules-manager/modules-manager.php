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
    <div class="toast text-white" style="position: fixed; bottom: 20px; right: 30px;">
        <div class="toast-body text-center">
            <small id="toast-message"></small>
        </div>
    </div>
</main>


<script>
    const checkbox = document.querySelectorAll('[type=checkbox]');
    const host = window.location.host;

    const toast = (message, status) => {
        const toastBox = document.querySelector('.toast');
        const toastMessage = document.getElementById('toast-message');
        
        toastBox.classList.add('show')
        toastBox.classList.add(status);

        toastMessage.innerHTML = message;

        if(ststus == 'success'){
            setTimeout(() => {
                toastBox.classList.remove('show');
            }, 5000);
        }
    }
    
    const setUserModule = async (module) => {
        await fetch(`/admin/modules-manager`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                module: module
            })
        }).then(res => res.json())
        .then(res => {
            console.log(res);
            if (res.status ==='success') {
                toast(res.message, 'success');
            } else {
                toast(res.message, 'error');
            }
        });
    }

    checkbox.forEach(el => {
        el.addEventListener('change', e => {
            let module = {
                user_id: e.target.getAttribute('data-user-id'),
                name: e.target.getAttribute('data-name'),
                slug: e.target.value,
                isActive: e.target.checked
            }
            console.log(module);
            setUserModule(module);
        });
    })

    const tableRow = document.querySelectorAll('.user-table-row');

    tableRow.forEach(el => {
        el.addEventListener('click', e => {
            let table_ref = el.getAttribute('table-modules');
            let module_table = document.getElementById(table_ref);
            module_table.classList.toggle('d-none');
        })
    });
    
</script>
