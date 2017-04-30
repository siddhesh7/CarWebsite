<?php

$q = $_GET['q'];
$price = $_GET['price'];
$owner = $_GET['owner'];
$transmission = $_GET['transmission'];
$age = $_GET['age'];
$city= $_GET['city'];

//echo $price, $owner, $transmission, $age;

$con = mysqli_connect('localhost','root','','ajaxexp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//Fuel
if($q=="all")
{
	$q1=1;
}
else
{
	$a="'$q'";
	$q1="Fuel=".$a;
}

//Transmission
if($transmission=="all")
{
	$transmission1=1;
}
else
{
	$a="'$transmission'";
	$transmission1="Transmission=".$a;
}


//Owner
if($owner=="all")
{
	$owner1=1;
}
else
{
	$a="'$owner'";
	$owner1="Owner=".$a;
}

//City
if($city=="all")
{
	$city1=1;
}
else
{
	$a="'$city'";
	$city1="Location=".$a;
}

//Price
if($price=="all")
{
	$price1=1;
}
else
{
	if($price!="g20")
	{
		$p1=substr($price,0,1);
		$p2=substr($price,2);
		$price1="Price BETWEEN ".$p1." AND ".$p2;
	}
	else
	{
		$p1=substr($price, 1);
		$price1="Price >= ".$p1;
	}
}

//echo $price1;
//echo $a;
mysqli_select_db($con,"ajaxexp");
//$sql="SELECT * from used_cars where ".$q1;


$sql="SELECT * from used_cars where ".$q1." and ".$transmission1." and ".$owner1." and ".$city1." and ".$price1;//."and".$owner1;
//$sql="SELECT * from used_cars where '".$q1."'";
//$sql="SELECT * FROM used_cars WHERE Fuel = '".$q."'";
//$sql="SELECT * FROM used_cars WHERE Fuel = '".$q."'";
//echo $sql;
$result = mysqli_query($con,$sql);
/*
$count=mysqli_affected_rows($result);
echo"<script>";
echo alert("No of Cars Available : "+$count);
echo"</script>";
*/
//$dc="";
//echo "<table border='1'>";

while($row = mysqli_fetch_array($result)) {
    $arr[]=$row;
/*
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

echo "</tr>";
*/
//$dc=$dc+ $row['Fuel']+ "\n" ;
}

if(empty($arr)){
    echo(json_encode("No such Cars Found"));
}
else{
    echo (json_encode($arr));
}
//echo "hello all diesel cars available";
//echo "</table>";
//mysqli_close($con);
?>