<!DOCTYPE html>
<html>
<head>
	<title>student registeration form</title>
	<link rel="stylesheet" type="text/css" href="sform.css">

</head>
<body>
	<div class="mar">
	
			<div class="top">
			<div class="logo">
				
				<span><i>csgo</i></span><br>
				<p>trust</p>
				
			</div>
			<div class="name">
				<h1>CSGO Trust</h1>
				<h6>airoli sec-15,near datta meghe colleage of engineering.</h6>
				
			</div>
		</div>
		
		<div class="nav">
			<ul>
				<li><a href="front.php" target="_top">home</a></li>
				<li><a href="front.php #gun" target="_top">about us</a></li>
				<li><a href="blog.html" target="_top">blog</a></li>
				<li><a href="front.php #loga" target="_top">Register/login</a></li>
			</ul>
		</div>
<br><br>		
		<h2> registration form for students</h2><br>
	<div class="for">
	<i>enter the details</i><hr>
		<form method="post" action="s1.php" autocomplete="off">
			<table>	
					<tr><td><label for="name">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Name:</label></td>
					<td><input type="text" placeholder="enter the name of student" required="required" name='sname' ></td>
				</tr>
					
				<tr>	
					<td><label for="email">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Email Id </label></td>
					<td>
					<input type="email" placeholder="enter the email id"required="required" name='email'>
				</td>
				</tr>
					<tr><td>&emsp;
					<label for="password"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Create Password</label>
				</td>
				<td>					<input type="password" placeholder="create a password" name='password'>
				</td></tr>
				<tr>
					<td><label for="cpassword">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Confirm  Password</label></td>
					<td>
					<input type="password" placeholder="confirm a password"required="required" name='cpassword'></td>
				</tr>						<tr>
					<td>
					<label for="date">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Date Of Birth</label></td>
					<td>
					<input type="date" placeholder="enter date of birth"required="required" name='date'></td>
					</tr>
					<tr>
						<td>
					<label for="addhar"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Addhar No</label>
					</td>					<td>	
						
					<input type="text" name="addhar" placeholder="Enter Addhar number" required="required" name='addhar'>
				</td>
				</tr>
				</table>
				
			
				
			
					<button>Register</button><br>
					<i>already have an account!!!!<a href="#">click here to login</a></i>

					
		
		
		</form>
		<a href="ds.php">click here for donar registration</a>
		
	
	</div>	
	
	
	
	
	
	
	
	
	
	<br><br>
	<?php include'foter.php' ?>
	</div>
	</body>
	</html>