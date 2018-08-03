<?php

session_start();
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('/', $url);

if(!isset($_SESSION['username'])){
	header('location: /login.php/?i='.$url[2]);
	exit();
}
if(isset($_SESSION['userType']) && $_SESSION['userType'] != $url[2]){
	header('location: /?error=y');
	exit();
	
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
  <link rel="stylesheet" href="/sites/ics/module-page.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/sites/ics/"><img src="../../resources/nsf-logo.png" style="width: 45%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="/logout.php/">Logout</a>
      </li>
     
    </ul>
  </div>
</nav>