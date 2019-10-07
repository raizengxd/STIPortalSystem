<html>
<head>
<title>PROCEED TO SITE</title>
<link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />
	<style>
		body{
			font-family: Raleway;
			text-decoration: none;
			color :#01579B;;
			
		}
	</style>
</head>
<body>

<?php 
include("condb.php");

	$enterUser= $_POST['username'];
	$enterPass= $_POST['password'];
	
	if(!empty($enterUser)&& !empty($enterUser)){		
		$sql= "Select * from tbl_trainees where Stud_ID= '$enterUser'";
		$result= $conn -> query ($sql);
		$rows= mysqli_num_rows($result);	
		if ($rows !=0)
		{
			$row= $result ->fetch_assoc();
			$confUserName= $row['Stud_ID'];
			$confPass= $row['password'];
			
			if($enterUser==$confUserName  && $enterPass==$confPass ){
				if($confUserName=="ADMIN"){
					echo'<a href="COMPANY/index.php">Proceed</a>';
					
				}
				else{
				echo	'<a href="resume.php? StudID='.$confUserName.'">Proceed</a>';

				}
			}
			
			else{
				echo'<a href="register.php">CREATE ACCOUNT</a>';
			}
		}
		else{
		echo'NO USER EXIST<br><br>';
				echo'<a href="register.php? >CREATE ACCOUNT</a>';
		}
	}	
	else
	{		
		echo 'not log in';
	}

?>
</body>
</html>