<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap 4 Dependencies -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="module-page.css">

  <?php
  require 'gencyber_functions.php';
  $modules = simplexml_load_file('gencyber.xml') or die ('Error: Cannot create object');
  ?>

</head>

<body>
<div class="jumbotron text-center">
 <h1>GenCyber Modules</h1>
</div>

<?php init_modules($modules); ?>

</body>
</html>
