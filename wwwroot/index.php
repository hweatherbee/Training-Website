<!DOCTYPE html>
<html lang="en">
<head>
  <title>JSU Project Portals</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="landing-page.css">


  <?php
  require 'project_functions.php';
  $projects = simplexml_load_file('projects.xml') or die ('Error: Cannot create object');
  ?>

</head>

<body style="background: #f1f2f3;">

<div class="container">
  <br>
  <center>
  <img src="resources/jsu-logo.png">
  </center>
  <br><br>
</div>

<div class="container-fluid" style="background: #e6e9ec">
  <div class="container">
    <center>
    <h1>Project Portals</h1>
    </center>
  </div>

  <center>
  <div class="row">

  <?php init_projects($projects); ?>

  </div>

  </center>
</div>

</body>
</html>
