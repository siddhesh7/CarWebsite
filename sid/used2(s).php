<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="used.css">
<link href="https://fonts.googleapis.com/css?family=Audiowide|Righteous" rel="stylesheet">

<title>Used Cars</title>

<script>
var price="all",fuel="all",kms="all",age="all",transmission="all",seller="all",owner="all",city="all",certified="all",type="all";
function showPrice(str) {
  var xhttp;    
    price=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}

function showFuel(str) {
  var xhttp;    
    fuel=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}

function showKms(str) {
  var xhttp;    
    kms=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}

function showAge(str) {
  var xhttp;    
    age=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);

}

function showTransmission(str) {
  var xhttp;    
    transmission=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);

}

function showOwners(str) {
  var xhttp;    
    owner=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);

}

function showCity(str) {
  var xhttp;    
    city=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}

function showSeller(str) {
  var xhttp;    
    seller=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}


function showCertified(str) {
  var xhttp;    
    certified=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}


function showType(str) {
  var xhttp;    
    type=str;
    exec(price,fuel,kms,age,transmission,seller,owner,city,certified,type);
}


function exec(price1,fuel1,kms1,age1,transmission1,seller1,owner1,city1,certified1,type1)
{
  price=price1;
  fuel=fuel1;
  kms=kms1;
  age=age1;
  transmission=transmission1;
  seller=seller1;
  owner=owner1;
  city=city1;
  certified=certified1;
  type=type1;

  xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var s= this.responseText;
      alert(s);
      var ss=JSON.parse(s);
      alert(ss);
      var uid=[];
      var  name=[];
      var model=[];
      var price=[];
      var mileage=[];
      var fuel=[];
      var seller=[];
      var owner=[];
      var transmission=[];
      var location=[];
      var manufacturingYear=[];
      var kms=[];
      var phoneNumber=[];
      var image=[];
      var type=[];
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
      manufacturingYear[i]=item.Manufacturingyear;
      kms[i]=item.kmsDriven;
      phoneNumber[i]=item.phone_number;
      image[i]=item.Image;
      type[i]=item.BodyType;

      });
      var i;
      //original code
      /*var data=""+"<table>";
 for( i=0;i<uid.length;i++){
       data=data+name[i]+"<br>"+price[i]+"<br>"+model[i]+"<br>"+mileage[i]+"<br>"+fuel[i]+"<br>"+seller[i]+"<br>"+owner[i]+"<br>"+transmission[i]+"<br>"+location[i]+"<br>"+manufacturingYear[i]+"<br>"+kms[i]+"<br>"+phoneNumber[i]+"<br><br>";
    }
*/
    //alert(image[i]);
    //var data=""+"<table>";
    //<style>td,th{padding:15px;}</style>

    var data="<table border='1'>";
 for( i=0;i<uid.length;i++){
       data=data+"<tr><td><center><img src=Images/"+image[i]+" width=400 alt='No Image Available'></img></center></td>"+"<td width='60%'>Name : <b>"+name[i]+"</b><br>Price :<b> "+price[i]+"Lacs</b>"+"<br>Model : <b>"+model[i]+"</b><br>Mileage : <b>"+mileage[i]+"</b><br>Fuel :<b> "+fuel[i]+"</b><br>Seller :<b> "+seller[i]+"</b><br>Owner : <b>"+owner[i]+"</b><br>Transmission : <b>"+transmission[i]+"</b><br>Location :<b> "+location[i]+"</b><br>Manufacture : <b>"+manufacturingYear[i]+"</b><br>KMs Driven :<b> "+kms[i]+"</b><br>Contact : <b>"+phoneNumber[i]+"</b><br><br>"+"</td></tr>";
    }
    data=data+"</table>";

    //var info="";
    //info=info+"<table class='"+"container2"+"' border:'"+'1'+"'><tr><td>"+data+"</td></tr></table>"
    $("#showDetails").empty();
      $("#showDetails").append(data);
    }
  };

  //xhttp.open("GET", "getData.php?q="+fuel+"&age="+age+"&trans="+transmission+"&owner="+owner+"&kms="+kms+"&price="+price, true);
  xhttp.open("GET", "getData.php?q="+fuel+"&price="+price+"&kms="+kms+"&age="+age+"&transmission="+transmission+"&seller="+seller+"&owner="+owner+"&city="+city+"&certified="+certified+"&type="+type, true);

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
	<option value="0-2">less than 2L</option>
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
	<option value="00t20">less than 20k</option>
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
	<option value="1st">1 </option>
	<option value="2nd">2</option>
	<option value="3rd">3</option>	
	<option value="g3">more than 3</option>	
</center></td>

<td><center>Type:
  <select name="type" onchange="showType(this.value)">
  <option value="all">All</option>
  <option value="Sedan">Sedan</option>
  <option value="Hatch Back">HatchBack</option>
  <option value="Suv">SUV</option>  
</center></td>

</tr>
</table>

</div>

<div class="container1">
<div class="confilter1" style="float: left; width: 20%">
<form action="" method="get"><br>
<label for="loc"> Enter Your Location :</label><br><br>
<!--<input type="location" name="loc" placeholder="city" class="inp">-->

<select name="city" style="width: 70%" onchange="showCity(this.value)">
<option value="all">All</option>
<option value="mumbai">Mumbai</option>
<option value="thane">Thane</option>
<option value="pune">Pune</option>
<option value="delhi">Delhi</option>
<option value="chennai">Chennai</option>
<option value="goa">Goa</option>
<option value="punjab">Punjab</option>
</select>

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
<select name="certi" class="inp" onchange="showCertified(this.value)">
	<option value="all">All Cars</option>
	<option value="certified">Certified Cars</option>
	</select>
<br><br><br>
  <label for="seller">Seller Type :</label><br><br>
  <select name="seller" class="inp" onchange="showSeller(this.value)">
  <option value="all">All</option>
  <option value="individual">Individual</option>
  <option value="Dealer">Dealer</option>
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

<div class="container2" style="float: center;overflow-x:auto;" id="showDetails">
<?php include('initialdb.php') ?>


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
