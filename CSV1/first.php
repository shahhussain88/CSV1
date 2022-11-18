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
    #two {
  background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)), url(pics/hero.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
    padding: 25px;


}
.body {
  margin-left: 25px;
  margin-right: 25px;

  
}
.navbar1 ul li:hover a:hover{
  background-color: black;
  opacity:0.8;
}
.text1 {
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: 40px;color:white;margin-top: 25%;
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
}

.main-search-input-item input {
    border-radius: 6px !important;
    background: #fff;
}

.main-search-button {
    position: relative;
    float: left;
    width: 100%;
    border-radius: 6px;
}
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


  </style>



        <div class="container-fluid">
            <div class="navbar1">
          <ul class="nav navbar-nav navbar-left">
            <a class="navbar-brand" href="" style="padding-left: 50px;padding-right: 0px;"><img src="pics/logo.jpg" height="40px" width="40px" style="float:left;border-radius:50%; margin-top:-10px;"> </img></a>
            <li><a href="" style="color: #f0f9ff;">CustomerScore</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-right: 5%;">
            <li><a href="#" style="color: #f0f9ff;">Home</a></li>
            <li><a href="#" style="color: #f0f9ff;">Categories</a></li>
            <li><a href="#" style="color: #f0f9ff;">Login</a></li>
          </ul>
</div>
        </div>




    <body class="body">
<div id="two" style="height:500px;text-align:left;">
<div class="main-search-input-wrap">
<div class="text1">Read reviews. Write reviews.
    Find companies you can trust.</div>
     
       <div class="main-search-input fl-wrap">

        <div class="main-search-input-item">
          <input type="text"  value="" placeholder="Search Products...">
        </div>
                                           
       <button class="main-search-button">Search</button>
    </div>                                     
   
   </div>
  </div>


<div class="category" style="background-color:light-gray;">
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-4" style="background-color:lightcyan;">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:lightgray;">.col-sm-4</div>
        <div class="col-sm-4" style="background-color:lightgray;">.col-sm-4</div>
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
                      <ul>
                          <li><a href="#">Web design</a></li>
                          <li><a href="#">Development</a></li>
                          <li><a href="#">Hosting</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-6 col-md-3 item">
                      <h3>About</h3>
                      <ul>
                          <li><a href="#">Company</a></li>
                          <li><a href="#">Team</a></li>
                          <li><a href="#">Careers</a></li>
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
</html>>