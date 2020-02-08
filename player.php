<?php
include "includes/connection.php";

	$pid=$_POST["pid"];
	$pname=$_POST["pname"];
	$tid=$_POST["tid"];
	$position=$_POST["position"];
	$stats=$_POST["stats"];
	$ranking=$_POST["ranking"];
	$sql="Insert into player(pid,pname,tid,position,stats,ranking)
      values ('$pid','$tname','$tid','$position','$stats','$ranking');";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    	echo "Success";

    }


?>