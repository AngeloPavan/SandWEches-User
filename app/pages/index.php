<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__.'\components\head.php'); ?>

    <title>SandWEches | Login</title>
</head>

<body>
    <div class="container">
        <!-- form di login -->
        <div class="col-10 col-md-10 col-lg-4 mx-auto margin-top-form">
            <form action="" class="px-2 py-2 glass-container" id="glass">
                <!-- call to action -->
                <div class="mb-5 text-center">
                    <img src="..\assets\img\logo.png" alt="logoSandwech">
                </div>
                <div class="mb-5">
                    <h3 class="text-center fw-bold">Effettua l'accesso per continuare.</h3>
                </div>
                <!-- campo email -->
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Indirizzo Email</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="mario.rossi@gmail.com">
                    <div id="emailHelp" class="form-text">Tranquillo, non venderemo i tuoi dati a nessuno.</div>
                </div>
                <!-- campo password -->
                <div class="mb-5">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                    <div id="emailHelp" class="form-text">Non condividerla con nessuno.</div>
                    <div id="emailHelp" class="form-text text-end">
                        <a href="" class="">Password dimenticata?</a>
                    </div>
                </div>
                <!-- tasto per accedere -->
                <div class="text-center">
                    <button type="button" class="btn btn-warning px-5 fs-5 fw-bold">Accedi</button>
                    <!-- tasto password dimenticata -->
                    <div class="mt-3">
                        <a href="" class="">Crea un nuovo account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>