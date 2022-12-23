<!DOCTYPE html>
<html> 
<head>
  <title>Student Home Page</title>
  <link rel="stylesheet" href="css/st_home.css">
  <style>
      .jops
      {
        padding-top: 20px;
      }
      .jops button
      {
        background-color: black;
        margin-top: -90px;
        margin-left: 150px;
      }
      .month {
  padding: 70px 25px;
  margin: auto;
  width: 97%;
  background-color: CornflowerBlue;
  text-align: center;
}

/* Month list */
.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 30px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
  float: left;
  padding-top: 10px;
}

/* Next button */
.month .next {
  float: right;
  padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: gray;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: white;
  font-weight: bold;
  text-align: center;
}

/* Days (1-31) */
.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:16px;
  color: #777;
}

/* Highlight the "current" day */
.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}
  </style>
</head>
<body style="background-image: url(https://media.istockphoto.com/photos/abstract-blue-background-with-grunge-texture-and-white-geometric-and-picture-id1293539824?b=1&k=20&m=1293539824&s=170667a&w=0&h=GnQ_AHJ4ob3B0K_nc-l-Ihiff9gWqnNkfLpWYpz0M9U=);background-repeat: no-repeat;background-size: cover; ;">

  <?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
error_reporting(E_ERROR | E_PARSE);
$Student->id=$_GET['id'];

?>
<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="student_hp.php?id=<?php echo $Student->id ?>">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#">CONTACT US</a></li>
      <li><a href="logout_student.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>



     

     </div>
     <br>
     <br>
     <div style="margin: 5px; padding-left: 5px; align-content: center;">
  <div class="month">      
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <li>
        JANUARY<br>
        <span style="font-size:18px">2022</span>
      </li>
    </ul>
  </div>
  
  <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
  </ul>
  
  <ul class="days">  
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li>10</li>
    <li>11</li>
    <li><span class="active">12</span></li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    <li>31</li>
  </ul>
</div>
<div class="jops">

      <button class="pro"><a href="viewdetails.php?id=<?php echo $Student->id ?>">My Profile</a></button> 
    <button class="hall" style="margin-top:1%;"><a href="viewhallticket.php?id=<?php echo $Student->id ?>"> Hall ticket</a></button> 
      <button class="mark"><a href="viewmarksheet.php?id=<?php echo $Student->id ?>">My Marksheet</a></button>
    </body>
    </html>

