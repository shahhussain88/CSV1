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
        .checked {
  color: green;
}
.fa-star
{
  font-size: 2vw;
}
        </style>
<body>



<script>
    function myFunction(p1){
        let r = "";
        r = 5 - p1;
        let text = "";
        let text1 = "";

        for (let i = 1; i <= p1; i++) {
  text += '<span class="fa fa-star checked"></span>';
}
for (let b = 1; b <= r; b++) {
  text1 += '<span class="fa fa-star"></span>';
}

return text+""+text1;

    }


//document.getElementById("demo").innerHTML = myFunction(1);
</script>
    
</body>
</html>
