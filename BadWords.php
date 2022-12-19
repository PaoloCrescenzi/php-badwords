<?php

$name = $_GET["Name"];
$message = $_GET["Message"];

// echo "Nome Utente:" . $name . "<br>";
// echo "Messaggio:" . $message . "<br>";

// echo str_replace ("bla", "xxx", $message );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>php-badwords</title>
</head>
<body>
  <main>
  <div class="row justify-content-center" >
    <div class="col-md-6">
      <div class="d-flex">
        <h3>Nome Utente: </h3>
        <span>
          <?php
            echo "". $name;
          ?>
        </span>
        
      </div>
      
      <?php       
        echo "Messaggio:" . $message . "<br>";
        echo str_replace  ("bla", "xxx", $message );
      ?>
    </div>
  </div>
  </main>
</body>
</html>

