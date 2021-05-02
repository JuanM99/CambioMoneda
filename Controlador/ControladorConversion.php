<?php
    session_start();

    $op=$_POST['op'];
    $pag="";
    //Usando el API
    //Usando el URL
    $url='https://dni.optimizeperu.com/api/tipo-cambio';
    //Obtenemos el contenido del json
    $json=file_get_contents($url);
    $info=json_decode($json,true);
    //Obtenemos los datos de compra y venta
    $compra=$info["cambio_actual"]["compra"];
    $venta=$info["cambio_actual"]["venta"];

    switch($op){
        case 1:{
            unset($_SESSION['Convertidor']);
            $din=$_POST['txtCant'];
            $conv=round($din*$compra,2);
            $_SESSION['Convertidor']=$conv;
            $pag="../vista/principal.php";
            break;
        }
        case 2:{
            unset($_SESSION['Convertidor']);
            $din=$_POST['txtCant'];
            $conv=round($din/$venta,2);
            $_SESSION['Convertidor']=$conv;
            $pag="../vista/principal.php";
            break;
        }
        break;
    }
    header('Location:'.$pag);
?>