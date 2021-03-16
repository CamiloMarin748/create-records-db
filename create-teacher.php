<?php
    //1. connect to data base 

    //creamos una variable que me diga donde esta la base de datos, en este caso localhost
    $host = "localhost"; //direccion del servidor, en este caso mi computador, sino seria una IP 
    $dbname = "hora_d_or"; // nombre de la base de datos 
    $username = "root";// la base de datos necesita un nombre de usuario y una contraseña por seguridad. root es el usuario por defecto de xampp
    $password = ""; // contraseñapor defecto de xampp

    $cnx = new PDO("mysql:host=$host; dbname=$dbname", $username,$password); //PDO =>php database object -> objetos para conectarse con bases de datos 
               //en la cadena "" ingresamos la base de datos a conectar en este caso mysql y la variable $host y separamos con punto y coma
               //ingresamosel nombre de la base de datos especifica. el nombre de usuario y la clave. esto es como un constructor con esos parametros


    //2. construir la sentencia sql 
    $sql = "SELECT Cedula, pwd FROM docentes";

    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql);

    //4. EJECUTAR
    $result = $q -> execute();

    //GUARDAR RESPONSE 
    $docentes_pwd = $q->fetchAll();//traigame todos los resultados y guardelos enla variables 

    var_dump($docentes_pwd); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau professeur</title>
</head>
<body>
    
<form action="save-teacher.php" method="POST">

    <label for="nombre_docente">ingresa el nobre del docente </label>
    <input type="text" id="nombre_docente" name="nombre_docente">
        <br><br>    
    <label for="apellido_docente">ingresa el apellido del docente </label>
    <input type="text" id="apellido_docente" name="apellido_docente">
    <br><br>
    <label for="cedula_docente">ingresa la cedula del docente </label>
    <input type="text" id="cedula_docente" name="cedula_docente">
    <br><br>
    <label for="valor_hora">ingresa el valor dela hora del docente </label>
    <input type="text" id="valor_hora" name="valor_hora">
    <br><br>    
    <label for="pwd">ingresa una clave para este docente </label>
    <input type="password" id="pwd" name="pwd" required>
    <br><br>
<input type="submit" value="Créer nouveau professeur"> <!boton para enviar la información al formulario> 
</form>
</body>
</html>