<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/vichaar-vimarsh/styles.css">
      <style type="text/css">
        body{
            margin: 0;
            padding: 0;
        }
        .bg-img{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/wrong-info.jpg');
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
</head>
<body>
    <header>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button custom-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><em class="text-white">Vichaar-vimarsh</em></a>
        
                   
                    <span class="navbar-text actions"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="login">Login</button></span>
                </div>
            
        </nav>
    </div>
    </header>

    
    <div class="bg-img">
    <div id="id01" class="modal">

<form class="modal-content animate" action="login-action.php" method="POST">
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <!-- ########################################################################## -->
        <button type="submit" class="login">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn login">Cancel</button>

        <span class="register">Don't have an account , Register now <button type="submit"><a href="register.html">Register</a></button></span>

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



<?php
$username = $_POST['uname'];
$password = $_POST['psw'];

$conn = mysqli_connect("localhost","root","","testing");

$select_query = "select * from register where username='$username' && password ='$password'";

$result = mysqli_query($conn,$select_query);
$row = mysqli_num_rows($result);

if($row != 0){
    session_start();
    $_SESSION['username'] = $username;
    header('location:welcome.php');

}
else {
    echo "<h2 class='reg_suc_txt'>Wrong Username Or Password<br><br>Please<a href='/vichaar-vimarsh/index.html'> try again</a></h2>";
    
}
?>
</div>
<footer class="page-footer font-small teal pt-4 footer-ele">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3 text-center text-white">
        <h5 class="text-uppercase font-weight-bold">Best</h5>
        <p><i>"Best site ever"</i></p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-6 mb-md-0 mb-3 text-center text-white">
        <h5 class="text-uppercase font-weight-bold">Awesome</h5>
        <p><i>"Very interesting experience"</i></p>
      </div>

    </div>
  </div>
  <div class=" text-center py-3">
    <a href="https://mdbootstrap.com/"> site.address.com</a>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>



