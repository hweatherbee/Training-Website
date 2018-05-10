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
    <div class="col-1"></div>
      <?php
      project_col('GenCyber', 'gencyber', 'gencyber-logo.png');
      project_col('ICS Workshop', 'ics', 'nsf-logo.png');
      project_col('CNAP', 'cnap', 'nsa-logo.png');
      ?>
    <div class="col-1"></div>
  </div>

  </center>
</div>

<?php
function project_col($site_name, $site_dir, $site_logo) {
  echo '<div class="col">
     <div class="project">
       <a href="sites/' . $site_dir . '">
         <img src="resources/' . $site_logo . '">
         </a>
         <h2>' . $site_name . '</h2>
       </div>
     </div>';
}
?>

</body>
</html>
