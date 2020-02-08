<?php
include_once "connection.php";
if(isset($_POST["submit4"]))
{
	$tid1=$_POST["tid1"];
	$tid2=$_POST["tid2"];
	$date=$_POST["date"];
	$time=$_POST["time"];
	$venue=$_POST["venue"];
	$mno=$_POST["mno"];
	if($tid1==$tid2)
	{
		echo "enter diffrent team id";
	}
		else
		{

			$s1="update teamrank set mid=mid+1 where tid='$tid1';";
			$r1=mysqli_query($conn,$s1);
			$s2="update teamrank set mid=mid+1 where tid='$tid2';";
			$r2=mysqli_query($conn,$s2);
			if($r1 && $r2)
			{
					$sql="Insert into matches(tid1,tid2,date,time,venue,mno)
      values ('$tid1','$tid2','$date','$time','$venue','$mno');";
     $result=mysqli_query($conn,$sql);
	 if($result)
	 {
	 	header("Location:../new.php");
	 }
			}
			else{
				echo "Error";
			}






}
}
?>