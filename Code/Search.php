
<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Login.css">

</head>
<body style="background-image: url(https://wallpaperaccess.com/full/1611220.jpg);background-repeat: no-repeat;background-size: cover; ">
<?php include_once('header.php'); ?>
  <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Its invalid entry.</div>';
  ?>  



<div class="login" style="background-color:rgba(255, 255, 0,0.3);margin-left: 450px; width: 600px;">
  <center>
    <fieldset class="f2">
    <h2>Id Search</h2>

    <div class="log">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"    >
         <div class="txt">
          <h4>Student ID : </h4><input class="ut" type="text" name="id" required>
          <h4>Semester : </h4><input class="pt" type="text" name="sem" required>
         </div>
         
        <?php
         include_once "db/DatabaseConnect.php";
         include_once "classes/student.php";
         include_once "classes/admin.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        	$Student=new student();
        	$Student->id=$_REQUEST['id'];
        	$Student->sem=$_REQUEST['sem'];
            $admin=new admin();
            $admin->Search($Student->id,$Student->sem);
        }
        error_reporting(E_ERROR | E_PARSE);
        $Student= new student();
        $Student->id=$_GET['id'];

        ?>
      


         <br><a href="MarksheetFill.php?id=<?php echo $Student->id ?>"><button class="lb" name="Search">Search</button></a><br><br>

       </form>
    </div>
    </fieldset>
  </center>
</div>

    </body>
    </html>