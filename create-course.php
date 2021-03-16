<?php
    //1. connect to data base 
    $host = "localhost"; 
    $dbname = "hora_d_or"; 
    $username = "root";
    $password = ""; 

    $cnx = new PDO("mysql:host=$host; dbname=$dbname", $username,$password); //PDO =>php database object -> objetos para conectarse con bases de datos 

    //2. construir la sentencia sql 
    $sql = "SELECT  id, nombre_curso FROM cursos"; 

    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql); 
    
    //4. ejecutar sentencia 
    $result = $q -> execute(); 

    $cursos = $q->fetchAll();

    var_dump($cursos);
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau cours</title>
</head>
<body>
    
<form action="save-course.php" method="POST">

    <label for="nombre_curso">ingresa el nombre del curso </label>
    <input type="text" id="nombre_curso" name="nombre_curso">
        <br><br>    
    
    <label for="tipo_curso">Elija el tipo de curso</label>
      <select name="tipo_curso" id="tipo_curso">
        <option value="extensivo">Extensivo</option>
        <option value="semi-intensivo">Semi-intensivo</option>
        <option value="intensivo">Intensivo</option>
        <option value="super-intensivo">Super-intensivo</option>
    </select>
    <br><br>
    
    <label for="nivel">Elija el nivel</label>
      <select name="nivel" id="nivel">
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
      </select>
    <br><br>

<input type="submit" value="Créer nouveau cours"> 
</form>
</body>
</html>