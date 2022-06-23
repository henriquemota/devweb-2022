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
    $str = "host=172.20.10.2 port=5432 dbname=estacio user=henriquemota password=";
    $conn = pg_connect($str);


    $data = pg_query($conn, 'select * from clientes');
    if (!$data) echo 'erro';


    while ($row = pg_fetch_assoc($data) ){
      echo "
            <p>".$row['id']."</p>
            <p>".$row['nome']."</p>
           ";
    }

    $row = pg_fetch_row($data);
    var_dump($row);

  ?>

</body>
</html>