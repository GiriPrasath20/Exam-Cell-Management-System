<!DOCTYPE html>
<html> 
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="css/add_student.css">
</head>
<<body style="background-image: url(https://wallpaperaccess.com/full/1611220.jpg);background-repeat: no-repeat;background-size: cover; ">

<?php include_once('header.php'); ?>
  <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Its invalid entry.</div>';
  ?>



<div class="registration">
<center>


<?php
include_once "db/DatabaseConnect.php";
include_once 'classes/admin.php';

$admin= new admin();
$admin->enterstudentinfo();

?>

<button class="add"><a href="db/add_studentSQL.php" onclick="window.open('mailto:mail@gmail.com');">add student</a></button>

</center>
 
 </div>


    </body>
    </html>
