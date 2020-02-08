<?php



if(isset($_POST['signup']))

{

	require "connection.php";



	$uid=$_POST['uid'];

	$email=$_POST['email'];

	$pwd=$_POST['pwd'];

	

	$name=$_POST['name'];

	$sql="SELECT * FROM users where uidusers='$uid';";

		$result=mysqli_query($conn,$sql);

		$resultcheck=mysqli_num_rows($result);

		if($resultcheck>0)

		{

			header("Location:land.php?error=userTaken");

		    exit();

		}

		else

		{



			

			$sql="INSERT INTO users(uidusers,emailusers,pwdusers,name) values('$uid','$email','$pwd','$name')";

			$result=mysqli_query($conn,$sql);

			if($result>0)

			{

				header("Location:land.php?Signup=success");

		        exit();

			}





		}


}
?>