<?php

$con=mysqli_connect("localhost","root","","ecommerce");
	 
		 $email=$_POST['email'];
		 $password=$_POST['password'];
		 
		 $data=mysqli_query($con,"SELECT * FROM sign WHERE email='$email' and password='$password'");
           
		 $check=mysqli_num_rows($data);
		 
		   if($check == 0)
		     {	 
		        header ("location:login.php");
		      }
		       else
		       {
			     $row=mysqli_fetch_assoc($data); 
		           session_start();
		   
			      $_SESSION['id']=$row['id'];
			 
			
                  $_SESSION['firstname']=$row['firstame'];
                  $_SESSION['email']=$row['Email'];
		           header ("location:New folder/index.html");
		        }	 
	 
	 ?>
