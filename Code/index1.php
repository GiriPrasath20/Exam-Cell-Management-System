<head>
  <style>
      .month {
  padding: 70px 25px;
  margin: auto;
  width: 100%;
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

<?php include_once('header.php'); ?>
  <div class="page_content">
  <?php
  //Printing Invalid input
  if(isset($_GET['error']))
   echo '<div class="alert alert-danger text-center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>Oops..!</b> Its invalid entry.</div>';
  ?>
  <body style="background-image: url(https://wallpaperaccess.com/full/1611220.jpg);background-repeat: no-repeat;background-size: cover; ">
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
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
        <div class="col-xs-12 col-sm-10  col-md-8 col-lg-8">
          
        </div>
        <div class="hidden-xs col-sm-1  col-md-2 col-lg-2"> </div>
      </div>
    </div>
  </div>
<?php include_once('footer.php');