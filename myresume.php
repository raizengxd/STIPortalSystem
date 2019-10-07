<html>

<head>
<title>PROCEED TO SITE</title>
<link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />
	<style>
		body{
			font-family: Raleway;
			text-decoration: none;
		
			
		}
	</style>
</head>
	<body>
	<?php
	include("condb.php");
	$get_ID=$_GET['Stud_ID'];
	
	
	$sql="Select * from tbl_trainees where Stud_ID='$get_ID'";

	$result=$conn -> query ($sql);
	$rows=mysqli_num_rows($result);
	$row= $result ->fetch_assoc();
$addID=$row['Stud_ID'];
$addFName=$row['Fname'];
$addLName=$row['Lname'];
$addsection=$row['section'];
$addCon_Num=$row['Con_Num'];
$addEmail=$row['email'];
$addAddress=$row['address'];
$addObj=$row['obj'];
$addHighSchool= $row['high_school'];
$addHSYear=$row['HS_year'];
$addSkills=$row['skills'];
$addAward=$row['awards'];
$addWork=$row['work_exp'];
$addCharRef=$row['Char_ref'];
$addCharCon=$row['Char_con'];	?>
	
	
		<b>Full Name: </b> <?php echo $addFName?><?php echo $addLName?><br><br>
		<b>Section: <b> <?php echo $addsection ?><br><br>
		<h2>Contact Info: </h2>
		<b>Contact Number: <b> <?php echo $addCon_Num ?><br><br>
		<b>Email: <b> <?php echo $addEmail ?><br><br>
		<b>Objective: <b> <?php echo $addObj?><br><br>
		<b>High School<b> <?php echo $addHighSchool?><br><br>
		<b>Year Graduated<b> <?php echo $addHSYear?><br><br>
		<b>Skills<b> <?php echo $addSkills?><br><br>
		<b>Awards<b> <?php echo $addAward?><br><br>
		<b>Work Experience<b> <?php echo $addWork?><br><br>
		<b>Character Reference<b> <?php echo $addCharRef?><br><br>
		<b>Contact Number<b> <?php echo $addCharCon?><br><br>
	<center>
	<a href="confirm_addresume.php? com_ID=<?php echo $get_ID?> " >Update</a>
	<br>
	</center>
</body>
</html>
