<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style1.css">

<title>CAR</title>
<link href="https://fonts.googleapis.com/css?family=Audiowide|Righteous" rel="stylesheet">
<style type="text/css">
  #carInfo
{
    background-color: green;
    height:200px;
    padding: 40px;
}

video
{
  max-width:100%;
  height: auto;
  margin-bottom: 10%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
function showCar() {
	var str=document.getElementById("search").value;
	//alert(str);
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 ) {
      document.getElementById("inf").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","db1.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>

<body>



<div class="header">
<h1 id="tit">Cars - Get Yours Today</h1>


<div class="hbuttons1">

<a href="new1.php"><input type="button" name="new_top" value="New" class="hbuttons"></a>
<a href="used2(s).php"><input type="button" name="used_top" value="Used" class="hbuttons"></a>
<input type="button" name="new_top" value="Comparator" class="hbuttons">

<a href="form.html" id="myRBtn" class="hbuttons">Register</a>



<!-- Trigger/Open The Modal -->
<a href="#" id="myBtn" class="hbuttons">Login</a>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>LOGIN</h2>
    </div>
    <div class="modal-body"><br>
      Email-id:<input type="text"><br><br>
	  Password:<input type="password"><br>
	  <br>
    </div>
    <div class="modal-footer">
      <h3><input type="Submit" value="Submit"></h3>
    </div>
  </div>

</div>



</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<br><br>
<center>
<form>
<input type="button" class= button1 name="new" value="NEW">
<input type="button" class= button1 name="used" value="USED">
</form>
</center>
<br><br>


<center>

<input type="search" id="search" name="search" placeholder="Type the name of the car" size="40" class="input1" autocomplete="true" autosave="true">
<button type="submit" name="searchbtn" value="Search" class="input1" onclick="showCar();">Search</button>

</center>
</div>

<div id="inf"></div>

<div class="content">
<center><font style="font-size: 40px">Featured Cars</center>
<form align="center">
<input type="button" value="Just Launched Cars" name="lcars" class="button2">
<input type="button" value="Popular Cars" name="pcars" class="button2">
<input type="button" value="Upcoming Cars" name="ucars" class="button2">
</form>
<ul class="cb-slideshow">
    <li>
        <span><img src="1.jpg"></span>

    </li>
    <li>
        <span><img src="2.jpg"></span>

    </li>
    <li>
        <span><img src="3.jpg"></span>

    </li>
    <li>
        <span><img src="2.jpg"></span>

    </li>
</ul>




</div>

<center><video width="800" controls>
  <source src="Videos/baleno.mp4" type="video/mp4">
 <!--<source src="baleno.ogg" type="video/ogg">-->  
  Your browser does not support HTML5 video.
</video></center>



<div class="footer">
<p>Developed by ...</p>
</div>
</body>
</html>
