<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  </head>
  <script type="text/javascript">
    function page(){
      url = "input.php";
      window.location.href="input.php";  
    }
    </script>
  <?php
session_start();
if ($_SESSION['login_status'] == true)
{
	include('logoutmenu.php');
}else{
    echo '<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="login.php";
            }
            setTimeout("Redirect()", 1000);
         //-->
      </script>';
}
$name = $_GET['brandname'];
$username = $_SESSION['username'];
$connection = mysqli_connect("localhost", "root", "", "accounts");
            $sql1 = "SELECT * FROM brands where name = '$name'";
            $result1 = mysqli_query($connection, $sql1);
            //$row = mysqli_fetch_row($result);
            $num1 = mysqli_num_rows($result1);
            $row1 = mysqli_fetch_array($result1);
            $stars = $row1['stars'];
            $phone = $row1['Phone'];
            $description = $row1['Location'];
            $category = $row1['Category'];
            $link = $row1['link'];

            $sql2 = "SELECT * FROM users where username = '$username'";
            $result2 = mysqli_query($connection, $sql2);
            $row2 = mysqli_fetch_array($result2);
            $avatar = $row2['avatar'];
 ?>
  <style>
a:link{
        text-decoration: none;
        color:black;
      }

.footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color: black;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
    color:inherit;
  text-decoration:none;
  opacity:0.6;
}
.footer-dark ul a:hover {
    opacity:0.8;
}


@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:70%;
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
  color:#f0f9ff;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}

.container-fluid
{
background-color: #000000;
color:#f0f9ff;
}

.Clink {
  float:right;
  position: relative;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 900;
  font-size: 16px;
  color:#000000;
  letter-spacing: -0.72px;
  border-radius: 25px;
  width: auto\9;
  padding: 10px;
  height: auto;
  text-align: center;
  background-color: lightblue;
}
.visit {
  height: auto\9;
  position:relative;
  max-width: 80%;
}

.details {
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 1.5vw;color:black;padding-top: 20px;
  font-weight: bold;letter-spacing: 0.18px;
}
.checked {
  color: green;
}
.fa-star
{
  font-size: 3vw;
}
.pp{
  width:100%;
  height: 10%;
  border-radius: 25px;
}
#freview {
background-color: white;
border-radius: 25px;
padding-top:0px;
margin-left:0%;
}
.rating {
  display: flex;
  flex-direction: row-reverse;
  justify-content: center;
}

.rating > input{ display:none;}

.rating > label {
    width: 1em;
    font-size: 3vw;
    color: green;
    cursor: pointer;
}
.rating > label::before{ 
  content: "\2605";
  position: absolute;
  opacity: 0;
}
.rating > label:hover:before,
.rating > label:hover ~ label:before {
  opacity: 1 !important;
}

.rating > input:checked ~ label:before{
  opacity:1;
}

.rating:hover > input:checked ~ label:before{ opacity: 0.4; }

@media only screen and (max-width: 600px) {
  h1{font-size: 14px;}
  p{font-size: 12px;}
}
.Cintro {
  font-family: Arial, Helvetica, sans-serif;
  letter-spacing: -0.72px;
  background-color: white;
  padding: 10%;
}
.Creview {
  font-family: Arial, Helvetica, sans-serif;
  letter-spacing: -0.72px;
  background-color: white;
  padding-top: 10px;
  text-align: left;
}
.cfreview {
  margin-top:10px;
  position: relative;
  background-color: #000000;
}
.Ctitle{
  font-size: 20px;
  font-weight: 900;
}
.udetails {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 900;
  letter-spacing: -0.72px;
}
.intro-ul{
  padding:2%;
  border-color: black;
  list-style-type: none;
}
.cli {
  border-bottom: solid 1px black;
  padding:10px;
}
.list-review{
  margin-left: 01%;
}
.mv{
  display: none;
}
@media only screen and (max-width: 800px) {
.visit{
  display: none;
}
body{
  float:left;
}
.mh{
  display:none;
}
.cintro{
  display:none;
}
.mv{
  display: inline;
  width:100%;
}
.button {
  width:100%;
  padding-top:10px;
  padding-bottom: 5px;
  background-color: lightblue;
  border-radius: 25px;
  text-align: center;
}
.udetails{
  text-align:center;
}
}
  </style>
  
  <body>
     <div class="review" style="background-color:white;padding-top:1%;height:170px;">
<div class="container">
  <div class="row">
  <div class="col-sm-12" style="overflow:hidden;height:auto;">
  <div id="text1" class="col-sm-8">
    <div id="Cpic" class="col-sm-2" style="height:100%;padding-top:30px;max-width:20%;float:left;">
    <img src="pics/<?php echo $name?>.png" style="max-height:100px;object-fit:cover;object-position:bottom;" /> 
    </div>
    <div class="col-sm-2" style="max-width:20%;float:left;margin:25px;">
    <div class="details">
      <?php echo $name;?>
