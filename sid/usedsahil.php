<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Used</title>
<style>
ul{ padding: 0;}
li {
	display: inline;
	padding-top: 10px;
	margin: 0;
}
@media screen and (max-width: 480px) {
 
li {
	margin: 0;
	display: block;
}

.w3-responsive{overflow-x:auto}
.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:95%;}
.w3-col.s1{width:8.33333%}.w3-col.s2{width:16.66666%}.w3-col.s3{width:24.99999%}.w3-col.s4{width:33.33333%}
.w3-col.s5{width:41.66666%}.w3-col.s6{width:49.99999%}.w3-col.s7{width:58.33333%}.w3-col.s8{width:66.66666%}
.w3-col.s9{width:74.99999%}.w3-col.s10{width:83.33333%}.w3-col.s11{width:91.66666%}.w3-col.s12{width:99.99999%}
@media (min-width:601px){.w3-col.m1{width:8.33333%}.w3-col.m2{width:16.66666%}.w3-col.m3,.w3-quarter{width:24.99999%}.w3-col.m4,.w3-third{width:33.33333%}
.w3-col.m5{width:41.66666%}.w3-col.m6,.w3-half{width:49.99999%}.w3-col.m7{width:58.33333%}.w3-col.m8,.w3-twothird{width:66.66666%}
.w3-col.m9,.w3-threequarter{width:74.99999%}.w3-col.m10{width:83.33333%}.w3-col.m11{width:91.66666%}.w3-col.m12{width:99.99999%}}
@media (min-width:993px){.w3-col.l1{width:8.33333%}.w3-col.l2{width:16.66666%}.w3-col.l3{width:24.99999%}.w3-col.l4{width:33.33333%}
.w3-col.l5{width:41.66666%}.w3-col.l6{width:49.99999%}.w3-col.l7{width:58.33333%}.w3-col.l8{width:66.66666%}
.w3-col.l9{width:74.99999%}.w3-col.l10{width:83.33333%}.w3-col.l11{width:91.66666%}.w3-col.l12{width:99.99999%}}




</style>

</head>
<body>


	

<div class ="w3-row">
<h1>Used Cars</h1>

<ul style="list-style:none">
<li>Price:
	<select name="price" >
	<option value="l2">less than 2L</option>
	<option value="2-5">2L-5L</option>
	<option value="5-10">5L-10L</option>
	<option value="10-20">10L-20L</option>
	<option value="g20">greater than 20L</option>	
</select> 
</li>


<li>Fuel:
	<select name="fuel" >
	<option value="Petrol">Petrol</option>
	<option value="Diesel">Diesel</option>
	<option value="Cng">Cng</option>
	<option value="Lpg">Lpg</option>	
</select> 
</li>


<li>KMs Driven;
	<select name="kms" >
	<option value="l20">less than 20k</option>
	<option value="20t30">20k to 30k</option>
	<option value="30t40">30k to 40k</option>
	<option value="40t50">40k to 50k</option>	
	<option value="50t60">50k to 60k</option>	
	<option value="g60">greater than 60k</option>	
</select> 
</li>

<li>Age:
	<select name="age" >
	<option value="1t2">1 - 2 years</option>
	<option value="2t4">2 - 4 years</option>
	<option value="4t6">4 - 6 years</option>
	<option value="6t8">6 - 8 years</option>	
	<option value="g8">greater than 8 years</option>	
	</select>
</li>

<li>Transmission:
	<select name="transmission">
	<option value="manual">Manual</option>
	<option value="automatic">Automatic</option>
	</select>

</li>

<li>No Of Owners:
	<select name="noOfOwners">
	<option value="1">1 </option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>	
	<option value="g4">more than 4</option>	
	</select>
</li>

</ul>




</div>
<div class="w3-row">
<div class="w3-col s12 l12">
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
<td><center><img src="b6.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="b2.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="b3.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
<td width="60%"><center><h2>CarName</h2><br>
<h4>row1</h4>
<h4>row2</h4>
<h4>row3</h4>
<h4>row4</h4>
</center>
</td>
</tr>

<tr>
<td><center><img src="b4.jpg" alt="Sorry No Image Available" height="250" width="400"></center></td>
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
</div>
</div>
</div>

<div class="footer">
	Developed by Siddhesh Hindalekar and Team
</div>
</body>

</html>