<!-- username
email
password
repeat password
gender -->

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="custom-css/register.css">
	<style>

	.note{display:none;}
		
	</style>
</head>

<body>



	<div class="container">
	        <center>
	            <h1>Sign Up Here</h1>
	            <p>Please fill in this form to create an account.</p>
	        </center>
	        


		<div class='note' style="display:">
			<?php 					 
				if(isset($_GET['error'])){	

					echo "<style>
						.note{ display:block; border:2px solid black; background-color: red; padding: 2% 5%;  }

						.required{color:white};
						</style>";
		
	
					if($_GET['error'] == 'invalidemailandusername'){
				
						echo '<center><p class="required">Invalid username and mail</p></center>';
 				
					}

					else if($_GET['error'] == 'invalidemail'){
				
						echo '<center><p class="required">Invalid mail</p></center>';
 				
					}
		
					else if($_GET['error'] == 'invalidusername'){
				
						echo '<center><p class="required">Invalid username</p></center>';
 				
					}

					else if($_GET['error'] == 'usernameexists'){
				
						echo '<center><p class="required">User name exists</p></center>';
 				
					}

					else if($_GET['error'] == 'checkpass'){
				
						echo '<center><p class="required">Passwords do not match</p></center>';
 				
					}

				}
				?>
			
			</div>	

		<hr>	

	        <form action="include/reg-action.inc.php" method="POST">
	            <label for="name"><b>Name</b></label>
	            <input type="text" placeholder="Enter Your Name" name="name" required>

	            <label for="username"><b>UserName</b></label>
	            <input type="text" placeholder="Enter Your Username" name="username" required>
	
	            <label for="email"><b>Email</b></label>
	            <input type="text" placeholder="Enter Email" name="email" required>

	            <label for="psw"><b>Password</b></label>
	            <input type="password" placeholder="Enter Password" name="psw" id="p1" required>

	            <label for="psw-repeat"><b>Repeat Password</b></label>
	            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="p2" required>
	


	            <p><b> Select Your Gender </b></p>
	
	            <label class="radiobtn" for="male">Male 
	     	    	<input type="radio" id="male" name="gender" value="male">
	            	<span class="checkmark"></span>
		    </label>

	            <label class="radiobtn" for="female">Female
		        <input type="radio" id="female" name="gender" value="female">
		        <span class="checkmark"></span>
		    </label>

		    <label class="radiobtn" for="other">Other
			<input type="radio" id="other" name="gender" value="other">
        		<span class="checkmark"></span>
		    </label>
        	    <br>

		     <button type="submit" name='signup_button' class="signupbtn">Sign Up</button>
        	</form>
		
		
        	<form action="index.php" method="post">
                	<button type="submit" class="cancelbtn">Cancel</button>
            	</form>

        <!-- <div class="clearfix">
            <form action="signup-action.php" method="post">
                <button type="submit" name='signup_button' class="signupbtn">Sign Up</button>
            </form>
            <form action="index.html" method="post">
                <button type="submit" class="cancelbtn">Cancel</button>
            </form>
        </div> -->
    </div>

</body>
<script>
</script>
</html>