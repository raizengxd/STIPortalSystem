<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
	margin-right: -200pt;
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
</head>
<body>

<!--PAGE 1 0f 2 for THIS IS A DEFAULT DESIGN -->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-inverse navbar-fixed-top"  id="he" style="background-color:#01579B; color: white;  ">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="image/logo.png"  class="logo-bg"></a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     

	 <a class="nav-item nav-link" href="index.php" id="space"><i class="material-icons" id="me">home</i>Home<span class="glyphicon glyphicon-cloud"></span></a>
	  <a class="nav-item nav-link " href="login.php" id="space">
	  
	 <i class="material-icons" id="me">account_circle</i> 
	  Login</a>
      <a class="nav-item nav-link" href="register.php" id="space">
	  
	  <i class="material-icons" id="me">work</i> 
	  Apply Now</a>
      
      <a class="nav-item nav-link " href="#" id="space">
	  
	  <i class="material-icons" id="me">people</i>
	  About</a>
	 
    </div>
  </div>
</nav>
<!--PAGE 2 0f 2 for THIS IS A DEFAULT DESIGN -->
 <!--EDITING PART-->
<div class="c">
 <center><h1 style="color:#01579B;">REGISTER</h1></center></div>
 <div ="container2"  >
<form action="confirm_register.php" method="POST">
			<!--POSTION-->
	<input class="me2"type="text" name="user_id" required autocomplete= "off"/>
		<label for="user_id">ID</label>
	<div class="divider"></div>	
		
		
			<!--POSTION-->
	<input class="me2" type="text" name="lname" required autocomplete= "off"/>
		<label for="lname">Last Name</label>
	<div class="divider"></div>	

	<input class="me2" type="text" name="fname" required autocomplete= "off"/>
		<label for="fname">First Name</label>
	<div class="divider"></div>	

	<input class="me2" type="text" name="section" required autocomplete= "off"/>
		<label for="section">Section</label>
	<div class="divider"></div>	

<input class="me2" type="password" name="pass" required autocomplete= "off"/>
		<label for="pass">Password</label>
	<div class="divider"></div>	
		
		<input type= "submit" name="submit" value="Add" class="btn" >
		
		
		<br><br>
	<a href="login.php">I have already an account</a>	
		
		</form>

	


</div>


</div>

</body>
</html>