<?php 
	
	session_start();
	$_SESSION['username'] = '';
	$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Vichaar-Vimarsh
    </title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' type="text/css" href='styles.css'>
</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button custom-nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><em class="text-white">Vichaar-vimarsh</em></a>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active text-white" href="index.php">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="contact.php">Contact Us</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="about.php">About Us</a></li>
                        </ul>	

		  	<span class="navbar-text actions"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login">Login</button></span>   
                	
		  </div>
                </div>
            </nav>
        </div>
    </header>

	 <div id="id01" class="modal">

        	<form class="modal-content animate" action="include/login-action.inc.php" method="POST">
            	<div class="imgcontainer">
                	<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            	</div>

    	        <div class="container">
         	       <label for="uname"><b>Username</b></label>
         	       <input type="text" placeholder="Enter Username" name='uname' required />

	                <label for="psw"><b>Password</b></label>
	                <input type="password" placeholder="Enter Password" name='psw' required /><br>
                <!-- ########################################################################## -->
	                <center><input type='submit' name='login_button' class='login'/></center>

	        </div>

            	<div class="container" style="background-color:#f1f1f1">
                	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn login">Cancel</button>

                	<span class="register">Don't have an account , Register now <button type="submit"><a href='register.php'>Register</a></button></span>

        	</div>
	
            <!-- ############################################## -->
        	</form>
    	</div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>