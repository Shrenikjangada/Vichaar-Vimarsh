<!DOCTYPE html>
<html>


<?php 
	require 'include/header.inc.php';
	
?>
<body>

    <!-- main body -->


    <div class="row">
    	<div class="col-6 main-text">
        <h1 class="text-center">Welcome To Vichar-Vimarsh</h1>
            <p class="text-center">Don't just think , <strong>Express</strong> yourself</p>
        </div>
        <div class="col-6 main-image">
            <img src="images/family_meeting_web.jpg">
        </div>
    </div>
    <div class="main-border"></div>

    <div class="three-box box1 text-center">
        <h3>Read</h3>
        <p>Get updated , know more , think more</p>
        <p><i>“Today a reader, tomorrow a leader.” ~ Margaret Fuller</i></p>
    </div>


    <div class="three-box box2 text-center">
        <h3>Present</h3>
        <p>Tell others what you think and feel</p>
        <p><i>"If you're presenting yourself with confidence, you can pull off pretty much anything." ~ Katy Perry</i></p>
    </div>


    <div class="three-box box3 text-center">
        <h3>React</h3>
        <p>Express how you feel about others thoughts</p>
        <p><i>It's not what happens to you , but how you react to it that matters ~ Epictetus</i></p>
    </div>


<?php 
    if (isset($_SESSION['username'])) {
        echo "<style type='text/css'>
    .signup{
        display: none;
    }
</style>";
    }
?>


    <div class="signup">
        <a href="register.php">
            <h1>Register for free now</h1>
        </a>
    </div>

   </body>


    <!-- Footer -->
	<?php 
		require 'include/footer.inc.php';
	?>
    

</html>