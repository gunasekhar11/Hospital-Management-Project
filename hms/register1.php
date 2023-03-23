<?php
$connection = mysqli_connect('localhost','root','','se');
session_start();
if(isset($_POST['send'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 $who = $_POST['who'];
 echo $who;
 $request = "insert into register(name, email, password, cpassword, who) values('$name','$email','$password','$cpassword','$who')";
 mysqli_query($connection, $request);
 header("Location:success1.html");
 exit();
}else{
   echo 'something went wrong please try again!';
}
?>
