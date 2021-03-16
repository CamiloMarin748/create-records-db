<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\stylesReport.css" type ="text/css">
    <title>Guardar horas</title>
</head>
<body background="images/logo2.jpg">

<br><br><br>
    <form class="form" action="save-horas.php" method="POST">
      <label for="fecha">ingresa la fecha</label>
      <input type="date" id="fecha" name="fecha">   
        <br>
        <label for="horas">ingresa el numero de horas</label>
          <input type="float" id="horas" name="horas">
        <br>
        <input type="submit" value="Enviar fecha y horas">  
      </form>
</body>
</html>