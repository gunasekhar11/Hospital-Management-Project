<?php
echo "php working";
$connection = mysqli_connect('localhost','root','','se');
echo "string";
session_start();
if(isset($_POST['send'])){
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $reason = $_POST['reason'];
 $request = "insert into appoint(name, phone, reason) values('$name','$phone','$reason')";
 mysqli_query($connection, $request);
 header("Location:booked.html");
 exit();
}else{
   echo 'something went wrong please try again!';
}
?>
