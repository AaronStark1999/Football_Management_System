<?php
include "connection.php";

	$tid=$_POST["tid"];
	$mid=$_POST["mid"];
	$won=$_POST["won"];
	$lost=$_POST["lost"];
	$draw=$_POST["draw"];
	$points=$_POST["points"];
	$sql="Insert into teamrank(tid,mid,won,lost,draw,points)
      values ('$tid','$mid','$won','$lost','$draw','$points');";
      $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	 	header("Location:../new.php");
	 }