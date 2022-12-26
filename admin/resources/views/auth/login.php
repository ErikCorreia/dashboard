<main style="position: fixed; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); width: 70%;" id="page">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto bg-white shadow p-4 rounded">
                <h1 class="text-center mb-4">Login</h1>
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
                    <div class="d-flex">
                        <button type="submit" class="mx-auto w-100 btn btn-primary text-uppercase px-4 py-2">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
