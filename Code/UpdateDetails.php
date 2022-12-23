<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
   <link rel="stylesheet" href="css/home.css">
   <style>
     .abc
     {
        background-image: url("https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80");
        background-repeat: no-repeat;
        background-position: center;
      }
   </style>
</head>
<body style="background-image: url(https://media.istockphoto.com/photos/abstract-blue-background-with-grunge-texture-and-white-geometric-and-picture-id1293539824?b=1&k=20&m=1293539824&s=170667a&w=0&h=GnQ_AHJ4ob3B0K_nc-l-Ihiff9gWqnNkfLpWYpz0M9U=);background-repeat: no-repeat;background-size: cover; ;">

<?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];

?>
  
<nav class="navbar" style="width: 100%">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="student_hp.php?id=<?php echo $Student->id ?>">HOME</a></li>
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>
<center>
<div class="abc">
<?php

           include_once "db/DatabaseConnect.php";
           include_once 'classes/student.php';

             $id=$_GET['id'];
               $Student = new student();
               $Student->id=$id;
               $Student->EditDetails($Student->id);                
               
               


?>
</center>
</div>
</div>
</body>
</html>