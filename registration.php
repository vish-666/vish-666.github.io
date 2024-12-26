<?php
require 'connection.php';
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message = $_POST['password'];
 $query = "INSERT INTO registration VALUES('$name', '$email', '$password','$phone')";
 mysqli_query($conn,$query);
 echo
 "
 <script> alert('Data Inserted Successfully'); </script>
 ";
}
?>