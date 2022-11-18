<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
session_start();
 if ($_SESSION['login_status'] == true)
{
	include('loggedin.php');
	echo '';
	
}  
else if($_SESSION['login_status'] == false)
{
	echo 'you are not logged in plz login first to see this page';
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
?>



</html>