<?php
    $mysqliConect=new mysqli('localhost','root','','securityperu');
    if(!$mysqliConect){
        echo "Error al conectar base de datos";
    }

    $n+=1;
    $iduser=10000000+$n;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $department=$_POST['department'];
    $district=$_POST['district'];
    $direction=$_POST['direction'];

    $insertar = "insert into cuenta(idCuenta, usuario, contrasena) VALUES ('','$username','$password')";
    if(mysqli_query($mysqliConect, $insertar)) {
        echo "";
    }else{
        echo "Error al guardar datos";
    }
?>
