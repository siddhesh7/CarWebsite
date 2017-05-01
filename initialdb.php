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
$img1=$row['Image'];
echo "<td><center><img src=Images/". $row['Image'] . " width='400' alt='sorry no Image Available'></img></center></td>";
//echo "<td><center><img src=Images/". $img1 . " width='400' alt='sorry no Image Available'></img></center></td>";
$name=$row['Name'];
$price=$row['Price'] ;
$model=$row['Model'];
$mileage=$row['Mileage'];
$fuel=$row['Fuel'];
$seller=$row['Seller'];
$owner=$row['Owner'];
$transmission=$row['Transmission'];
$location=$row['Location'];
$manufacturingyear=$row['Manufacturingyear'];
$kms=$row['kmsDriven'];
$contact=$row['phone_number'];



echo "<td width='60%'> Name : ".$name."<br>";
echo "Price : ".$price."L<br>";
echo "Model : ".$model."<br>";
echo "Mileage : ".$mileage."<br>";
echo "Fuel : ".$fuel."<br>";
echo "Seller : ".$seller."<br>";
echo "Owner : ".$owner."<br>";
echo "Transmission : ".$transmission."<br>";
echo "Location : ".$location."<br>";
echo "Manufacturing Year : ".$manufacturingyear."<br>";
echo "KMs Driven : ".$kms."<br>";
echo "Contact : ".$contact."<br>";
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