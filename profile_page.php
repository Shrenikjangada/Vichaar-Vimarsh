<html>
<head>

	<title>
		Vichaar-Vimarsh
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
    	
	<link rel="stylesheet" href="profile_style.css" />
	<link href='https://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family="Autour One"' rel='stylesheet'>

<style>
 
</style>

		<?php require 'include/header.inc.php'; ?>
</head>


<body>

	<style type="text/css">
		body{
			background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(/vichaar-vimarsh_final/images/profile-bg.jpg);
			background-repeat: no-repeat;
			background-size: 100% 100%;
			color: white;
		}
		
		.comment-box{
			height: auto;
			text-align: center;
			padding: 1em;
			font-size: auto;
			background-color: transparent;
			border-radius: 1em;
			border: 1px solid white;
		}

		.comment-box:hover{
			transform: scale(1.2);
			color: #ffd6b8;

		}

		.con{
			min-height: 90vh;
			margin: 0;
			padding: 1em;			

		}

	</style>

		<?php 

	
		require 'include/dbh.inc.php';

			//echo "<center><img src='' alt='profile pic' class='prof_pic'/></center>
			echo "<div class='con'>";
			echo "<center><h1>".$username."<h1></center><br>

			<h4>Comments by you<img src='https://www.flaticon.com/svg/static/icons/svg/25/25663.svg' class='sign'/>:</h4><br>";


			$sql = "select * from comment where comment_sender_name = ?";
			$stmt = mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt, $sql)){
			
				header('Location: ../index.php?error=sqlerror');
				exit();	

			}

			else{
				mysqli_stmt_bind_param($stmt,'s',$username);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				while($row = mysqli_fetch_assoc($result)){

					
					echo "<center><div class='comment-box'>";
					echo "<span class='topic'><bold>".$row['title']."</bold></span><br>";
					

					echo "Comment: ";
					echo "<span class='comments'>".$row['comment']."</span>";
					echo "</div></center>";
						
				}

						
			}

		echo "</div>";
		?>

		
		
			
	
	<?php require 'include/footer.inc.php'; ?>
</body>
</html>