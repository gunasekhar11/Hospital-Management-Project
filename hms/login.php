<?php
   // echo "php working";
   $connection = mysqli_connect('localhost','root','','se');
   session_start();
   if(isset($_POST['send'])){
      // echo " if success";

      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $who = $_REQUEST['who'];
      echo $who;
      $sql="SELECT * FROM register";
      $res=mysqli_query($connection,$sql);
      $no_of_rows=mysqli_num_rows($res);
      if ($no_of_rows>0){
         // echo " nested if working";
         while ($row=mysqli_fetch_assoc($res)){

            if ($row['who']==$who) {
               if($row['email']==$email)
               {
                   // echo "email checked";
                       if($row['password']==$password)
                       {
                          if ($row['who']=='Patient') {
                             header("Location:book.html");
                             exit();
                          }
                          if ($row['who']=='Admin') {
                             header("Location:admin.html");
                             exit();
                          }
                          if ($row['who']=='Doctor') {
                             header("Location:doctor.html");
                             exit();
                          }
                     }else {
                        echo "Please Check Your Email And Password";
                        echo "<br>";
                     }
               }else {
                  echo "Please Check Your Email And Password";
                  echo "<br>";
               }
            }
            else {
               header("Location:fail.html");
            }
         }
      }
   }
   else {
      echo " if failed";
      echo "<br>";
   }
?>
