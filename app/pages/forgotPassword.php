<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once(__DIR__.'\components\head.php'); ?>

    <title>SandWEches | Password Dimenticata</title>
</head>

<body>
    <div class="container">
        <!-- form di login -->
        <div class="col-12 col-md-10 col-lg-4 mx-auto margin-top-form">
            <form action="" class="px-2 py-2 form-container" id="glass">
                <!-- call to action -->
                <div class="mb-5 text-center">
                    <img src="..\assets\img\logo.png" alt="logoSandwech">
                </div>
                <div class="mb-5">
                    <h3 class="text-center fw-bold">Password dimenticata?</h3>
                    <h6 class="text-center">Se la tua email corrisponde ad un account esistente allora riceverai un messaggio di conferma da parte del nostro staff.</h6>
                </div>
                <!-- campo email -->
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Indirizzo Email</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="mario.rossi@gmail.com">
                    <!-- <div id="emailHelp" class="form-text">Tranquillo, non venderemo i tuoi dati a nessuno.</div> -->
                </div>
                <!-- tasto per accedere -->
                <div class="text-center">
                    <button type="button" class="btn btn-warning px-5 fs-5 fw-bold">Invia</button>
                    <!-- tasto password dimenticata -->
                    <div class="mt-3">
                        <a href="index.php">Accedi</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php require_once(__DIR__.'\components\script.php'); ?>
</body>

</html>