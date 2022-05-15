<?php
   $fullName = $_POST['fullname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   //Database Connection
   $conn = new mysqli('localhost','root','','booksrusdb');
   if($conn->connect_error){
   	die('Connection Failed : '.$conn->connect_error);
   }else{
   	$stmt = $conn->prepare("insert into registration(username,email,password) values(?,?,?)");
   	$stmt->bind_param("sss",$fullName,$email,$password);
   	$stmt->execute();
   	echo "Registration Successful...";
   	$stmt->close();
   	$conn->close();
   }
?>