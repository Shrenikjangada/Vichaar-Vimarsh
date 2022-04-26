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

	<?php  require 'include/header.inc.php';?>
		</header>
 

    <div class="main-txt">

<?php
	  // session_start();
  // $username = $_SESSION['username'];

	if(isset($_SESSION['username'])){
	
  echo "<h1>Welcome " .$username. "!</h1>"
?>

        
        <p>Here at vichaar-vimarsh we know you have your interests , so kindly choose your favorite topic and have some chit-chat </p>
    </div>


        <div class="row container-fluid text-center justify-content-center" style="margin-bottom: 1.5em;">
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="bussiness.php" ><div class="tile-1"><p>Business</p></div></a></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="entertainment.php" ><div class="tile-2"><p>Entertainment</p></div></a></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="general.php" ><div class="tile-3"><p>General</p></div></a></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="health.php" ><div class="tile-4"><p>Health</p></div></a></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="science.php" ><div class="tile-5"><p>Science</p></div></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="sports.php" ><div class="tile-6"><p>Sports</p></div></div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 tiles "><a href="technology.php" ><div class="tile-7"><p>Technology</p></div></div>
        </div>  
   

        
<?php
         }

else{

	echo "Not logged in";

} ?>


<?php 
		require 'include/footer.inc.php';
?>	

</body>
</html>