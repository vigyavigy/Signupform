<!DOCTYPE html>
<html lang="en">
<head>
	<title>project</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/signup.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<link type="text/css" href="ajax/signup.php">
	<link type="text/css" href="ajax/login.php">
</head>

<body>
	<div class="col-sm-12">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="con">
				<p>appointment booking system</p> 
			</div>

			<div>
				<div class="col-sm-6">
					<!-- <a href="#"> -->
						<button class="btn" id="btn" style="float: right;">SIGN UP</button>
						<!-- <p class="btn" id="btn" style="float: right;">SIGN UP</p> -->
					<!-- </a> -->
				</div>
				<div class="col-sm-6">
					<!-- <a href="#"> -->
						<button class="btn" id="bton">LOG IN</button>
						<!-- <p class="btn" id="bton">LOG IN</p> -->
					<!-- </a> -->
				</div>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>

	<div class="loginpage">
		<div class="signuppage">
			<form action="ajax/signup.php" method="post" class="signupform" id="form1">
				<div class="col-sm-12">
		    		<div class="col-sm-2"></div>
		    		<div class="col-sm-8">
		    			<!-- heading -->
		    			<div class="con">
		    				<p>Signup form</p> 
		    			</div>

		    			<div class="cont">
							<div>
								<label for="firstname">firstname:</label>
								<input style="margin-right: 20px;" type="text" name="firstname" class="form-control" id="firstname" placeholder="enter firstname" size="25">
								<br>
								<label for="lastname">Lastname:</label>
								<input type="text" name="lastname" id="lastname" class="form-control" placeholder="enter lastname" size="25">
							</div>
							<br>
							<div>
								<label for="email">Email:</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="enter email" size="55">
							</div>
							<br>
							<div>
								<label for="password">Password:</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="enter password" size="52">
							</div>
							<br>
							<div>
								<label for="cpassword">Confirm Password:</label>
								<input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="confirm password" size="52">
							</div>
							<div>
								<label for="number">Contact No.:</label>
								<input type="text" name="number" id="contactnum" class="form-control" placeholder="enter number">
							</div>
							<br>
							<div>
								<label for="gender">Gender:</label>
								<select name="gender" id="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="others">Others</option>
								</select>
								<!-- <label for="male"><input type="radio" name="gender" value="m" id="male" class="form-control">Male</label>
								<label for="female"><input type="radio" name="gender" value="f" id="female" class="form-control">Female</label>
								<label for="other"><input type="radio" name="gender" value="o" id="other" class="form-control">Others</label>  -->
							</div>
							<br>
							<!-- <div>
								<label for="date">Date Of Appointment:</label>
								<input  type="date" name="date" id="date" class="form-control">
							</div>
							<br>
							<div>
								<label for="time">Time Of Appointment:</label>
								<select name="time" id="time">
									<option value="morning">9:00 am</option>
									<option value="evening">4:00 pm</option>
								</select> 
							</div>
							<br>
							<div>
								<label for="age">Age:</label>
								<input type="number" name="age" id="age" class="form-control">
							</div>
							<br> -->
							

							<div class="bttn">
								<button type="submit" value="Submit" name="submit" class="sub" onclick="sendsignup();">Submit</button>
							</div>
					    </div>
		    		</div>
		    		<div class="col-sm-2"></div>
		    	</div>
		    </form>  

		    <form action="ajax/login.php" method="post" class="loginform" id="form2">
		    	<div class="col-sm-12">
		    		<div class="col-sm-2"></div>
		    		<div class="col-sm-8">
		    			<!-- heading -->
		    			<div class="con">
		    				<p>Login form</p> 
		    			</div>

		    			<div class="contt">
		    				<div>
		    					<label for="email">Email:</label>
		    					<input type="email" name="email" id="myemail" class="form-control" placeholder="enter email" size="55">
		    				</div>
		    				<br>
		    				<div>
		    					<label for="password">Password:</label>
		    					<input type="password" name="password" id="mypassword" class="form-control" placeholder="enter password" size="52">
		    				</div>
		    				<br>
		    				<div class="bttn">
		    					<button type="submit" value="Submit" name="submit" class="sub" onclick="sendlogin();">Log In</button>
		    				</div>
		    			</div>
		    		</div>
		    		<div class="col-sm-2"></div>
		    	</div>
		    </form>
	   </div>
    </div>

    <!-- <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <script type="text/javascript">
    	const btn = document.getElementById('btn'),
    	      bton = document.getElementById('bton'),
              from2 = document.getElementById('form2'),
              from1 = document.getElementById('form1')

        btn.addEventListener("click", function(){
        	form2.classList.remove('show');
        	form1.classList.remove('hidden');

        	form2.classList.add('hidden');
        	form1.classList.add('show');
        });

        bton.addEventListener('click', function(){
        	
        	form2.classList.remove('hidden');
        	form1.classList.remove('show');

        	form2.classList.add('show');
        	form1.classList.add('hidden');
        });

        function sendlogin(){
        	var myemail = document.getElementById('myemail').value;
        	var mypassword = document.getElementById('mypassword').value;
        	var token = "<?php echo password_hash("logintoken", PASSWORD_DEFAULT);?>"
        	if(myemail!="" &&mypassword!="")
        	{
        		$.ajax( 
        			{ 
        				type:'POST', 
        			    url:"ajax/login.php", 
        			    data:{myemail:myemail,mypassword:mypassword}, 
        			    success:function(data) 
        			    { 
        			    	alert(data);
        			    } 
        		});
        	}
            else
            {
        	    alert('please fill all the required fields');
            }
        };

        function sendsignup(){
        	var firstname = document.getElementById('firstname').value;
        	var lastname = document.getElementById('lastname').value;
        	var email = document.getElementById('email').value;
        	var contactnum = document.getElementById('contactnum').value;
        	var gender = document.getElementById('gender').value;
        	var password = document.getElementById('password').value;
        	var cpassword = document.getElementById('cpassword').value;
        	// var date = document.getElementById('date').value;
        	// var time = document.getElementById('time').value;
        	// var age = document.getElementById('age').value;
        	
        	
        	var token = "<?php echo password_hash("signuptoken", PASSWORD_DEFAULT);?>"
        	if(firstname!="" && lastname!="" && email!="" && contactnum!="" && gender!="" && password!="" && cpassword!="" )
        	{
        		if(password == cpassword)
        		{
        			$.ajax( 
        			{ 
        				type:'POST', 
        			    url:"ajax/signup.php", 
        			    data:{firstname:firstname,lastname:lastname,email:email,contactnum:contactnum,gender:gender,password:password,cpassword:cpassword,token:token}, 
        			    success:function(data) 
        			    { 
        			    	alert(data);
        			    } 
        		    }
        		    );
        		}
        		else
        		{
        			alert('password and confirm password are not same');
        		}
        		
        	}
        	else
        	{
        		alert('please fill all fields');

        	}
        };
</script>

<script type="text/javascript">
	$('form').submit(function(e) { 
		e.preventDefault(); 
	});
	</script>

    
</body>
<html>