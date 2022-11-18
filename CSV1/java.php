<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation and returns the result:</p>

<p id="demo"></p>

<script>
    function myFunction(p1){
        let r = "";
        r = 5 - p1;
        let text = "";
        let text1 = "";

        for (let i = 1; i <= p1; i++) {
  text += "Filled " + i + "<br>";
}
for (let b = 1; b <= r; b++) {
  text1 += "Not filled " + b + "<br>";
}
return text+""+text1;

    }


document.getElementById("demo").innerHTML = myFunction(3);
</script>
    
</body>
</html>
