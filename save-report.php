<?php
    $id_docente = $_REQUEST["docente"];
    $meses = $_REQUEST["meses"];
    $nom_curso = $_REQUEST["curso"];
    $tipo_curso = $_REQUEST["TipoCurso"];
    $num_estudiantes = $_REQUEST["numestu"];
    $modulo = $_REQUEST["modulo"];
    $horario = $_REQUEST["horario"];
   // $fecha = $_REQUEST["fecha"];
   // $num_horas = $_REQUEST["cantho"];

    //1. Connecta to db

    $host = "localhost"; //direccion del servidor, en este caso mi computador, sino seria una IP 
    $dbname = "hora_d_or"; // nombre de la base de datos 
    $username = "root";// la base de datos necesita un nombre de usuario y una contraseña por seguridad. root es el usuario por defecto de xampp
    $password = ""; // contraseñapor defecto de xampp

    $cnx = new PDO("mysql:host=$host; dbname=$dbname", $username,$password); 

     //2. construir la sentencia sql 
     $sql = "INSERT INTO reportes (id_reporte, id_docente, mes, nom_curso, tipo_curso, num_estudiantes, modulo, horario) 
        VALUES (Null,'$id_docente','$meses','$nom_curso', '$tipo_curso', '$num_estudiantes', '$modulo', '$horario')";
    
    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql);

    //4. ejecutar sentencia 
    $result = $q -> execute();
   
    if($result){
        echo "<br><br><br><br>";
        echo "<h2>Información enviada ! </h2>\n";
        echo "<h2>siga el enlace para ingresar las fechas y las horas </h2>\n";
        ?>
        <br>
        <br>
        <br>
        <a class = "link" href="create-horas.php">Ingresar Horas</a><br>   
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
        <title>Document</title>
    </head>
    <body>
    <body background="images/logo2.jpg" >        
    
    
    
    </body>
    </html>


