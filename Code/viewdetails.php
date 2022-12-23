<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
	 <link rel="stylesheet" href="css/login.css">
  
</head>
<body style="background-image: url(https://media.istockphoto.com/photos/abstract-blue-background-with-grunge-texture-and-white-geometric-and-picture-id1293539824?b=1&k=20&m=1293539824&s=170667a&w=0&h=GnQ_AHJ4ob3B0K_nc-l-Ihiff9gWqnNkfLpWYpz0M9U=);background-repeat: no-repeat;background-size: cover; ;">

<?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];

?>  


  <nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="student_hp.php?id=<?php echo $Student->id ?>">HOME</a></li>
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout_student.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>
<center><br><br><br><br><br>
  <?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];
$Student->ViewDetails($Student->id);
?>
  <br><br><br>
  <a style="text-decoration: none;background-color: black; color: white" href="UpdateDetails.php?id=<?php echo $Student->id ?>"><button class="lb">UPDATE</button></a>
  
  
         
  </center>


  </body>
  </html>