</div><p><?php echo $category;?><br>
</div>
<div class="col-sm-5" style="padding-top:40px;max-width:50%;float:left;margin:20px;">
<?php 
$remaining = '0';
$remaining = '5' - $stars;
for($i=1;$i<=$stars;$i++){ ?>
    <span class="fa fa-star checked"></span>
<?php 
}
for($e=1;$e<=$remaining;$e++){
?><span class="fa fa-star"></span>
<?php
}
?>
    </div>
</div>
  <div id="text3" class="col-sm-4" style="display:block;">
    <div class="visit" style="overflow:hidden;margin-top:25px;">
    <p class="Clink" style="width:80%;height:auto;width:auto\9;overflow:hidden;"><a href="<?php echo $link;?>"><?php echo $name;?><br> Visit the website</a></p>
  </div>
</div>
</div>
</div>
</div>
<br>
<br>
</div>
</div>


<div class="Creview" style="background-color:#f1f1e8;padding-top:1%;height:auto;">
  <div class="container">
  <div class="col-sm-12">
  <div id="freview" class="col-sm-8">
    <div class="mh">
  <div class="col-sm-2" style="margin-top:20px;">
    <div class="pp" style="padding-top:20%;">
  <img src="<?php echo $avatar;?>" style="width:70px;height:60px;border-radius: 50%;float:left;text-align:left;"/>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="Udetails">
      <p style="text-align:left;padding-top:30%"><?php echo $username;?><br><a style="color:black" href="input.php">Write a review</p></a>

</div>
  </div>
  <div class="col-sm-6">
    <div class="Ureview">
    
<div class="rating" style="padding-top:10%;padding-left:70%;text-align:center;">
  <input type="radio" name="rating" value="5" id="5" onClick="page()"><label for="5">☆</label>
  <input type="radio" name="rating" value="4" id="4" onClick="page()"><label for="4">☆</label>
  <input type="radio" name="rating" value="3" id="3" onClick="page()"><label for="3">☆</label>
  <input type="radio" name="rating" value="2" id="2" onClick="page()"><label for="2">☆</label>
  <input type="radio" name="rating" value="1" id="1" onClick="page()"><label for="1">☆</label>
</div>
</div>
</div>
</div>
<br>
<div class="col-sm-12" style="padding:10px;">
<div class="Ctitle">
    <p>Company Description</p>
</div>
<p><?php echo $description ?></div>
  </div>
<div class="col-sm-4" style="float:left;">
  <div class="Cintro">
    <div class="Ctitle">
    <p>Company intro</p>
</div>
<div>
  <ul class="intro-ul">
  <li class="Cli"> ClaimedProfile</li>
  <li class="Cli">Ask for reviews</li>
  <li class="Cli">Pay for extra feattures</li>
</ul>
</div>
  </div>
</div>
</div>
<div class="container">
  <div class="col-sm-8 mv">
    <div class="button"><p>Write a Review</p></div>
</div>
</div>
<div class="list-review" style="background-color:white;">
<div class="col-sm-8" style="background-color:white;padding-top:1%;height:auto;">
<div class="Ctitle">
    <p>Latest Reviews</p>
</div>
<div>
<div class="container">
  <div class="col-sm-4">
<div class="col-sm-2" >
    <div class="pp" style="width:45px;height:60px;float:left;">
  <img src="pics/CoCo.jpg" style="width:45px;height:45px;border-radius: 50%;float:left;text-align:left;"/>
    </div>
</div>
<div class="col-sm-2">
    <div class="Udetails">
      <p>NAME<br>Location</p>
</div>
  </div>
</div>
</div>
<div style="padding-left:60px;">
    <p>We're on a mission to DO GOOD for Southeast Texas by helping our members achieve their hopes and dreams. We believe you matter most...and deserve 5-star service.
   Your experience is important to us! Should you have any questions or concerns, please feel free to contact us at marketing@dugood.org. </p>
</div>
  </div>
  </div>
</div>
</div>



  

</div>
</div>












 
  </body>
  <footer style="padding-left: 1px;padding-right: 1px;">
    <div class="footer-dark">
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 item">
                      <h3>Services</h3>
                      <ul class="ul2">
                          <li class="li2"><a href="#">Web design</a></li>
                          <li class="li2"><a href="#">Development</a></li>
                          <li class="li2"><a href="#">Hosting</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3>About</h3>
                      <ul class="ul2">
                          <li class="li2"><a href="#">Company</a></li>
                          <li class="li2"><a href="#">Team</a></li>
                          <li class="li2"><a href="#">Careers</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6 item text">
                      <h3>Company Name</h3>
                      <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                  </div>
                  <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
              </div>
              <p class="copyright">Company Name © 2018</p>
          </div>
      </footer>

        </footer>
    </div>


  </footer>
</html>