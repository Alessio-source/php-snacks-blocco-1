<?php

  // Passare come parametri GET name, mail e age e
  // verificare (cercando i metodi che non
  // conosciamo nella documentazione) che:
  // 1. name sia più lungo di 3 caratteri,
  // 2. mail contenga un punto e una chiocciola
  // 3. age sia un numero.
  // Se tutto è ok stampare “Accesso riuscito”, altrimenti
  // “Accesso negato”.

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  $message = "";

  if (strlen($name) < 3 ) {
    $message = "Accesso negato";
  } elseif ( strpos($mail, "@") == false || strpos($mail, ".") == false ) {
    $message = "Accesso negato";
  } elseif ( is_numeric($age) == false ) {
    $message = "Accesso negato";
  } else {
    $message = "Accesso riuscito";
  }

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>verifiche</title>
   </head>
   <body>
     <h1>Verifiche dati</h1>
     <p><?php echo $message; ?></p>

     <p>Nome: <?php echo $name; ?></p>
     <p>Email: <?php echo $mail; ?></p>
     <p>Anni: <?php echo $age; ?></p>
   </body>
 </html>
