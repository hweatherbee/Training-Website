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
</head>

<body>
<div class="jumbotron text-center">
 <h1>GenCyber Modules</h1>
</div>

<div class="row">
  <div class="col"></div>
    <?php
    module_col('Module 1', 'This is an example of a module description.');
    module_col('Module 2', 'This is an example of a module description.');
    module_col('Module 3', 'This is an example of a module description.');
    module_col('Module 4', 'This is an example of a module description.');
    ?>
  <div class="col"></div>
</div>

<br>

<div class="row">
  <div class="col"></div>
    <?php
    module_col('Module 5', 'This is an example of a module description.');
    module_col('Module 6', 'This is an example of a module description.');
    module_col('Module 7', 'This is an example of a module description.');
    module_col('Module 8', 'This is an example of a module description.');
    ?>
  <div class="col"></div>
</div>

</body>
</html>

<?php
  function module_col($mod_title, $mod_discription) {
    echo '
      <div class="col-2">
        <div class="panel panel-default text-center">

          <div class="panel-heading">
            <h2>' . $mod_title . '</h2>
          </div>

          <div class="panel-body">
            <p style="text-align:left;">
              ' . $mod_discription . '
            </p>
          </div>

        <div class="panel-footer">
          <button class="btn btnlg">View Unit</button>
          <button class="btn btnlg">Lesson Plans</button>
        </div>
      </div>
    </div>';
  }
?>
