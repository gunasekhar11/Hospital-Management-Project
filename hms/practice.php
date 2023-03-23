<?php
   echo "php working";
   $connection = mysqli_connect('localhost','root','','book');
   session_start();
   if(isset($_POST['send'])){
      echo " if success";

      $email = $_REQUEST['email'];
      $pwd = $_REQUEST['pwd'];
      $sql="SELECT * FROM register";
      $res=mysqli_query($connection,$sql);
      $no_of_rows=mysqli_num_rows($res);
      if ($no_of_rows>0){
         echo " nested if working";
         while ($row=mysqli_fetch_assoc($res)){
            if($row['email']==$email)
            {
                echo "email checked";
                    if($row['pwd']==$pwd)
                    {
                     header("Location:entry.html");
                     exit();
                  }
            }
         }
      }
   }
   else {
      echo " if failed";
   }
?>
