<?php
//session_start();
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$errorMsg = '';
if(isset($_GET['error']) && $_GET['error'] == 'y'){
	$errorMsg = '<div class="alert alert-danger" role="alert">Error! You do not have permission to access this course.</div>';
}
if(isset($_GET['su']) && $_GET['su'] == 'y'){
	$errorMsg = '<div class="alert alert-success" role="alert">You have successfully registered. You will recieve an email when your account is activated.</div>';
}

?>

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
  <link rel="stylesheet" href="/landing-page.css">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      
	  <li class="nav-item active">
        <a class="nav-link" onclick="alert('You have logged out.');" href="/logout.php/">Logout</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link"  href="/">Home</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link"  href="/account/">Account</a>
      </li>
     
    </ul>
  </div>
</nav>