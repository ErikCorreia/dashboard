<main id="page">
    <div class="container">
        <div class="page-title bg-light rounded shadow-sm px-4 py-2">
            <h1 class="m-0"><?= $title ?></h1>
        </div>
        <div class="row mt-4">
            <?php foreach($users as $user) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card px-3 py-4 text-center">
                        <a href=""><?php echo $user->getUsername() ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
