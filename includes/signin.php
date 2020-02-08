<?php



require "connection.php";

if(isset($_POST['signin']))

{



    $uid=$_POST['uid'];

    $pwd=$_POST['pwd'];



    if(empty($uid) || empty($pwd))

	{

		header("Location:land.php?error=Fillallthedetails");

		exit();

	}

	else

	{

		$sql="SELECT * FROM users where uidusers='$uid' OR emailusers='$uid';";

		$result=mysqli_query($conn,$sql);

		$resultcheck=mysqli_num_rows($result);

		if($resultcheck>0)

		{

			if($row=mysqli_fetch_assoc($result))

			{

				if($pwd=$row['pwdusers']){
					if($uid=='admin'){
						header("Location:../new.php?Success");
					}
					else{
						header("Location:../show.php");
					}
					
				}
				
			}

		}



	}

}





else

{

	header("Location:land.php?error=ClicktoSignup");

	exit();

}