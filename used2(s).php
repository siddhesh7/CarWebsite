<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="used.css">
<link href="https://fonts.googleapis.com/css?family=Audiowide|Righteous" rel="stylesheet">

<title>Used Cars</title>

<script>
var price="all",fuel="all",kms="all",age="all",transmission="all",seller="all",owner="all";
function showPrice(str) {
  var xhttp;    
  if (str == "all") {
    document.getElementById("txtHint").innerHTML = "";
    return;
}
    var price=str;
}

function showFuel(str) {
  var xhttp;    
    
    var fuel=str;
    exec(price,fuel,kms,age,transmission,seller,owner);
}

function showKms(str) {
  var xhttp;    
    var kms=str;
    exec(price,fuel,kms,age,transmission,seller,owner);
}

function showAge(str) {
  var xhttp;    
    var age=str;
    exec(price,fuel,kms,age,transmission,seller,owner);

}

function showTransmission(str) {
  var xhttp;    
  
    var transmission=str;
    exec(price,fuel,kms,age,transmission,seller,owner);

}

function showOwners(str) {
  var xhttp;    
    
    var owner=str;
    exec(price,fuel,kms,age,transmission,seller,owner);

}


function exec(price1,fuel1,kms1,age1,transmission1,seller1,owner1)
{
  var price=price1;
  var fuel=fuel1;
  var kms=kms1;
  var age=age1;
  var transmission=transmission1;
  var seller=seller1;
  var owner=owner1;

  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var s= this.responseText;
      alert(s);
      var ss=JSON.parse(s);
      alert(ss);
      var uid=[];
     var    name=[];
  var model=[];
       var price=[];
       var mileage=[];
       var fuel=[];
       var seller=[];
       var owner=[];
       var transmission=[];
       var location=[];
      //Image=[];

      document.getElementById("showDetails").innerHTML="";
      $.each(ss,function(i,item){
      uid[i]=item.ucid;
      name[i]=item.Name;
      price[i]=item.Price;
      model[i]=item.Model;
      mileage[i]=item.Mileage;
      fuel[i]=item.Fuel;
      seller[i]=item.Seller;
      owner[i]=item.Owner;
      transmission[i]=item.Transmission;
      location[i]=item.Location;
      //Image[i]=item.Image;

      });
      var i;
      var data=""+"<table>";
 for( i=0;i<uid.length;i++){
       data=data+name[i]+"<br>"+price[i]+"<br>"+model[i]+"<br>"+mileage[i]+"<br>"+fuel[i]+"<br>"+seller[i]+"<br>"+owner[i]+"<br>"+transmission[i]+"<br>"+location[i];
    }
    
    var info="";
    info=info+"<table class='"+"container2"+"' border:'"+'1'+"'><tr><td>"+data+"</td></tr></table>"
    $("#showDetails").empty();
      $("#showDetails").append(data);
    }
  };

  //xhttp.open("GET", "getData.php?q="+fuel+"&age="+age+"&trans="+transmission+"&owner="+owner+"&kms="+kms+"&price="+price, true);
  xhttp.open("GET", "getData.php?q="+fuel+"&price="+price+"&kms="+kms+"&age="+age+"&transmission="+transmission+"&seller="+seller+"&owner="+owner, true);

  xhttp.send();
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>


</head>
<body>

<div class="header2">
	<h1>Used Cars</h1>

<nav>
  <ul>
    <li><a href="ajaxexp.php">Home</a></li>
    <li>Used Cars</li>
    <li>New Cars</li>
  </ul>
</nav></div>
<br>
<div class="nav">
<table width=100%>
<tr>

<td><center>Price:
	<select name="price" onchange="showPrice(this.value)">
	<option value="all">All</option>
	<option value="l2">less than 2L</option>
	<option value="2-5">2L-5L</option>
	<option value="5-10">5L-10L</option>
	<option value="10-20">10L-20L</option>
	<option value="g20">greater than 20L</option>	
</select> 
</center></td>

<td><center>Fuel:
	<select name="fuel" onchange="showFuel(this.value)">
	<option value="all">All</option>
	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="Cng">Cng</option>
	<option value="Lpg">Lpg</option>	
</select> 
</center></td>

<td><center>KMs Driven:
	<select name="kms" onchange="showKms(this.value)">
	<option value="all">All</option>
	<option value="l20">less than 20k</option>
	<option value="20t30">20k to 30k</option>
	<option value="30t40">30k to 40k</option>
	<option value="40t50">40k to 50k</option>	
	<option value="50t60">50k to 60k</option>	
	<option value="g60">greater than 60k</option>	
</select> 
</center></td>
<td><center>Age:
	<select name="age" onchange="showAge(this.value)">
	<option value="all">All</option>
	<option value="1t2">1 - 2 years</option>
	<option value="2t4">2 - 4 years</option>
	<option value="4t6">4 - 6 years</option>
	<option value="6t8">6 - 8 years</option>	
	<option value="g8">greater than 8 years</option>	
