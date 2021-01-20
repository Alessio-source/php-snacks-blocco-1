<?php

  // Creiamo un array 'matches' contenente altri array i
  // quali rappresentano delle partite di basket di
  // un’ipotetica tappa del calendario. Ogni array della
  // partita avrà una squadra di casa e una squadra
  // ospite, punti fatti dalla squadra di casa e punti fatti
  // dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo
  // schema:
  // Olimpia Milano - Cantù | 55 - 60

  $matches = [
    [
      "ospite" => [
        "nome" => "Olimpia Milano",
        "punti" => 55
      ],
      "casa" => [
        "nome" => "Cantù",
        "punti" => 60
      ]
    ],
    [
      "ospite" => [
        "nome" => "Toronto Raptors",
        "punti" => 10
      ],
      "casa" => [
        "nome" => "Miami Heat",
        "punti" => 60
      ]
    ],
    [
      "ospite" => [
        "nome" => "Dallas Mavericks",
        "punti" => 60
      ],
      "casa" => [
        "nome" => "Orlando Magic",
        "punti" => 35
      ]
    ]
  ];

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Matches</title>
   </head>
   <body>
     <h1>Matches</h1>
     
     <ul>
       <?php
          for ($i = 0; $i < count($matches); $i++) {
            echo "<li>" . $matches[$i]["ospite"]["nome"] . " - " . $matches[$i]["casa"]["nome"] . " | " . $matches[$i]["ospite"]["punti"] . " - " . $matches[$i]["casa"]["punti"] . "</li>";
          }
        ?>
     </ul>

   </body>
 </html>
