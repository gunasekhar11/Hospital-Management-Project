<?php
//echo "php working";
$connection = mysqli_connect('localhost','root','','book');
session_start();
if(isset($_POST['send'])){
   // echo " if success";
   $email = $_REQUEST['email'];
   $pwd = $_REQUEST['pwd'];
   $sql="SELECT * FROM register";
   $res=mysqli_query($connection,$sql);
   $no_of_rows=mysqli_num_rows($res);
   if ($no_of_rows>0){
      echo "<table border='1'>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            </tr>";
   //   echo " nested if working";
      while ($row=mysqli_fetch_assoc($res)){
         echo "<tr>";
         echo "<td>" . $row['email'] . "</td>";
         echo "<td>" . $row['pwd'] . "</td>";
         echo "</tr>";
      }
      echo "</table>";
   }
}
 ?>
