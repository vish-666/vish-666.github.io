<?php
require 'connection.php';
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $query = "INSERT INTO contact VALUES('$name', '$email', '$message')";
 mysqli_query($conn,$query);
 echo
 "
 <script> alert('Data Inserted Successfully'); </script>
 ";
}
?>