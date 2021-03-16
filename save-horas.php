<?php
    $fecha = $_REQUEST["fecha"];
    $horas = $_REQUEST["horas"];
    $fecha = $_REQUEST["fecha"];
   
    //1. Connecta to db

    $host = "localhost"; //direccion del servidor, en este caso mi computador, sino seria una IP 
    $dbname = "hora_d_or"; // nombre de la base de datos 
    $username = "root";// la base de datos necesita un nombre de usuario y una contraseña por seguridad. root es el usuario por defecto de xampp
    $password = ""; // contraseñapor defecto de xampp

    $cnx = new PDO("mysql:host=$host; dbname=$dbname", $username,$password); 

     //2. construir la sentencia sql 
     $sql = "INSERT INTO fechas_horas (id, fecha, horas) 
        VALUES (Null, '$fecha','$horas')";
    
    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql);

    //4. ejecutar sentencia 
    $result = $q -> execute();
   
    if($result){
        echo "<br><br><br><br>";
        echo "<h2>Reporte enviado !\n </h2";
        echo "siga el enlace para ingresar las fechas y las horas\n"; 
        echo "<br><br>";
        ?>
        <br><a href="create-horas.php">Ingresar Horas</a><br>
        <br><a href="bienvenido_docente.php">Terminar</a><br>
        <?php
    }
    else{
        echo "ERREUR en envoyant le report";
    }
    ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles\styles.css" type ="text/css">
        <title>Guardar horas</title>
    </head>
    <body>
    <body background="images/logo2.jpg" >        
    </body>
    </html>