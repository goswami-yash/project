<?php

$con=mysqli_connect("localhost","root","","ecommerce");
	 
	 
		 $firstname=$_POST['firstname'];
		 $lastname=$_POST['lastname'];
		 $email=$_POST['email'];
		 $number=$_POST['number'];
		 $password=$_POST['password'];
		 $con_password=$_POST['con_password'];
		  $abc="INSERT INTO sign VALUES (NULL ,'$firstname', '$lastname', 
		  '$email', '$number', '$password', '$con_password')";
           $qul=(mysqli_query($con,$abc));
		 header ("location:signin.php");
		 ?>