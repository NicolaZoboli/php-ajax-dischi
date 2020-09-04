<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PHP-Ajax Dischi</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

  </head>

  <body>

    <div class="container">

      <?php

      include __DIR__.'/data.php';

      $record = $db["response"];

      foreach ($record as $val) {

        echo "<div class='record'>";

        echo "<img class='cover' src='" . $val['poster'] . "'>";
        echo "<h2 class='title'>" . $val['title'] . "</h2>";
        echo "<p class='author'>" . $val['author'] . "</p>";
        echo "<p class='year'>" . $val['year'] . "</p>";

        echo "</div>";
      }

      ?>

    </div>

    <script type="text/javascript" src="script.js"></script>

   </body>
</html>
