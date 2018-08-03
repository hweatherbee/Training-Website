<?php
require ('../templateTop.php');
require ('../config.php');

session_start();
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('/', $url);

if(!isset($_SESSION['adminUsername'])){
	header('location: /manage/login.php/');
	exit();
}


?>


<div class="container mx-auto" style="margin-top: 10px;">
	<div class="col-md-4 mx-auto">
        <div class="card">
			<div class="card-body"> 
				<a href="/manage/activate.php/" class="btn btn-sm btn-primary mx-auto"> Activate Users </a> 
			</div>
		</div>
    </div>
</div>