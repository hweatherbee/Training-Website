<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['username'];
   
   $sql = 'SELECT * from icsusers where username = "'.$user_check.'"';
   $stmt = $db->prepare($sql);
   if( $stmt->execute()){
	   $row = $stmt->fetch();
	   $login_session = $row['username'];
	  
   }
   
   
   
   //$ses_sql = mysqli_query($db,'select username from icsusers where username = "'.$user_check.'"');
   
   //$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if(!isset($_SESSION['username'])){
      header("Location:login.php");
   }
?>