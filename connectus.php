<?php

$con= mysqli_connect('localhost','root');
if($con){
	echo "<h2 >THANK YOU!!!</h2>";
	echo "<h3>We will reach you soon . . . </h3>";
}
else{
	echo "not connected";
}

mysqli_select_db($con,'webifly_db');


 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $comment=$_POST['comment'];

$query="insert into  webifly(name, email, phone, comment) values ('$name','$email',' $phone',' $comment')";


mysqli_query($con,$query);

?>
