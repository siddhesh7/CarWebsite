<html>

<title>New</title>
<center><div class="header2"><h1>NEW CARS</h1></div></center>
<head>
<link rel="stylesheet" type="text/css" href="used.css">
<style>
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container:hover .overlay {
  width: 100%;
  left: 0;
}

.text {
width:100%;
position: absolute;
    top: 0px;
    left: 0px;
	bottom:0px;
padding-left:0px;
padding-bottom:0px;
display:block;
}
</style>
</head>


</body>
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


<td><center>Transmission:
	<select name="transmission">
	<option value="manual">Manual</option>
	<option value="automatic">Automatic</option>
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


<div class="container2" style="float: center;">
<table border="1px">

<tr>


<td><center>
<div class="container">
  <img src="b6.jpg"  class="image"height="250" width="400">
  <div class="overlay">
  <img src="balenofinal.jpg" class="text" alt="Sorry No Image Available" height="250" width="400"></center>
	</td></div>
  
<td width="60%"><center><h2>Maruti Suzuki Baleno</h2><br>
<h4>Mileage(ARAI)kmpl:27.39 kmpl</h4>
<h4>Engine Displacement:1248 cc</h4>
<h4>BHP:74bhp@4000rpm</h4>
<h4>Torque:190Nm@2000rpm</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="alto.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>Maruti Suzuki Alto 800</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="cel.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>Maruti Suzuki Celerio</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="wag.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>Maruti Suzuki Wagon R 1.0</h2><br>
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



</body>
</html>