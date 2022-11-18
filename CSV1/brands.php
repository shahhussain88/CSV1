</html>
<?php
session_start();
$category = $_GET['category'];
//$category = 'Banks';
if ($_SESSION['login_status'] == true)
{
	include('logoutmenu.php');
}else{
    include('navheader.html');
}
?>
<style>
    .whole{
        background-color: #f1f1e8;
        height:100%;
    }
.text{
    height:170px;
    padding-top:30px;
    text-align: center;
    font-weight: 900;
    letter-spacing: -0.4;
    background-color: white;
}
.list{
    width:80%;
    margin-left: 9%;
    margin-right: 10%;
    
}

    </style>
<body>
    <div class="whole">
    <div class="text">
        <h1>Best in <?php echo $category;?></h1>
    </div>
    <div class="contain">
    <div class="list">
        <?php include('listbrands.php');?>
    </div>
</div>
    </div>
</body>
</html>