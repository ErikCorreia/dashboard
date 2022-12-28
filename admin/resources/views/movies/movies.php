<main id="page">
    <div class="container">
        <div class="page-title bg-light rounded shadow-sm px-4 py-2">
            <h1 class="m-0"><?= $title ?></h1>
        </div>

        <table class="table table-striped table-hover bg-white shadow mt-5 rounded">
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
                    <tr>
                        <td><?= $user->getUsername()?></td>
                        <td><?= $user->getEmail()?></td>
                        <td><?= $user->getRole()?></td>
                        <td>
                            <?php foreach($user->getModules() as $um) { ?>
                                <span class="badge badge-success bg-primary"><?= $um->getName()?></span>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>
