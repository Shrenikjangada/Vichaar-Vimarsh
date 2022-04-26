<?php 
	session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Vichaar-Vimarsh
    </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="custom-css/welcome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button custom-nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><em class="text-white">Vichaar-vimarsh</em></a>

		 <?php 


		if(isset($_SESSION['username'])){			
	
	
                    echo	"<div class='collapse navbar-collapse' id='navcol-1'>
    		                    <ul class='nav navbar-nav mr-auto'>

     	                           <li class='nav-item' role='presentation'><a class='nav-link active text-white' href='welcome.php'>Feeds</a></li>
			                            
                        </ul>	
		    </div>";

		}
		?>

	<?php

		
		
                      		
		
		if(!isset($_SESSION['username'])){ ?>
		  	<span class="navbar-text actions"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login">Login</button></span>   
               <?php }	


		if(isset($_SESSION['username']) ){

		$username = $_SESSION['username'];

		echo "<style type='text/css'>
                .dropdown-menu{
                  background-color: #FFEBCD;
                 
               }
                .dropdown-item{
                   text-align: center;
                   padding: .2em;
                   
                }
                .dropdown-item:hover{
                  font-size: 1.3em;
                 background-color: #FFEBCD;
                }
              </style>
                    <div class='dropdown'>
                    <button class='btn btn-outline-warning dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                      echo $username;
                    echo  "</button>
                    <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                      <a class='dropdown-item' href='profile_page.php'>Profile</a>  <!-- History page href here -->
                      <center><div class='border border-dark' style='width: 75%;'></div></center>
                      <a class='dropdown-item' href='include/logout.inc.php'>Logout</a>
                    
                    </div>
                  </div>";
            

		}


?>


		
	
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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>