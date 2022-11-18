<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
   <style>
      .review2{
         border: 1px solid black;
         padding:2%;
         margin-bottom: 10px;
         
      }
      .left{
         text-align: left;
      }
      .comment{
         height: fit-content;
      }
      .checked {
  color: green;
}
.fa-star
{
  font-size: 2vw;
}

      </style>
<?php
//$category = $_SESSION['category'];
//$category = 'Banks';
//$brand = 'MCB';
$connection = mysqli_connect("localhost", "root", "", "accounts");
          $sql = "SELECT * FROM reviews where Brand = '$brand'";
          $result = mysqli_query($connection, $sql);
          //$row = mysqli_fetch_row($result);
          $num = mysqli_num_rows($result);
          //echo $num;
          if($num == '0' )
          {
            echo 'No Reviews on this Brand Yet.';
          }
          while($row = mysqli_fetch_array($result))
          {

            $user = $row['User'];
            $stars = $row['stars'];
            ?>
   <div class="review2">


   <?php $connection = mysqli_connect("localhost", "root", "", "accounts");
   $sql1 = "SELECT * FROM users where username = '$user'";
   $result1 = mysqli_query($connection, $sql1);
   //$row = mysqli_fetch_row($result);
   $num1 = mysqli_num_rows($result1);
   $row1 = mysqli_fetch_array($result1);
    ?>
   <div class="pfp left col-sm-2"><img src="<?php 
   echo $row1['avatar'];
   ?>" style="width:70px;height:60px;border-radius: 50%;float:left;text-align:left;"/></div>
   <div class="name left col-sm-2" style="font-weight: bold;">
   <?php echo $user;?></div>
   <div class="stars left col-sm-6">
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
 
   </div><br><br>
   <div class="comment">
<?php echo $row['comment']?>
   </div>
</div>
            <?php
          }
?>
</html>