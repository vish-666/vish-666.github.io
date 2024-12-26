<?php
 $servername ="localhost";
 $username = "root";
 $password = "";
 $database = "#";
 $conn = mysqli_connect($servername, $username, $password, $database);
 if(!$conn) {
 echo "Not connected". mysqli_connect_error($conn);
 }
?>