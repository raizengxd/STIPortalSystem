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
	$postID=$_POST['StudentME'];
	


$addCon_Num=$_POST['contact'];
$addEmail=$_POST['email'];
$addAddress=$_POST['address'];
$addObj=$_POST['obj'];
$addHighSchool= $_POST['high_school'];
$addHSYear=$_POST['HS_year'];
$addSkills=$_POST['skills'];
$addAward=$_POST['awards'];
$addWork=$_POST['work_exp'];
$addCharRef=$_POST['Char_ref'];
$addCharCon=$_POST['Char_con'];	
	
	
	
		$sqlUpdate="update tbl_trainees set Con_Num='$addCon_Num',
		email='$addEmail',
		address='$addAddress',
		obj='$addObj',
		high_school='$addHighSchool',
		HS_year='$addHSYear',
		skills='$addSkills',
		awards='$addAward',
		work_exp='$addWork',
		Char_ref='$addCharRef',
		Char_con='$addCharCon'
		
		where Stud_ID='$postID';
		
		
		";

	$result=$conn -> query ($sqlUpdate);
	if ($result){	
	echo '<center>
	<a href="resume.php? StudID='.$postID.'">Proceed</a><br>
	<a href="index.php">Log Out</a>
</center>';
}
else {
 echo 'No';
}


?>
</body>
</html>
