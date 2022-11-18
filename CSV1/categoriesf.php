<html>
<style>
    .searchf{
        margin-top:5px;
    }
    .search{
    width:100%;
    background-color: #f1f1e8;
    height:400px;
    text-align: center;
}
.label1{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 32px;
    font-weight: bold;
    letter-spacing: -0.80px;
    text-align: center;
    padding-top: 100px;
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
a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

</style>
<body>
    <div class="headf">
    <?php 
    session_start();
    if ($_SESSION['login_status'] == true)
    {
    include('logoutmenu.php');
}else{include('navheader.html');}
    ?>
</div>
<div class="searchf">
<div class="search">
        <div class="label1">What are you looking for?
        </div>
        <div class="searchbox">
        <form>
                <input type="text" name="search" placeholder="Search..">
                <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </div>
    <div class="logic">
            <?php include("function1.php"); 
            ?>
</div>
</div>
</body>
</html>