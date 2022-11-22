<html>
    <style>
      a:link{
        text-decoration: none;
        color:black;
      }
.head{
  text-align: center;
  border-bottom: 1px solid black;
  width: content;
  background-color: #f7f0b6;
  overflow: hidden;
}
.item{
  font-size:15px;
  padding:10px;
  width:inherit;
  border-bottom: 1px solid black;
  padding-left: 10px;
}
.explore{
    background-color: blueviolet;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    letter-spacing: -0.80px;
    width:80%;
    margin-left:10%;
    margin-right:9%;
    height:fit-content;
}
ul{
  list-style: none;
  margin: 0px;
  padding:0px;
}
.block{
  width: 300px;
  float:left;
  border: 1px solid black;
  background-color: #ffe6cc;
  padding: 0px;
  margin:10px;
}
.list{
  background-color: white;
  overflow: hidden;

}
.head{
  text-align: center;
  border-bottom: 1px solid black;
  width: content;
  background-color: #f7f0b6;
  overflow: hidden;
}
.name{
  margin-top:5px;
  font-weight: bold;
    letter-spacing: -0.80px;
}
.io{
  padding-top:5px;
}
.Cmenu{
z-index:1;

}
div.content{
  z-index:1;
}
    </style>
    <div class="explore">
<div class="Cmenu">
        <?php 
        	include('db2.php');
          $sql = "SELECT * FROM categories";
          $result = mysqli_query($connection, $sql);
          //$row = mysqli_fetch_row($result);
          $num = mysqli_num_rows($result);
          while($row = mysqli_fetch_array($result))
          {

        ?>
          <div class="block">
            <div class="head"><img class="io" src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/banks.svg" />
            <h4 class="name"><?php echo $row['Name'] ?></h4>
          </div>
            <div class="list"><ul>
            <?php
            $sql1 = "SELECT * FROM brands where category = '$row[Name]'";
            $result1 = mysqli_query($connection, $sql1);
            //$row = mysqli_fetch_row($result);
            $num1 = mysqli_num_rows($result1);
            while($row1 = mysqli_fetch_array($result1))
            { ?>
             
            <li class="item"><a href="review2.php?brandname=<?php echo $row1['Name']; ?>"><?php echo $row1['Name']?></a></li>
            
         
            <?php }
          ?>
            </ul>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
            </html>