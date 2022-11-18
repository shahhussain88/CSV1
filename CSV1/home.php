<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  div {
    border-radius: 25px;
  }
#two {
  background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)), url(pics/hero.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
    padding: 25px;


}
.body {
  margin: 25px;

  
}
.text {
  font-family:Arial, Helvetica, sans-serif;font-size: 40px;color:white;margin-top: 25%;
  font-weight: 600;
}
.main-search-input {
  background: #fff;
    padding: 0 80px 0 0;
    border-radius: 1px;
    margin-top: 5%;
    box-shadow: 0px 0px 0px 6px rgba(255,255,255,0.3);
}

.fl-wrap {
    float: left;
    width: 100%;
    position: relative;
    border-radius: 25px;
}

.main-search-input:before {
    content: '';
    position: absolute;
    bottom: -40px;
    width: 50px;
    height: 1px;
    background: rgba(255,255,255,0.41);
    left: 50%;
    margin-left: -25px;
    
}

.main-search-input-item {
    float: left;
    width: 100%;
    box-sizing: border-box;
    border-right: 1px solid #eee;
    height: 50px;
    position: relative;
    border-radius: 25px;
}

.main-search-input-item input:first-child {
    border-radius: 100%;
}

.main-search-input-item input {
    float: left;
    border: none;
    width: 100%;
    height: 50px;
    padding-left: 20px;

}

.main-search-button{

      background: #4DB7FE;
      
}

.main-search-button {
    position: absolute;
    right: 0px;
    height: 50px;
    width: 120px;
    color: #fff;
    top: 0;
    border: none;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
    cursor: pointer;
    border-radius: 25px;
}

.main-search-input-wrap {
    max-width: 500px;

    position: relative;
}

:focus {
    outline: 0;
}


@media only screen and (max-width: 768px){
.main-search-input {
    background: rgba(255,255,255,0.2);
    padding: 14px 20px 10px;
    border-radius: 10px;
    box-shadow: 0px 0px 0px 10px rgba(255,255,255,0.0);
}

.main-search-input-item {
    width: 100%;
    border: 1px solid #eee;
    height: 50px;
    border: none;
    margin-bottom: 10px;
    border-radius: 6px;
}

.main-search-input-item input {
    border-radius: 6px !important;
    background: #fff;
    border-radius: 6px;
}

.main-search-button {
    position: relative;
    float: left;
    width: 100%;
    border-radius: 6px;
}
}
.ul1{
  list-style-type: none;
  width: 90%;
  padding-left: 1px;
}
a:link{
  text-decoration: none;
}
.li1{
  height:50%;
  padding:4%;
  background-color: #fff;
  margin:3%;
  width:100%;
  color:black;
  border-radius: 25px;
}
.li1:hover{
  font-weight: bold;
}
#text1 {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 900;
  font-size: 24px;
  letter-spacing: -0.72px;
}
.viewall {
  float:right;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 900;
  font-size: 16px;
  letter-spacing: -0.72px;
  background-color: lightblue;
  border-radius: 25px;
  width: 110px;
  padding-top: 10px;
  height: 40px;
  text-align: center;
}

</style>
</head>
<body class="body">
<div id="two" style="height:500px;text-align:left;">
<div class="main-search-input-wrap">
<div class="text">Read reviews. Write reviews.
    Find companies you can trust.</div>
     
       <div class="main-search-input fl-wrap">

        <div class="main-search-input-item">
          <input type="text"  value="" placeholder="Search Products...">
        </div>
                                           
       <button class="main-search-button">Search</button>
    </div>                                     
   
   </div>
  </div>


<div class="category" style="background-color:#f1f1e8;padding-top:1%;">
<div class="container">
  <div class="col-sm-12">
  <div id="text1" class="col-sm-6">
    <p>Explore Categories</p>
  </div>
  <div id="text2" class="col-sm-6">
    <p class="viewall"><a href="#">View All</a></p>
  </div>
</div>
      <div class="row">
        <div class="col-sm-4" style="">
        <ul class="ul1">
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/mens_clothing_store.svg" alt=""> Men's Clothing Store</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/womens_clothing_store.svg"  alt=""> Women's Clothing Store</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/banks.svg" class="styles_image__3lBsl" alt=""> Banks</li></a>
                          
                      </ul>
      </div>
        <div class="col-sm-4" style=""><ul class="ul1">
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/pet_store.svg" alt=""> Pet Store</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/car_dealer.svg"  alt=""> Car Dealer</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/furniture_store.svg"  alt=""> Furniture Store</li></a>
                          
                      </ul></div>
        <div class="col-sm-4" style=""><ul class="ul1">
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/jewelry_store.svg" alt=""> Jewelry Store</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/fitness_nutrition_center.svg"  alt=""> Fitness and Nutrition</li></a>
                          <a href="#"><li class="li1"><img src="https://cdn.trustpilot.net/consumersite-home/public/categories-icons/_rebrand/cosmetics_store.svg" alt=""> Cosmetics Store</li></a>
                          
                      </ul></div>
      </div>
</div>
</div>



</div>

</body>
</html>
