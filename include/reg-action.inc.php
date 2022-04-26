<!DOCTYPE html>
<html>

<?php


	require 'dbh.inc.php';
	
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	$password_rep = $_POST['psw-repeat'];
	$gender = $_POST['gender'];

// echo $gender;
// echo $name;
// echo $username;
// echo $email;
// echo $password;


	if(isset($_POST['signup_button'])){

		if((!filter_var($email, FILTER_VALIDATE_EMAIL)) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))){

				header('Location: ../register.php?error=invalidemailandusername');
				exit();
			} 


		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header('Location: ../register.php?error=invalidemail&username='.$username);
				exit();
			}

		else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
				header('Location: ../register.php?error=invalidusername&mail='.$email);
				exit();
			}

		else if($password_rep !== $password){
				header('Location: ../register.php?error=checkpass&mail='.$email);
				exit();
			}

	
		else{
				$sql =  "Select username from register where username=?";

				$stmt = mysqli_stmt_init($conn); 

				if(!mysqli_stmt_prepare($stmt, $sql)){
					header('Location: ../register.php?error=sqlerror');
					exit();
				}	
			
				else{
					mysqli_stmt_bind_param($stmt,"s",$username);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);
					$result = mysqli_stmt_num_rows($stmt);


					if($result > 0){
						header('Location: ../register.php?error=usernameexists');
						exit();
					}	

					else{
					
					$sql = "Insert into register (name, username, email, password, gender) values (?,?,?,?,?)";
					$stmt = mysqli_stmt_init($conn);

						if(!mysqli_stmt_prepare($stmt, $sql)){
							header('Location: ../register.php?error=sqlerror');
							exit();
						}

						else{
		
							$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt,'sssss',$name, $username, $email, $password, $gender);
							mysqli_stmt_execute($stmt);
							header('Location: ../reg_success.php?signup=success');
							exit();
						}

					}
				}

			}

			mysqli_stmt_close($stmt);
			mysqli_close();					

		}

		else{
			header('Location : ../signup.php');
			exit();
		}

	