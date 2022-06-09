<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Primeira página em php</h1>

  <?php 
    $con_string = "host=0.0.0.0 port=5432 dbname=estacio user=henriquemota password=";
    $bdcon = pg_connect($con_string);
  
  ?>

</body>
</html>