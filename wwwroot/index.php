<?php
require ('templateTop.php');
?>

<body style="background: #f1f2f3;">

<div class="container">
<?=$errorMsg?>
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
      project_col('Industrial Control Systems', 'ics', 'nsf-logo.png');
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
