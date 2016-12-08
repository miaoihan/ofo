<?php
$con = mysqli_connect("localhost","root","123456","xhc");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO xhc (bikeNum, password)
VALUES
('$_POST[bikeNum]','$_POST[password]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysql_error());
  }
// echo "1 record added";
echo "success";
mysqli_close($con)
?>