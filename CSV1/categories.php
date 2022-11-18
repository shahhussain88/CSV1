<html>
<script>
const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
searchButton.addEventListener('click', () => {
  const inputValue = searchInput.value;
  alert(inputValue);
});
</script>
<style>
.search{
    width:100%;
    background-color: #f1f1e8;
    height:400px;
    text-align: center;
}
.label{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 32px;
    font-weight: bold;
    letter-spacing: -0.80px;
    text-align: center;
    padding-top: 100px;
}
.title{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
    font-weight: bold;
    letter-spacing: -0.80px;
    padding-top: 100px;
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
.item{
  font-size:15px;
  padding:10px;
  width:inherit;
  border-bottom: 1px solid black;
  padding-left: 10px;
}
ul{
  list-style: none;
  margin: 0px;
  padding:0px;
}
input[type=text] {
    margin-top: 10px;
  width: 50%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
button{
    width: 15%;
  padding: 15px;
  background: #ddd;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.title{
  padding-top: 10px;
  padding-left:10px;
}
.block{
  width: 300px;
  float:left;
  border: 1px solid black;
  background-color: #ffe6cc;
  padding: 0px;
  margin:10px;
}
.head{
  text-align: center;
  border-bottom: 1px solid black;
  width: content;
  background-color: #f7f0b6;
  overflow: hidden;
}
.list{
  background-color: white;
  overflow: hidden;

}
.name{
  margin-top:5px;
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
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="mainC">
    <div class="search">
        <div class="label">What are you looking for?
        </div>
        <div class="searchbox">
        <form>
                <input type="text" name="search" placeholder="Search..">
                <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </div>
    <div class="content">
    <div class="explore">
      <div class="title">
      Explore companies by category
      </div>
      <div class="Cmenu">
        <?php 
        	$connection = mysqli_connect("localhost", "root", "", "accounts");
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
            
            $connection = mysqli_connect("localhost", "root", "", "accounts");
            $sql1 = "SELECT * FROM brands where category = '$row[Name]'";
            $result1 = mysqli_query($connection, $sql1);
            //$row = mysqli_fetch_row($result);
            $num1 = mysqli_num_rows($result1);
            while($row1 = mysqli_fetch_array($result1))
            { ?>
             
            <li class="item"><?php echo $row1['Name']?></li>
            
         
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
    </div>
</div>
<div class="footer" style="background-color:;height:300px;">

</div>
</body>
      
      </html>