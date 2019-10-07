<html>

<head>
<head>

<link rel="shortcut icon" type="image/x-icon" href="image/logo.png" />


  <title>Resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<link rel="stylesheet"href="style/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
<style>
.btn {
  position: center;

  display: block;
	width: 50%; height: 5%;
  padding: 0;

  overflow: hidden;

  border-width: 0;
  outline: none;
  border-radius: 2px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, .6);
  
  background-color:#01579B;
  color: #ecf0f1;
  
  transition: background-color .3s;
}

.btn:hover, .btn:focus {
  background-color:#00aced;
}

.btn > * {
  position: relative;
}

.btn span {
  display: block;
  padding: 12px 24px;
}

.btn:before {
  content: "";
  
  position: absolute;
  top: 50%;
  left: 50%;
  
  display: block;
  width: 0;
  padding-top: 0;
    
  border-radius: 100%;
  
  background-color: :#00aced;
  
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.btn:active:before {
  width: 120%;
  padding-top: 120%;
  
  transition: width .2s ease-out, padding-top .2s ease-out;
}





.navbar-brand{
	
}
navbar-nav{
	text-align: right;
}
.logo-bg{
width:20%;
 height:10%;
}
@media screen and (max-width: 1000px){
   body{
   overflow-x: hidden;
   }
	.logo-bg{
	width:30px; 
	height:10%;
	}
	h1.title{
	
	font-size: 32pt;
	text-align:center;
	vertical-align: middle;
}
	}
body{
font-family: Roboto;}
#space{
	padding-left:50pt;
}
#me{
padding-right: 20pt;
}


button{
	width: 40%;
	border: none;
	border-radius: 25px;
	height: 20%;
	background-color: #01579B;
	color: white;
}
button:hover{
	color: yellow;
}

form{
	display: block;
	position: relative;
	width: 400px;
	height: 1000px;
	background: #fff;
	margin: 50px auto;
	padding: 30px;
	color: white;
    box-cshadow: 2px 2px 4px #000000;
	

	}
	
	label{
	display: block;
	position: relative;
	top: -20px;
	left: 0px;
	color: #999;
	font-family: Calibri Light;
	font-size: 16px;
	z-index: 1;
	transition: all 0.3s ease-in;
	
	}
	input.me2 {
	display: block;
	position: relative;
	background: none;
	border: none;
	border-bottom: 1px solid #ddd;
	width: 80%;
	font-family: Calibri Light;
	
	font-size: 16px;
	z-index: 2;
	}	
	
	input.me2:focus, input:valid{
	outline:none;
	border-bottom: 1px solid #00aced;
	
	}
	
	input.me2:focus + label, input:valid + label {
	top: -40px;
	font-size: 11px;
	color:#00aced;
	}
	.divider{
	position: 50px;
	height: 30px;
	width: auto;
	background: none;
	}



	::placeholder {
    color: #999;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: #999;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: #ddd;
}
.c{
padding-top:5%;
}

</style>

<?php

	include("condb.php");
	
	$regUser= $_POST['user_id'];
	$regPass= $_POST['pass'];
	$regFname= $_POST['fname'];
	$regLname= $_POST['lname'];
	$regCourse= $_POST['section'];
	
	$sql= "insert into tbl_trainees (Stud_ID, password, Fname, Lname, section) values('$regUser','$regPass','$regFname','$regLname','$regCourse')";
	
	
	$result = $conn -> query ($sql);

	
	
		
	
	
	$sqlGET="Select * from tbl_trainees where Stud_ID='$regUser'";

	$result=$conn -> query ($sqlGET);
	$rows=mysqli_num_rows($result);
	$row= $result ->fetch_assoc();
$addID=$row['Stud_ID'];
$addFname=$row['Fname'];
$addLname=$row['Lname'];
$addSection=$row['section'];




?>
</head>
<body>

<!--PAGE 2 0f 2 for THIS IS A DEFAULT DESIGN -->
 <!--EDITING PART-->
<div class="c">
 <center><h1 style="color:#01579B;">RESUME</h1></center></div>
 
 <div ="container2"  >
 
 
 
 
 
<form action="confirm_addresume.php" method="POST">
<h1 style="color:#01579B; font-size: 16pt;">Student ID</h1></center>
<input class="me2"type="text"  name="StudentME" required autocomplete= "off" readonly value="<?php echo $addID ?> "/>	
<div class="divider"></div>		
<h1 style="color:#01579B; font-size: 16pt;">Profile</h1></center>
	
			<!--POSTION-->
	
		
	<input class="me2"type="text" readonly name="contact" required autocomplete= "off" value="<?php echo $addFname ?> <?php echo $addLname?> of <?php echo $addSection?>"/>

	<div class="divider"></div>	



	<h1 style="color:#01579B; font-size: 16pt;">Contact Information</h1></center>
		<div class="divider"></div>	
			<!--POSTION-->
	<input class="me2"type="text" name="contact" required autocomplete= "off"/>
		<label for="contact">Contact</label>
	<div class="divider"></div>	
		
	<input class="me2"type="text" name="email" required autocomplete= "off"/>
		<label for="email">Email</label>
	<div class="divider"></div>	
		
			<input class="me2"type="text" name="address" required autocomplete= "off"/>
		<label for="address">Address</label>
		
	<div class="divider"></div>	
		
		
			<!--POSTION-->
		<h1 style="color:#01579B; font-size: 16pt;">Objective</h1></center>
		<div class="divider"></div>	
			<input class="me2"type="text" name="obj" required autocomplete= "off"/>
		<label for="obj">Write your objective </label>
	<div class="divider"></div>	
	
			<!--POSTION-->
		<h1 style="color:#01579B; font-size: 16pt;">Education</h1></center>
		<div class="divider"></div>	

	<input class="me2"type="text" name="high_school" required autocomplete= "off"/>
		<label for="high_school">Graduate High School</label>
	<div class="divider"></div>	
	
		<input class="me2"type="text" name="HS_year" required autocomplete= "off"/>
		
		<label for="HS_year">Year Graduate</label>
	<div class="divider"></div>	
			<h1 style="color:#01579B; font-size: 16pt;">Personal Traits</h1></center>
		<div class="divider"></div>	
		<input class="me2"type="text" name="skills" required autocomplete= "off"/>
		<label for="skills">Skills</label>
	<div class="divider"></div>	
	
	<input class="me2"type="text" name="awards" required autocomplete= "off"/>
		<label for="awards">Awards</label>
	<div class="divider"></div>	
	
	<input class="me2"type="text" name="work_exp" required autocomplete= "off"/>
		<label for="work_exp">Work Experience</label>
	<div class="divider"></div>	


		<h1 style="color:#01579B; font-size: 16pt;">Reference</h1></center>
		<div class="divider"></div>	

	
	<input class="me2"type="text" name="Char_ref" required autocomplete= "off"/>
	
	
	
		<label for="Char_ref">Character Reference </label>
	<div class="divider"></div>	
	
		<input class="me2"type="text" name="Char_con" required autocomplete= "off"/>
		<label for="Char_con">Contact Number </label>
	<div class="divider"></div>	
	
	
		<input type= "submit" name="submit" value="Apply" class="btn" >
		
		
		<br><br>
	
		</form>

	


</div>


</div>


</body>
</html>