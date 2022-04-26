<!DOCTYPE html>
<html>
<?php
error_reporting(E_ERROR | E_PARSE);
$url = "http://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=24e6305d8f71420ea52efc77d2b1eae8";
$response = file_get_contents($url);
$NewsData  = json_decode($response);
$conn = mysqli_connect("localhost","root","","testing");

?>

<head>
    <title>
        Vichaar-Vimarsh
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>


<head>
	<title>
		Vichaar-Vimarsh
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="custom-css/welcome.css">
</head> 
<body style="background-image: url('images/int-back.png');background-repeat: no-repeat;background-size: cover;">
    <header>
	<?php require 'include/header.inc.php'; ?> 
        
        </header>

<center><h1 style="border-bottom: 2px solid black;width: 40%;padding: 1em 1em .5em;">Sports Section</h1></center>




<div class="container-fluid" style="width: 90%;">
<?php
$title = array();
$josndata = '{}';
for ($x = 0; $x <= 4; $x++) {
    $News = $NewsData->articles[$x];

    $title[] = $News-> title;
    $_SESSION['title'] = $title;
    $query = "insert into bussiness values('$title[$x]','$josndata')";
    $select_query = "select * from bussiness where title='$title[$x]'";
    $result = mysqli_query($conn,$select_query);
    $row = mysqli_num_rows($result);
    if($row == 0){
        $res = mysqli_query($conn,$query);
    }

?>
<style type="text/css">
    .news-img{
        width: calc(100% - 1em); 
        height:90%; margin: 1em; 
        border-radius: 1em;
        border:2px solid black;
    }
    .news-img:hover{
        transform: scale(.9);
        border-radius: 0;
    }
    .news-title{
        text-align: center; font-size: 1.5em;
    }
    .news-title:hover{
        transform: scale(1.2);
    }
</style>
<div class="row element" style="margin: 1em; border-bottom: 2px solid black; padding:1em; height: auto;">
    <div class="col-4">
        <img src="<?php echo $News-> urlToImage  ?>" alt="newsthumb" class="news-img">
    </div>
    <div class="col-8">
        <form action="bussiness-act.php" method="post">
        <h3 class="news-title" style=""><?php echo $News-> title  ?><input type="hidden" name="title" value=<?php echo str_replace(' ', '_', $News-> title);?> /></h3>
        <p style="font-size: 1.2em;height: auto;text-align: center;padding:2em; "><?php echo $News-> description  ?></p>
        <div class="row" style="">
           
            <div class="col-6">
            <center><input type="submit" value="Comment" class="login w-50" style="border-radius: .5em;font-size: auto;"></center>
            </div>
            
            <div class="col-6">
                  <center><button class="login w-50 " style="border-radius: .5em;"><?php echo "<a href=".$News -> url." style='color:white; text-decoration: none;font-size:auto;' target='_blank'>Read More</a>"?></button></center>
            </div>
            
        </div>
        </form>
    </div>

</div>


<?php
}
?>
<style type="text/css">
    .prev-page{
        float: left;
        margin: 0 1.5em 1em;

        padding: .3em;
        background-color: lightblue;
        text-decoration: none;
        color: black;
        font-size: 1.2em;
        width: 6em;
        text-align: center;
        border-radius: .5em;
        border:1px solid black;
    }
    .prev-page:hover{
        color: black;
        text-decoration: none;
        border-radius: .2em;
        transform: scale(1.2);
    }
</style>
<a href="science.php" class="prev-page">PrevPage</a>
<a href="technology.php" class="prev-page" style="float: right;">NextPage</a>

</div>
 <!-- Footer -->

	<?php  require 'include/footer.inc.php'?>
    <!-- Footer -->
   </body>

</html>