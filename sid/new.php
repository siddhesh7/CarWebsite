<!DOCTYPE html>
<html lang="en-us">
<head>
<style>

.container {
  position: relative;
  width: 50%;
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
position: absolute;
    top: 0px;
    left: 0px;
padding-left:0px;
border-radius:8px;
}



.car {
 
   margin: 10px;
   padding: 100px;
   padding-left:500px;
   padding-top:10px;
   max-width: 500px;
   height: 150px;
   border: 1px solid black;
   background-color:yellow;
}   

.button {
    background-color: #0000ff; 
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {padding: 10px 24px;}


img {
position: absolute;
    top: 108px;
    left: 50px;
padding-left:0px;
border-radius:8px;



    
}


</style>
</head>


<body>


<h1>New Cars</h1>



<div class="car">
<img src="baleno1.jpg"  width="350" height="220">
  <h2>Maruti Suzuki Baleno</h2>
  <p>5.43 Lakhs onwards</p>
 <button type="button" onclick="alert('Maruti Suzuki Baleno Selected')">Check onroad price!</button>
 <button onclick="myFunction()">View Images</button>
 <button class="button button1">Car Details</button>
 
<p id="bal"></p>
</div>

<div class="car">
<!--<img src="figo.jpg"  width="300" height="200">-->
  <h2>Ford Figo</h2>
  <p>4.73 Lakhs onwards</p> 
  <button type="button" onclick="alert('Ford Figo Selected')">Check onroad price!</button>
   <button onclick="myFunction1()">View Images</button>
  <button class="button button1">Car Details</button>
 
<p id="figo"></p>
</div>

<div class="car">
<!--<img src="renault.jpg"  width="350" height="220">-->
  <h2>Mahindra Renault Logan</h2>
  <p>4.86 Lakhs onwards</p>
  <button type="button" onclick="alert('Mahindra Renault Logan Selected')">Check onroad price!</button>
  <button onclick="myFunction2()">View Images</button>
  <button class="button button1">Car Details</button>
  
<p id="rena"></p>
</div>

<div class="car">
<!--<img src="ritz.jpg"  width="350" height="220">-->
  <h2>Maruti Suzuki Ritz</h2>
  <p>5.79 Lakhs onwards</p>
  <button type="button" onclick="alert('Maruti Suzuki Ritz')">Check onroad price!</button>
  <button onclick="myFunction3()">View Images</button>
  <button class="button button1">Car Details</button>
<p id="ritz"></p>
</div>

<script>

function myFunction() {
    document.getElementById("bal").innerHTML = "Baleno";
}

function myFunction1() {
    document.getElementById("figo").innerHTML = "Figo";
}


function myFunction2() {
    document.getElementById("rena").innerHTML = "Renault";
}


function myFunction3() {
    document.getElementById("ritz").innerHTML = "Ritz";
}
</script>




<div class="container">
  <img src="baleno2.jpg"  class="image">
  <div class="overlay">
    <img src="baleno1.jpg" class="text">
  </div>
</div>


</body>
</html>