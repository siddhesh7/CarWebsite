<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','root','','ajaxexp');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajaxexp");
$sql="SELECT * FROM used_cars WHERE Fuel = '".$q."'";
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
    echo(json_encode(false));
}
else{
    echo (json_encode($arr));
}
//echo "hello all diesel cars available";
//echo "</table>";
//mysqli_close($con);
?>