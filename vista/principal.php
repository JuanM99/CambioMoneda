<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de moneda</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="text-center">
        <main class="form-signin">
            <form id="form" name="form">
                <input type="hidden" name="op" id="op">
                <h1 class="h4 mb-3 fw-normal text-primary">Cambio entre PEN y USD</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="user" id="txtCant" name="txtCant" onkeypress="solonumeros(event);">
                    <label for="floatingInput">Cantidad de dinero</label>
                    <hr>
                    <button class="w-100 btn btn-lg btn-outline-info" name="btnPen" id="btnPen">
                        Cambiar a PEN
                    </button>
                    <hr>
                    <button class="w-100 btn btn-lg btn-outline-dark" name="btnUsd" id="btnUsd">
                        Cambiar a USD
                    </button>
                    <hr>
                    <input type="text" class="form-control text-center fs-3 fw-bolder" id="Result" name="Result" 
                        value="<?php 
                            if(!isset($_SESSION['Convertidor'])){
                                echo "";
                            }
                            else{
                                echo $_SESSION['Convertidor'];
                            }
                            ?>" disabled>
                    <div class="form-floating alert alert-warning" role="alert" id="advDatos" name="advDatos">
                        ¡Indique la cantidad de dinero a convertir!
                    </div>
                </div>
            </form>
        </main>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/prefixfree.min.js"></script>
</body>
</html>