
<style>
/* The Modal (background) */
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #ffffff;
	opacity:1 ! important;
	color:black;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>




<!-- Trigger/Open The Modal -->
<button id="myBtn2">CNIC</button>

<!-- The Modal -->
<div id="myModal2" class="modal2">
<?php
$value = 'CNIC';
$file = 'modelpop.php';
?>
  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <p>submit your CNIC number</p>
	 <form method="POST" action="cnicd.php">
	 <input type="text" name="CNIC" placeholder="CNIC NUMBER" >
<input type="submit" value="submit1" name="submit1" placeholder="submit">
</form> 
</div>
<script>
// Get the modal
var modal1 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

 

</div>
