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
background-color: #61b8c3;
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

      <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
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
         <h3 style="text-align:center;margin-bottom:50px;">List Of Patients</h3>
         <?php
         $connection = mysqli_connect('localhost','root','','se');
         session_start();
         if(isset($_POST['send'])){
         $sql="SELECT * FROM register Where who = 'Patient'";
         $res=mysqli_query($connection,$sql);
         $no_of_rows=mysqli_num_rows($res);
         if ($no_of_rows>0){
            echo "<table border='1'>
                  <tr>
                  <th>Name</th>
                  <th>Email</th>
                  </tr>";
         //   echo " nested if working";
            while ($row=mysqli_fetch_assoc($res)){
               echo "<tr>";
               echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['email'] . "</td>";
               echo "</tr>";
            }
            echo "</table>";
         }
         ?>
         <h3 style="text-align:center;margin-bottom:50px;">List Of Doctors</h3>
         <?php
         $sql1="SELECT * FROM register Where who = 'Doctor'";
         $res1=mysqli_query($connection,$sql1);
         $no_of_rows1=mysqli_num_rows($res1);
         if ($no_of_rows1>0){
            echo "<table border='1'>
                  <tr>
                  <th>Name</th>
                  <th>Email</th>
                  </tr>";
         //   echo " nested if working";
            while ($row1=mysqli_fetch_assoc($res1)){
               echo "<tr>";
               echo "<td>" . $row1['name'] . "</td>";
               echo "<td>" . $row1['email'] . "</td>";
               echo "</tr>";
            }
            echo "</table>";
         }
         ?>
         <h3 style="text-align:center;margin-bottom:50px;">List Of Admins</h3>
         <?php
         $sql2="SELECT * FROM register Where who = 'Admin'";
         $res2=mysqli_query($connection,$sql2);
         $no_of_rows2=mysqli_num_rows($res2);
         if ($no_of_rows2>0){
            echo "<table border='1'>
                  <tr>
                  <th>Name</th>
                  <th>Email</th>
                  </tr>";
         //   echo " nested if working";
            while ($row2=mysqli_fetch_assoc($res2)){
               echo "<tr>";
               echo "<td>" . $row2['name'] . "</td>";
               echo "<td>" . $row2['email'] . "</td>";
               echo "</tr>";
            }
            echo "</table>";
         }

         }
          ?>
      </div>

</body>
</html>