</center></td>

<td><center>Transmission:
	<select name="transmission" onchange="showTransmission(this.value)">
	<option value="all">All</option>
	<option value="manual">Manual</option>
	<option value="automatic">Automatic</option>
</center></td>

<td><center>No Of Owners:
	<select name="noOfOwners" onchange="showOwners(this.value)">
	<option value="all">All</option>
	<option value="1">1 </option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>	
	<option value="g4">more than 4</option>	
</center></td>

</tr>
</table>

</div>

<div class="container1">
<div class="confilter1" style="float: left; width: 20%">
<form action="" method="get"><br>
<label for="loc"> Enter Your Location :</label><br><br>
<input type="location" name="loc" placeholder="city" class="inp">
<br><br><br>
<label for="brand">Select the brand :</label><br><br>
<select multiple name="brand" class="inp">
	<option value="maruti">Maruti Suzuki</option>
	<option value="hyundai">Hyundai</option>
	<option value="toyota">Toyota</option>
	<option value="cheverolet">Cheverolet</option>	
	<option value="ford">Ford</option>
	<option value="volkswagon">VolksWagon</option>
	<option value="renault">Renault</option>
	<option value="skoda">Skoda</option>	
	<option value="mahindra">Mahindra </option>
	<option value="landrover">Landrover</option>
	<option value="mercedes">Mercedes</option>
	<option value="audi">Audi</option>	
	<option value="bmw">BMW</option>	
	
</select><br><br><br>
<label for="certi">Show :</label><br><br>

<select name="certi" class="inp">
	<option value="all">All Cars</option>
	<option value="certified">Certified Cars</option>
	</select>

</div>

<!--
<div class="container2" style="float: right;">

<div style="float: left">
<img src="b1.jpg" alt="Sorry No Image Available">
</div>

<div style="float: right">
<h2>CarName</h2> <br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</div>

</div>
-->

<div class="container2" style="float: center;" id="showDetails">
<?php include('initialdb.php') ?>
<!--
<?php
$con=mysqli_connect("localhost","root","","ajaxexp");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM used_cars");
/*$count=mysqli_affected_rows($result);
echo"<script>";
echo alert("No of Cars Available : "+$count);
echo"</script>";
*/
echo "<table border='1'>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><center><img src=" . $row['Image'] . " width='400' alt='sorry no Image Available'></img></center></td>";
$name=$row['Name'];
$price=$row['Price'] ;
$model=$row['Model'];
$mileage=$row['Mileage'];
$fuel=$row['Fuel'];
$seller=$row['Seller'];
$owner=$row['Owner'];
$transmission=$row['Transmission'];
$location=$row['Location'];

echo "<td width='60%'> Name : ".$name."<br>";
echo "Price : ".$price."L<br>";
echo "Model : ".$model."<br>";
echo "Mileage : ".$mileage."<br>";
echo "Fuel : ".$fuel."<br>";
echo "Seller : ".$seller."<br>";
echo "Owner : ".$owner."<br>";
echo "Transmission : ".$transmission."<br>";
echo "Location : ".$location."<br>";
echo "</td>";

/*echo "<td width='60%>" . $row['Name'] . "</td>";
echo "<td width='60%>" . $row['Price'] . "</td>";
echo "<td width='60%'>" . $row['Model'] . "</td>";
echo "<td width='60%'>" . $row['Mileage'] . "</td>";
echo "<td width='60%'>" . $row['Fuel'] . "</td>";
echo "<td width='60%'>" . $row['Seller'] . "</td>";
echo "<td width='60%'>" . $row['Owner'] . "</td>";
echo "<td width='60%'>" . $row['Transmission'] . "</td>";
echo "<td width='60%'>" . $row['Location'] . "</td>";
*/

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


<!--
/*
<table class="table1" border="1px">

<tr>
<td><center><img src="b1.jpg" alt="Sorry No Image Available" width="300"></center></td>
<td width="60%"><center><h2>Maruti Suzuki Baleno</h2><br>
<b>Variant : </b><i>Delta </i><br>
<b>Fuel type : </b><i>Petrol </i><br>
<b>KMs Driven :</b><i>43000 KMs</i><br>
<b>Owner :</b><i>1<sup>st</sup>Owner</i>

</center>
</td>
</tr>

<tr>
<td><center><img src="b2.jpg" alt="Sorry No Image Available" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="b3.jpg" alt="Sorry No Image Available" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="b4.jpg" alt="Sorry No Image Available" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>


</table>
*/-->

</div>
</div>


<div class="footer">
	Developed by Siddhesh Hindalekar and Team
</div>
</body>
</html>
