<?php

session_start();

$con=mysqli_connect("localhost","root","root","football1");

$tid=$_POST['tid'];
$tname=$_POST['tname'];
$tcoach=$_POST['tcoach'];
$captain=$_POST['captain']
$Sponsor=$_POST['Sponsor'];


$s = "select * from team where Team_Id='$tid'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
  echo "Team_Id id already taken";
}else {
   $reg= "insert into team(Team_Id,Team_Name,Captain,Coach,Sponsors) values('$tid','$tname','$captain','$tcoach','$Sponsor');";
   mysqli_query($con,$reg);
   echo "registeration successfull";
}

 ?>