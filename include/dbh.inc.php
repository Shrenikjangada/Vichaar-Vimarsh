<?php 


	$conn = mysqli_connect("localhost","root","","testing");
	

	if(!$conn){
		
		die("Connection failed : ".myssqli_connect_error());
	}
	