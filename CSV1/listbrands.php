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
         background-color: white;
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
a:link{
        text-decoration: none;
        color:black;
      }
      a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
      </style>
<?php
//$category = $_SESSION['category'];

$connection = mysqli_connect("localhost", "root", "", "accounts");
          $sql = "SELECT * FROM brands where category = '$category'";
          $result = mysqli_query($connection, $sql);
          //$row = mysqli_fetch_row($result);
          $num = mysqli_num_rows($result);
          //echo $num;
          while($row = mysqli_fetch_array($result))
          {
            $name = $row['Name'];
            $stars = $row['stars'];
            ?>
   <div class="review2"><a href="review2.php?brandname=<?php echo $name;?>">
   <div class="pfp left col-sm-2"><img src="pics/<?php 
   echo $name;
   ?>.png" style="width:70px;height:60px;float:left;text-align:left;"/></div>
   <div class="name left col-sm-5" style="font-weight: bold;">
   <?php echo $name;?></div>
   <div class="stars left col-sm-5">
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
<?php echo $row['description']?>
   </div> </a>
</div>
            <?php
          }
?>
</html>