<main id="page">
    <div class="container">
        <div class="page-title bg-light rounded shadow-sm px-4 py-2">
            <h1 class="m-0"><?= $title ?></h1>
        </div>
        <div class="row mt-4">
            <div class="col-6 mx-auto">
                <form action="" method="POST" class="form-login">
                    <div class="form-group mb-4">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                    <?php if ($status){ ?>
                        <p style="color: red"><?= $status ?></p>
                    <?php } ?>
                    <button type="submit" class="btn btn-success text-uppercase px-4 py-2">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</main>
