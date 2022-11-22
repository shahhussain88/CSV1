
<?php
if (isset($_POST['register-submit'])) {
session_start();
/* $_SESSION['login_user']=$username;
echo "username is ".$username; */
$_SESSION['message']='';
$mysqli = new mysqli('localhost','root','','accounts');
$error = 0;

if ($_POST['password'] == $_POST['confirm-password'])
{
	$username = $mysqli->real_escape_string($_POST['username']);
	include('db2.php');
$sql1 = "SELECT username FROM Users WHERE username='$username'";
$result = mysqli_query($connection, $sql1);
if (mysqli_num_rows($result) != 0)
{
	echo '<span class="error"> username already exit</span>';
	$error = '1';
	$errorMsg = 'username already exit';
	echo '<script type="text/javascript">alert("INFO:  '.$errorMsg.'");</script>';
	echo '<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="login.php";
            }
            
            document.write("You will be redirected to main page.");
            setTimeout("Redirect()", 1000);
         //-->
      </script>';
	}
else{
	echo '<span class="error"> username is new</span>';
	

        $email = $mysqli->real_escape_string($_POST['email']);
		$password = $mysqli->real_escape_string($_POST['password']);

        //md5 hash password for security
        /* $password = md5($_POST['password']); */

        //path were our avatar image will be stored
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
	
	if(preg_match("!image!",$_FILES["avatar"]["type"]))
	{
	if(copy($_FILES["avatar"]["tmp_name"], $avatar_path))
	{
		if($error == '0'){
		$_SESSION["username"]=$username;
		$_SESSION["avatar"]=$avatar_path;
		echo $avatar_path;
		$mysqli = new mysqli('localhost','root','','accounts');
		$sql="insert into users(username, email, password, avatar)"."VALUES('$username','$email','$password','$avatar_path')";
		if($mysqli->query($sql)=== true)
		{
			$_SESSION["message"]="resgitration is complete";
			echo "registration is complete";
			$_SESSION['username']=$username; // Initializing Session
		$_SESSION['avatar']=$avatar;
		$_SESSION['login_status']= true;
		echo '<script language="javascript">';
		echo 'alert("LOGGED IN SUCCESSFULLY")';
		echo '</script>';
		echo '<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="categoriesf.php";
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            setTimeout("Redirect()", 10);
         //-->
      </script>';
		}
		else{
		$_SESSION["message"]="resgitration is not complete";
		echo 'registration is not complete';
		}
		}
		else
		{
			echo 'some error occured';
		}
		
	}
	else{
		$_SESSION["message"]="avatar file upload failed";
		echo 'file upload is failed';
	}
	}else{
		$_SESSION["message"]='only upload GIF,JPG or PNG images';
		echo 'upload the correct image'; 
}}
}else {
	$_SESSION["message"]='two password doesnt match with each others';
	echo 'password doesnt match';
}
}
?>