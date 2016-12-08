<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "xhc";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT password FROM xhc where bikeNum = '$_GET[bikeNum]' " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo  $row["password"];
    }
} else {
    echo "OPS！未找到";
}
$conn->close();
?>