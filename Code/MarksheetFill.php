<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Markfill.css">

</head>
<body style="background-image: url(https://wallpaperaccess.com/full/1611220.jpg);background-repeat: no-repeat;background-size: cover; ">
 
<?php include_once('header.php'); ?>
  <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Its invalid entry.</div>';
  ?>





    <center>
<?php include_once "db/DatabaseConnect.php";
           include_once 'classes/admin.php';
           include_once 'classes/student.php';

             $id=$_GET['id'];
               $Student = new student();
               $Student->id=$id;
               $admin=new admin();
               $admin->FillMarksheet($Student->id);
        ?>          
             
</center>
 





</body>
</html>



  







