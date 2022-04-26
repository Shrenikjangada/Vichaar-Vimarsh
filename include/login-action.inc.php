<!DOCTYPE html>
<html>
<head>
	<title>
		Vichaar-Vimarsh
	</title>
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/vichaar-vimarsh_final/styles.css">
</head>
<body>
      <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        .bg-img{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/vichaar-vimarsh_final/images/wrong-info.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin: 0;
            float: left;
            width: 100%;    
        }
        .reg_suc_txt{
            text-align: center;
            font-size: 3em;
            margin: 4em;
            color: white;

}   
        </style>
<?php


	if(isset($_POST['login_button'])){

	require 'dbh.inc.php';	

$username = $_POST['uname'];
$password = $_POST['psw'];

$conn = mysqli_connect("localhost","root","","testing");

$select_query = "select * from register where username='$username' && password ='$password'";

$result = mysqli_query($conn,$select_query);
$row = mysqli_num_rows($result);

if($row != 0){
    session_start();
    $_SESSION['username'] = $username;
    header('location:/vichaar-vimarsh_final/welcome.php');

}
else {
	require 'header.inc.php';
	echo "<div class='bg-img'>";
    echo "<h2 class='reg_suc_txt'>Wrong Username Or Password<br><br>Please<a href='/vichaar-vimarsh_final/index.php'> try again</a></h2>";
    echo "</div>";
    require 'footer.inc.php';
}
}

?>

</body>
</html>

