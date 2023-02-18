<?php
    $cliente = [
        "usuario" => "cliente",
        "contraseña" => "123"
    ];
    $admin = [
        "usuario" => "administrador",
        "contraseña" => "asd"
    ];

    if(empty($_POST["email"]) or empty($_POST["password"])){
        echo '<div class="alert alert-primary text-center mt-3">Los campos estan vacíos</div>';
    } else {
        $usuario = $_POST["email"];
        $contra = $_POST["password"];

        if($cliente["usuario"] == $usuario && $cliente["contraseña"] == $contra) {
            header("Location:cliente.php");
            session_start();
            $_SESSION["user"] = $cliente["contraseña"];
        }else if($admin["usuario"] == $usuario && $admin["contraseña"] == $contra){
            header("Location:administrador.php");
            session_start();
            $_SESSION["user"] = $admin["contraseña"];
        } else{
            echo '<div class="alert alert-primary text-center mt-3">Los datos son incorrectos</div>';
        }

    }
    

?>