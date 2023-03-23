<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta name="description" content="" />
   <meta name="author" content="" />
   <title>HMS</title>
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-SGk+fcYwF7rNoxKiWeO7kZCK0oKbX65DvFprwjGSrmJItPjKpB7r+z/E89x0k/aV5Z3q5lXo5I0iyuLP7Vz/jw==" crossorigin="anonymous" />

   <link rel="stylesheet" href="style.css">
   <link href="css/styles.css" rel="stylesheet">
      <style media="screen">
      table {
border-collapse: collapse;
width: 100%;
margin-bottom: 20px;
}

th, td {
text-align: left;
padding: 8px;
}

th {
background-color: #005eff;
color: #fff;
}

tr:nth-child(even) {
background-color: #f2f2f2;
}

tr:hover {
background-color: #e2e2e2;
}

td {
border-bottom: 1px solid #ddd;
}
.appoint{
   margin: 50px 100px;
}

      </style>
   </head>
   <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">
         <div class="container">
            <a class="navbar-brand" href="#">Hospital Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                  class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a class="nav-link" aria-current="page" href="logout.php">Log Out</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="appoint">
         <h3 style="text-align:center;margin-bottom:50px;">List Of Reports</h3>

         <?php
         echo "php working";
         $connection = mysqli_connect('localhost','root','','se');
         echo "string";
         session_start();
         if(isset($_POST['send'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $request = "insert into contact(name, email, message) values('$name','$email','$message')";
          mysqli_query($connection, $request);
          header("Location:success.html");
          exit();
         }else{
            echo 'something went wrong please try again!';
         }
         ?>
      </div>

</body>
</html>
