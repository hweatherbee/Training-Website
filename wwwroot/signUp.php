<?php
// Include config file

require 'config.php';
require('templateTop.php');

$course = '';
   if(isset($_GET['i'])){
	   $course = $_GET['i'];
   }

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if($course == 'ics'){
		$tableName = 'icsusers';
	}
	else if($course == 'gencyber'){
		$tableName = 'gencyber';
	}
	else if($course == 'cnap'){
		$tableName = 'cnapusers';
	}
     
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT * FROM ".$tableName." WHERE username = :username";

        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = 'INSERT INTO '.$tableName.' (username, userfirstname, userlastname, email, password) VALUES (:username,"'.$_POST["userfirstname"].'", "'.$_POST["userlastname"].'", "'.$_POST["email"].'", :password)';

        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $param_password, PDO::PARAM_STR);

            // Set parameters
            $param_username = $username;
            $param_password = $password;
            //password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
				
                $lastId = $db->lastInsertId();
				try{
					$id = uniqid($course.'-'.$lastId.'-');
					$to = "hweatherbee@gmail.com";
					$subject = "Activate New User";
					$txt = "A new user registered. Activate the account using the link below. <br /> http://192.168.10.56/manage/activate.php/?id=".$id."/";
					$headers = "From: moonbees@gmail.com" . "\r\n";

					if(mail($to,$subject,$txt,$headers)){
						//session_start();
						//$_SESSION['username'] = $username;
						//$_SESSION['userType'] = $course;
						header("Location: /?su=y"); /* Redirect browser */
						
					}
					else {
						$errorMessage = error_get_last()['message'];
						echo $errorMessage;
					}
				}
				catch(Exception $e){
					echo $e;
				}
                
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        unset($stmt);
    }

    // Close connection
    unset($db);
}





?>


<body>
<div class="col-md-6 wrapper mx-auto">
    <h2>Register</h2>
    <p>Please fill this form to create an account.</p>
    <form action="" method="post">
		<div class="form-group">
            <label>First Name:<sup>*</sup></label>
            <input type="text" name="userfirstname"class="form-control" value="">
        </div>
		<div class="form-group">
            <label>Last Name:<sup>*</sup></label>
            <input type="text" name="userlastname"class="form-control" value="">
        </div>
		<div class="form-group">
            <label>Email:<sup>*</sup></label>
            <input type="text" name="email"class="form-control" value="">
        </div>
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Username:<sup>*</sup></label>
            <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password:<sup>*</sup></label>
            <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
            <span class="help-block"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Confirm Password:<sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
            <span class="help-block"><?php echo $confirm_password_err; ?></span>
        </div>
		<div class="g-recaptcha" data-sitekey="6Lf09WEUAAAAABgfVM7gXlkreNZ5lRtY_nREDSNx"></div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
        </div>
		
        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
</div>
</body>
</html>