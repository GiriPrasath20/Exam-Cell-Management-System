<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php
include_once 'person.php';
include_once ('./db/DatabaseConnect.php');


class student extends person{
   public $FN;
   public $LN;
   public $PN;
   public $EA;
   public $Ad;
   public $Lvl;
   public $Sem;
   public $im;
   public $id;

function signup($FN,$LN,$EA,$PN,$Ad,$Lvl,$Sem,$im){
   
$sql = "INSERT INTO register (FirstName,LastName,EmailAddress,PhoneNumber,Address,Level,Semester,image)
VALUES ('$FN','$LN', '$PN' , '$EA' , '$Ad','$Lvl','$Sem','$im')";
$conn = $this->connect()->query($sql);
if ($conn == TRUE) {
    $message = "Registeration Done successfully! " . "Kindly Check your Mail for your id and password";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn;
}

}
function ViewDetails($username){
  $sql2 = "SELECT id FROM register WHERE id = '$username'";
  $result2 = $this->connect()->query($sql2);
  $count=mysqli_num_rows($result2);
  if($count!=1){
                  echo "<p style=color:red>Invalid Id</p>";
              }

  $sql = "SELECT * FROM register WHERE id = '$username' ";
  $result = $this->connect()->query($sql);
  while($row = mysqli_fetch_array($result))
{ 


echo "<table border='5' style=width:40%;>
<tr>
<th style=background-color:blue;color:white;>Type</th>
<th style=background-color:blue;color:white>Your Information</th>
</tr>

";
echo "<tr style=background-color:white;>";
echo "<th >Firstname</th>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Lastname</th>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>EmailAddress</th>";
echo "<td>" . $row['EmailAddress'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>PhoneNumber</th>";
echo "<td>" . $row['PhoneNumber'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Address</th>";
echo "<td>" . $row['Address'] . "</td>";
echo "<tr>";
echo "<tr style=background-color:white;>";
echo "<th>Level</th>";
echo "<td>" . $row['Level'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Semester</th>";
echo "<td>" . $row['Semester'] . "</td>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Image</th>";
echo "<td>" . '<img src="reg_pic/' . $row['image']  . '" width=" 100px' .  '" height="100px"/>'. "</td>";
echo "</tr>";
}

echo "</table>";


}
function EditDetails($username){
  $sqltext = "SELECT * FROM register WHERE id = '$username' ";
  $result = $this->connect()->query($sqltext);
  $conn = $this->connect()->query($sqltext);
  while($row = mysqli_fetch_array($result))
{
     echo "<center><tr><form  method=post style=margin-left:-10px;margin-top:50px;color:whitesmoke; background-color: blue;>";
   echo "<th><br>  <br><br><br><h4><h1 style=color:black;>Your ID : </th>";
   echo "<td>" . $row['id'] . "</h1></td><h4><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Firstname : </th>";
   echo "<td><input type=text name=FirstName value='" . $row['FirstName'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Lastname : </th>";
   echo "<td><input type=text name=LastName value='" . $row['LastName'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>EmailAddress : </th>";
   echo "<td><input type=text name=EmailAddress value='" . $row['EmailAddress'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>PhoneNumber : </th>";
   echo "<td><input type=text name=PhoneNumber value='" . $row['PhoneNumber'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Address : </th>";
   echo "<td><input type=text name=Address value='" . $row['Address'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Level : </th>";
   echo "<td><input type=text name=Level value='" . $row['Level'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Semester : </th>";
   echo "<td><input type=text name=Semester value='" . $row['Semester'] . "'></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Image : </th>";
   echo "<br><br><td><input type=file name=image value='".'<img src="reg_pic/' . $row['image']  . '" width=" 100px' .  '" height="100px"/>' . "'></td></tr>";
  
if (isset($_POST['Edit'])) {
  $id=$row['id'];
  $FN=$_POST['FirstName'];
  $ln=$_POST['LastName'];
  $em=$_POST['EmailAddress'];
  $pn=$_POST['PhoneNumber'];
  $ad=$_POST['Address'];
  $lv=$_POST['Level'];
  $sm=$_POST['Semester'];
  $im=$_POST['image'];

  $sql = "UPDATE register SET FirstName ='$FN'  , LastName = '$ln', EmailAddress='$em', 
  PhoneNumber='$pn', Address='$ad' , Level='$lv' , Semester='$sm',
  image='$im' WHERE  id = '$id' ";
  $result2 = $this->connect()->query($sql);
  
  if($result2){
    echo" <script>alert('Your Update Is Done Please Refresh this page to see your updates')</script> ";



  }
  else 
    echo "Not Updated!";
 }
 echo "<br><br>";
  echo "<td><button name=Edit style=margin-left:100px;height:50px;width:100px;border-radius:10px;color:white;background-color:red; ><a>UPDATE</a></button><td>";
   echo "</form></tr>";

  // $FN,$LN,$EA,$PN,$Ad,$Lvl,$Sem,$im
  
 echo "</table></center>";
  
}


}

function ViewHallTicket($username){
  $sql2 = "SELECT id FROM HallTicket WHERE id = '$username'";
  $result2 = $this->connect()->query($sql2);
  $count=mysqli_num_rows($result2);
  if($count!=1){
                  echo "<p style=color:red>Invalid Id</p>";
              }

  $sql = "SELECT * FROM HallTicket WHERE id = '$username' ";
  $result = $this->connect()->query($sql);
  while($row = mysqli_fetch_array($result))
{ 


echo "<center><form style=margin-top:160px;><table border='5' style=width:40%; style=height:60px;>
<tr style=background-color:blue;color:white>

<th colspan=2;>HallTicket</th>
</tr>
<tr style=background-color:darkcyan;color:white>

<th>Content</th>
<th>Your Information</th>

</tr>

";
echo "<tr style=background-color:white;color:black>";
echo "<th>Firstname: </th>";
echo "<th >" . $row['FirstName'] . "</th>";
echo "</tr>";
echo "<tr  style=background-color:white;color:black>";
echo "<th>Lastname: </th>";
echo "<th>" . $row['LastName'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;color:black>";
echo "<th>Level: </th>";
echo "<th>" . $row['Level'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;color:black>";
echo "<th>Semester: </th>";
echo "<th>" . $row['Semester'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;color:black>";
echo "<th>SeatNumber: </th>";
echo "<th>" . $row['SeatNumber'] . "</th>";
echo "</tr>";
}

echo "</table></form></center>";
}
                                               

function ViewMarksheet($username){
  $sql2 = "SELECT stuId FROM marksheet WHERE stuId = '$username'";
  $result2 = $this->connect()->query($sql2);
  $count=mysqli_num_rows($result2);
  if($count!=1){
                  echo "<p style=color:red>Invalid Id</p>";
              }
              

  $sql = "SELECT * FROM marksheet WHERE stuId = '$username'";
  $result = $this->connect()->query($sql);

  while($row = mysqli_fetch_array($result))

{ 

echo "<form style=margin-top:100px;><table border='5' style=width:40%;>
<tr style=background-color:black;color:white>

<th colspan=3;>Mark Sheet</th>

</tr>
<tr style=background-color:darkcyan;>
<th>Subjects Number </th>
<th>Subject Code</th>
<th>MARKS</th>
</tr>

";

echo "<tr style=background-color:white;>";
echo "<th>Subject1: </th>";
echo "<th>" . $row['sub1'] . "</th>";
echo "<th>" . $row['sub1GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject2: </th>";
echo "<th>" . $row['sub2'] . "</th>";
echo "<th>" . $row['sub2GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject3: </th>";
echo "<th>" . $row['sub3'] . "</th>";
echo "<th>" . $row['sub3GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject4: </th>";
echo "<th>" . $row['sub4'] . "</th>";
echo "<th>" . $row['sub4GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject5: </th>";
echo "<th>" . $row['sub5'] . "</th>";
echo "<th>" . $row['sub5GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject6: </th>";
echo "<th>" . $row['sub6'] . "</th>";
echo "<th>" . $row['sub6GD'] . "</th>";
echo "</tr>";
echo "<tr style=background-color:white;>";
echo "<th>Subject7: </th>";
echo "<th>" . $row['sub7'] . "</th>";
echo "<th>" . $row['sub7GD'] . "</th>";
echo "</tr>";
}


echo "</table></form>";

}





}