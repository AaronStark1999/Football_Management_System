<?php
include_once "connection.php";
if(isset($_POST["submit6"]))
{
	$pid=$_POST["pid"];
	$tid=$_POST["tid"];
	$goals=$_POST["goals"];
	$sql="Insert into totalgoals(pid,tid,goals)
      values ('$pid','$tid','$goals');";
       $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	 	header("Location:../new.php");
	 }
	 else {
	 	mysqli_error($result);
	 }
	
}
?>