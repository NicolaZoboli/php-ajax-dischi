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

    <script id="record-template" type="text/x-handlebars-template">
      <div class="record">
        <img class="cover" src="{{ poster }}" alt="">
        <h2 class="title">{{ title }}</h2>
        <p class="author">{{ author }}</p>
        <p class="year">{{ year }}</p>
      </div>
    </script>


  </head>

  <body>

    <div class="container">

    </div>

    <script type="text/javascript" src="script.js"></script>

   </body>
</html>
