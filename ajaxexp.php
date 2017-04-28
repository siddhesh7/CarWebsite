<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<title>CAR</title>

<style type="text/css">
  #carInfo
{
    background-color: green;
    height:200px;
    padding: 40px;
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
    if (this.readyState==4 && this.status==200) {
      document.getElementById("carInfo").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","db1.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>

<body>

<div class="header">
<h1>Car Games</h1>


<div class="hbuttons">
<form >
<input type="button" name="new_top" value="NEW" class="hbuttons">
<a href="used1.php"><input type="button" name="used_top" value="USED" class="hbuttons"></a>
<input type="button" name="new_top" value="COMPARATOR" class="hbuttons">
</form>
</div>
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

<div id="carInfo">The info will be displayed here</div>

<div class="content">
<center><font style="font-size: 40px">Featured Cars</center>
<form align="center">
<input type="button" value="Just Launched Cars" name="lcars" class="button2">
<input type="button" value="Popular Cars" name="pcars" class="button2">
<input type="button" value="Upcoming Cars" name="ucars" class="button2">
</form>
</div>


<div class="footer">
<p>Developed by Siddhesh Hindalekar and Team</p>
</div>
</body>
</html>
