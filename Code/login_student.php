<?php
 session_start();
 if(isset($_SESSION['auth']))
 	$UserAuth = $_SESSION['auth'];
 if(isset($UserAuth))
  header('Location: student_hp.php');
 else
  session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(https://media.istockphoto.com/photos/abstract-blue-background-with-grunge-texture-and-white-geometric-and-picture-id1293539824?b=1&k=20&m=1293539824&s=170667a&w=0&h=GnQ_AHJ4ob3B0K_nc-l-Ihiff9gWqnNkfLpWYpz0M9U=);background-repeat: no-repeat;background-size: cover; ;">
<div class="content">
  <div class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6  col-md-4 col-lg-4"> <img src="img/logo.png" alt="Exam Cell Automation" title="Exam Cell Automation"/> </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
    <div class="page_content">
  <?php
  include_once 'db\DatabaseConnect.php';
  include_once 'classes\person.php';
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Authentication error..! Please check your username and password.</div>';

  ?>
    <div class="container-fluid">
      <div class="row" style="width: 80%; margin-left: 160px; padding: 0px 50px 100px 50px;">
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          <form action="login_act_stu.php" method="post" enctype="application/x-www-form-urlencoded" style="padding: 50px 30px 25px 50px; background-color:rgba(0,0,255,0.1);  border: 4px outset white;">
            <div class="form-group row" style="padding: 0px 20px 20px 30px; ">
              <label for="input_no_of_exam_days" class="col-sm-3 form-control-label" style="padding-right: 150px;color:wheat;font-size:25px;">Username</label>
              <div class="col-sm-9"  style="width: 50%";>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required">
              </div>
            </div>
            <div class="form-group row" style="padding: 0px 20px 20px 30px; ">
              <label for="input_no_of_classes" class="col-sm-3 form-control-label" style="padding-right: 150px;color:wheat;font-size:25px;">Password</label>
              <div class="col-sm-9" style="width: 50%";>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
              </div>
            </div>
            <center>
              <div class="form-group row">
                <input class="btn btn-warning" type="reset" value="Reset" name="Reset"/>
                <input class="btn btn-success" type="submit" value="Submit" name="Submit"/>
              </div>
            </center>
          </form>
        </div>
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
      </div>
    </div>
  </div>
<?php include_once('footer_student.php');?>