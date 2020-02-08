<?php
include_once "connection.php";
if(isset($_POST["submit1"]))
{
	$tid=$_POST["tid"];
	$tname=$_POST["tname"];
	$co=$_POST["co"];
	$cap=$_POST["cap"];
	$sp=$_POST["sp"];
	$sql="Insert into team(tid,tname,captain,sponsors,coach)
      values ('$tid','$tname','$cap','$sp','$co');";
     $result= mysqli_query($conn,$sql);
}

if($result)
    {
	 	header("Location:../new.php");

    }


?>