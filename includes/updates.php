<?php
include_once "connection.php";
if(isset($_POST["submit5"]))
{
	$prediction=$_POST["prediction"];
	$news=$_POST["news"];
	$mno=$_POST["mno"];
	$sql="Insert into updates(prediction,news,mno)
      values ('$prediction','$news','$mno');";
     $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	 	header("Location:../new.php");
	 }
	


}
?>