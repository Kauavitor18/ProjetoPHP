
<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $dbname="faleconosco";

    $sucesso=mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$sucesso){
        die("Houve um erro: ".mysqli_connect_error());
    }
?>
