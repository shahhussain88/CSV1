<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <?php
    session_start();
if ($_SESSION['login_status'] == true)
{
	include('logoutmenu.php');
}else{
  include('navheader.html');
}
$user = $_SESSION['username'];
$brandname = $_SESSION['brandname'];
$category = $_SESSION['category'];
$page =$_SERVER['PHP_SELF'];
    if(isset($_POST['submit'])) 
    {
      $rate = $_POST['rating1'];
      if(!empty($_POST['rating1'])) {
        echo '  ' . $rate;
    } else {
        echo 'Please select the value.';
    }
      $comment=$_POST['comment'];
      include('db2.php');
            $sql1 = "INSERT INTO reviews (User, Category, Brand, stars, comment) VALUES('$user','$category','$brandname','$rate','$comment')";
            if(mysqli_query($connection, $sql1)){

              echo '<script language="javascript">';
              echo 'alert("Data Added Successfully")';
              echo '</script>';
              echo '<script type="text/javascript">
              <!--
              function Redirect() {
               window.location="review2.php";
              }
            
              document.write("You will be redirected to main page in 10 sec.");
              setTimeout("Redirect()", 100);
              //-->
              </script>';
              }
              
              else{
              
              echo mysqli_error($connection);
              
              }
              mysqli_close($connection);
    }
?>
    <style>
      @media only screen and (max-width: 600px) {
        .mainB{
        width:80%;
        }
      }
      .okname{
        
        background-color: white;
        height: fit-content;
        text-align: center;
        padding: 10px;
        overflow: hidden;
      }
    .mainB{
        width:50%;
        overflow:hidden;
        margin-top: 50px;
        margin-left:20%;
        background-color: white;
        border-radius: 25px;
        padding: 20px;
    }
    .form{
      padding-left: 10%;
    }
    body{
      background-color: #f1f1e8;
      font-size: 25px;
      font-family: Arial, Helvetica, sans-serif;
      letter-spacing: -0.72px;
    }
    .star-rating {
   margin:10px 10px 0px;
  font-size: 0;
  color: green;
  white-space: nowrap;
  display: inline-block;
  width: 175px;
  height: 35px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  color: green;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: 0;
  color: green;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
  color:green;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}
    </style>
    <?php 
    
    ?>
    <body>
      <div class="ok">
        <div class="okname row">
        <div id="text1" class="col-sm-8">
    <div id="Cpic" class="col-sm-2">
    <img src="pics/<?php echo $brandname?>.png" style="max-height:100px;object-fit:cover;object-position:bottom;padding-left:400%;" /> 
    </div>
    <div class="col-sm-2" style="max-width:20%;float:left;margin:25px;padding-left:50%;">
    <div class="details">
      <?php echo $brandname;?>
</div>
</div>
</div>
        </div>
        <div class="mainB" style="min-width:300px;">
            <div class="form">
                <form class="form-horizontal" action="" method="post">
                
                <div class="form-group">
                <label class="control-label" for="pwd">Rate your recent experience</label>
                <div class="">    
                <span class="star-rating">
                
                    <input type="radio" name="rating1" value="1"><i></i>
                    <input type="radio" name="rating1" value="2"><i></i>
                    <input type="radio" name="rating1" value="3"><i></i>
                    <input type="radio" name="rating1" value="4"><i></i>
                    <input type="radio" name="rating1" value="5"><i></i>
                </span>
                </div>
                </div>
                <div class="form-group">
                <label class="control-label" for="pwd">Comments</label><br>
                <div class="commentbox">
                <div  style="font-size:2vw;padding-right:40%;"> 
                <textarea class="form-control" rows="5" cols="50" id="comment" name="comment" placeholder="What made your experience great? What is this company doing well? Remember to be honest, helpful, and constructive!" style="width:130%;"></textarea>
                </div>
                </div>
                </div>
                <div class="form-group">
                <div>
                  <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </div>
                </div>
                </form>
            </div>
        </div>
</div>
    </body>
    <footer></footer>
</html>