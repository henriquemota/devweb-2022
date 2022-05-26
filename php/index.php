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
  <p>a soma de 1 + 1 é <?php echo  1 + 1; ?></p>
  <?php
    for ($i=0; $i < 100; $i++) { 
      echo "<p>linha número ". $i ."</p>";
    }
  ?>
</body>
</html>