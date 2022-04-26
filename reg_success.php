<html>

<body>
	      <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        .bg-img{
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/vichaar-vimarsh_final/images/success.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin: 0;
            float: left;
            width: 100%;    
        }
        .reg_suc_txt{
            text-align: center;
            font-size: 5em;
            margin: 2em;
            color: white;

}   
        </style>

<?php
	require 'include/header.inc.php';

	echo "<div class='bg-img'>";

	

		
		echo "<center><div class='reg_suc_txt'>Registration Successful  Please Login again</div></center>";
	
echo "</div>";
	

	require 'include/footer.inc.php';

?>
</body>




</html>