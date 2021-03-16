<?php
    //1. connect to data base 
    $host = "localhost"; 
    $dbname = "hora_d_or"; 
    $username = "root";
    $password = ""; 

    $cnx = new PDO("mysql:host=$host; dbname=$dbname", $username,$password); //PDO =>php database object -> objetos para conectarse con bases de datos 
    $cnx2 = new PDO("mysql:host=$host; dbname=$dbname", $username,$password);
    //2. construir la sentencia sql 
    $sql = "SELECT  * FROM cursos"; 
    $sql2 = "SELECT  id_docente, Nombre FROM docentes";
    //3. preparar sentencia 
    $q = $cnx -> prepare ($sql); 
    $p = $cnx2 -> prepare ($sql2); 
    //4. ejecutar sentencia 
    $result = $q -> execute(); 
    $result2 = $p -> execute(); 

    $cursos = $q->fetchAll();
    $docentes = $p -> fetchAll();
    //var_dump($cursos);
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\stylesReport.css" type ="text/css">
    <link rel="stylesheet" href="styles\styles.css" type ="text/css">
    <title>Reporte de horas</title>
</head>
<br>
<body background="images/logo2.jpg" >
  
    <h2>En este formulario debes ingresar <br>la información del curso en el cual diste clase.</h2>


<main>
<form class="form" action="save-report.php" method="POST">


<label for="docente">selecciona el docente </label>
      <select name="docente" id="docente">
      <?php
        for($i=0; $i<count($docentes); $i++){
          ?>
          <option value="<?php echo $docentes[$i]["id_docente"]?>">
          <?php echo $docentes[$i]["Nombre"]?></option>
          <?php
        }
      ?>
      </select>
<br>
    <label for="meses">selecciona un mes</label>
        <select name="meses" id="meses">
            <option value="enero">Enero</option>
            <option value="febrero">Febrero</option>
            <option value="marzo">Marzo</option>
            <option value="abril">Abril</option>
            <option value="mayo">Mayo</option>
            <option value="junio">Junio</option>
            <option value="julio">Julio</option>
            <option value="agosto">Agosto</option>
            <option value="septiembre">Septiembre</option>
            <option value="octubre">Octubre</option>
            <option value="noviembre">Noviembre</option>
            <option value="diciembre">Diciembre</option>
        </select>
    <br>


    <label for="curso">selecciona el curso </label>
      <select name="curso" id="curso">
      <?php
        for($i=0; $i<count($cursos); $i++){
          ?>
          <option value="<?php echo $cursos[$i]["NombreCurso"]?>">
          <?php echo $cursos[$i]["NombreCurso"]?></option>
          <?php
        }
      ?>
      </select>
<br>



<label for="TipoCurso">selecciona el tipo de curso </label>
      <select name="TipoCurso" id="TipoCurso">
      <?php
        for($i=0; $i<count($cursos); $i++){
          ?>
          <option value="<?php echo $cursos[$i]["TipoCurso"]?>">
          <?php echo $cursos[$i]["TipoCurso"]?></option>
          <?php
        }
      ?>
      </select>
<br>

      <label for="nivel">selecciona el nivel del curso </label>
      <select name="nivel" id="nivel">
      <?php
        for($i=0; $i<count($cursos); $i++){
          ?>
          <option value="<?php echo $cursos[$i]["Nivel"]?>">
          <?php echo $cursos[$i]["Nivel"]?></option>
          <?php
        }
      ?>
      </select>   

    <br>    
    
    <label for="numestu">ingresa el numero de estudiantes </label>
    <input type="int" id="numestu" name="numestu">
    <br>    
    <label for="modulo">ingresa el módulo </label>
    <input type="text" id="modulo" name="modulo">
    <br>
    <label for="horario">indica el horario</label>
    <input type="text" id="horario" name="horario">
    <br>

    <input class = "form input"type="submit" value="Enviar información del grupo">  
  </form>
</main>

</body>
<br>

  <!  <a href="index.html">Aller à la page d'acceuille </a>


</html>