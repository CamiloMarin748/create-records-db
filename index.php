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
    $sql = "SELECT Cedula, PWD FROM docentes";

    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql);

    //4. EJECUTAR
    $result = $q -> execute();

    //GUARDAR RESPONSE 
    $docentes_pwd = $q->fetchAll();//traigame todos los resultados y guardelos enla variables 

    //var_dump($docentes_pwd); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css" type ="text/css">
    <title>acceso</title>

    <link rel="stylesheet" href="styles\styles.css" type ="text/css">
    <link rel="stylesheet" href="styles\stylesnavbar.css" type ="text/css">
    <link rel="stylesheet" href="styles\stylesReport.css" type ="text/css">

</head>
<br>
<body>
    

<header>
        <h1><img src="images\logo5.jpg" alt="AF" style="width:600px;height:350px;" class="center">         <br> 
        UN MUNDO DE POSIBILIDADES  		</h1>


    </header>

    <h2>Pagina de acceso </h2>

    <form action="bienvenido.php" class = "form">
    <label for="" >Cedula</label>
	<input type="text" placeholder="Cédula" name="cedula" id="cedula" required>

    <label for="" >Contraseña</label>
    <input type="password" placeholder="Contraseña" name="password" id="password" required>
        

		<button type="submit" formaction="bienvenido_docente.php" >entrar!</button>
    </form>
</div>
</body>
<br>

</html>