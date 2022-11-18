<html>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$username = $_SESSION['username'];
	//echo $username;
	$connection = mysqli_connect("localhost", "root", "", "accounts");
$sql = "SELECT avatar FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_row($result);
?>
<style type="text/css">
.leftside
{
float:left;
width:25%;
height:100%;
margin-top:10px;
}
.profiledata
{
width:100%;
height:95%;

}
.above{
	z-index:1;
font-family: Raleway;
margin-left:10px;
<!-- model content css too -->
}
h4
{
	color:white;
}
.rightside
{
	z-index:0;
margin-top:10px;
  background:white; 
  

float:left;
width:60%;
height:100%;
}
img{
padding-left:5px;
max-width:175px;
max-height:200px;
}
.main1
{
	position:relative;
	
}
.content1{
	position:relative;
	z-index:0.5;
	margin:20px;
}
div.hilight
  {
	  background-color:#3b5998;
	  position:relative;
	  margin-right:10px;
  }
  input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
.checked {
  color: green;
}
  
</style>
<body class="main1" style="background-color:#f1f1e8;">
<div class="content1">

<?php
include 'logoutmenu.php';
?>
<div class="profiledata">
<div class="leftside">
<div class='wallpaper'>
<img src="<?=$row[0]?>" />
</div>
<div><h4><?php echo '<div style="Color:Black">'.$username.'</div>' ?></h4>
</div>
<div><?php
//$connection = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("accounts", $connection);
$sql = "SELECT email FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $sql );
//echo 'lol';
//echo $result;
$row = mysqli_fetch_assoc($result);
//echo $row["CNIC"];
 ?><h4><?php echo '<div style="Color:Black">'.$row["email"].'</div>' ?></h4>
</div>
</div>
<div class="rightside">
<div class="above">
<h4>Review Drafts
</h4>
<?php 
$sql = "SELECT category, stars, comment FROM reviews WHERE user = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
//echo $row["category"];
//echo $row["stars"];
//echo $row["comment"];
?>
<?php
//$connection = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("accounts", $connection);
$sql = "SELECT avatar FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $sql );
//echo 'lol';
//echo $result;
$row = mysqli_fetch_assoc($result);
//echo $row["CNIC"];
 ?>
<div class="sreview" style="background-color:#f1f1e8;margin-right:10px;">
  <section class="first container-fluid" >
  <div class="row">
    <div class="avatar col-sm-2" style="width:15%;">
    <img src="<?=$row["avatar"]?>"  style="border-radius:25px;width:100%;height:50px;"/>
    </div>
    <div class="name col-sm-4"> <h3><?php echo $username; ?></h3></div>
</div>
</section>
  <?php 
$sql = "SELECT category, stars, comment FROM reviews WHERE user = '$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
//echo $row["category"];
//echo $row["stars"];
//echo $row["comment"];
?>
<div class="second" style="width:100%;padding-left:2%">
  <div class="stars" >
  <div style="float:left;">
    <h4><?php echo $row["stars"]."/5";
    $x = 1;
    while( $x <= $row["stars"]) {
      ?>
    
<span class="fa fa-star checked"></span>
    <?php
    $x++;
    } ?></h4>
</div>
</div>
<br><br>
</div>
<div class="comment" style="padding-left:10px;">
  <h5><?php echo $row["comment"]?></h5>
</div>
</div>
</div>
</div>
</div>




<?php
/*while($row = $result->fetch_assoc())
{
 echo "<div class='userlist'><span>$row[username]</span><br>";
echo "<img src='$row[avatar]'></div>"; 
}*/
?>
 <!--<form method="POST" action="loggedin.php">
<input type="submit" value="logout" name="logout" placeholder="logout">
</form> -->
 <?php
 /* if ( isset( $_POST['logout'] ) ) {
$_SESSION['login_status'] = false;
header("location:login.php"); 	
} */
?> 
</div>
</div>
</div>
</body>
<html>