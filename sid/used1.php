<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Used</title>
</head>
<body>

<div class="header2">
	<h1>Used Cars</h1>
</div>

<div class="nav">
<table width=100%>
<tr>

<td><center>Price:
	<select name="price" >
	<option value="l2">less than 2L</option>
	<option value="2-5">2L-5L</option>
	<option value="5-10">5L-10L</option>
	<option value="10-20">10L-20L</option>
	<option value="g20">greater than 20L</option>	
</select> 
</center></td>

<td><center>Fuel:
	<select name="fuel" >
	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="Cng">Cng</option>
	<option value="Lpg">Lpg</option>	
</select> 
</center></td>

<td><center>KMs Driven;
	<select name="kms" >
	<option value="l20">less than 20k</option>
	<option value="20t30">20k to 30k</option>
	<option value="30t40">30k to 40k</option>
	<option value="40t50">40k to 50k</option>	
	<option value="50t60">50k to 60k</option>	
	<option value="g60">greater than 60k</option>	
</select> 
</center></td>
<td><center>Age:
	<select name="age" >
	<option value="1t2">1 - 2 years</option>
	<option value="2t4">2 - 4 years</option>
	<option value="4t6">4 - 6 years</option>
	<option value="6t8">6 - 8 years</option>	
	<option value="g8">greater than 8 years</option>	
</center></td>

<td><center>Transmission:
	<select name="transmission">
	<option value="manual">Manual</option>
	<option value="automatic">Automatic</option>
</center></td>

<td><center>No Of Owners:
	<select name="noOfOwners">
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
<form action="" method="get">
<label for="loc"> Enter Your Location :</label><br><br>
<input type="location" name="loc" placeholder="city">
<br><br><br>
<label for="brand">Select the brand :</label><br><br>
<select multiple name="brand">
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

<select name="certi">
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

<div class="container2" style="float: center;">
<table border="1px">

<tr>
<td><center><img src="b1.jpg" alt="Sorry No Image Available" width="300"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
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
</div>
</div>


<div class="footer">
	Developed by Siddhesh Hindalekar and Team
</div>
</body>
</html>
