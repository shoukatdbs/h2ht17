<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Automatic Slideshow</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="dbs.jpg" style="width:100%">
  <img class="mySlides" src="download.jpg" style="width:100%">
  <img class="mySlides" src="205.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>