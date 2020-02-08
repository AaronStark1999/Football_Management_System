<?php
include_once "connection.php";
if(isset($_POST["submit7"]))
{
	$pid=$_POST["pid"];
	$tid=$_POST["tid"];
	$penalty=$_POST["penalty"];
	$sql="Insert into penalty(pid,tid,penalty)
      values ('$pid','$tid','$penalty');";
     $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	 	header("Location:../new.php");
	 }
	
}
?>