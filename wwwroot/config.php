

<?php
   define('DB_SERVER', 'localhost:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Ivymae33!');
   define('DB_DATABASE', 'nsatraining');
   
   try {
	    $db = new PDO("mysql:host=". DB_SERVER . ";dbname=" .DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(PDOException $e){
	   
   }
   //$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>