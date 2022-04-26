

<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 
 </head>
 <body>
  <style type="text/css">
    body{
      background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("images/comment-back.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;

    }
    .form-control{
      width: 100%;
      opacity: .6;
      border-radius: 1em;
    
    }
    .form-control:hover{
      transform: scale(1.1);
    }
    


    #submit{
      width:15%;
      font-size: 1.5em; 
      border-radius: 1em;
    }
    .mid-part{
      height: 100vh;
    }
    .custom-nav{
      background-color: rgba(44, 47, 64,1);
    }
    .footer-ele{
      width: 100%;
      float: left;
      background-color: rgba(44, 47, 64,.9);
    }
    .news-title{
      font-size: 2em;
      margin: .5em 2em 1em;
      color: #FFEFD5;
    }
    .news-title:hover{
      transform: scale(1.1);
    }
  </style>
<?php 
  require 'include/header.inc.php';
  
?>
<?php

$name = $_SESSION['username'];
$title = str_replace('_', ' ', $_POST['title']);
$_SESSION['til'] = $title;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <h2 align="center" class="news-title"><?php echo $title ?></h2>
 
  <div class="container mid-part">
   <form method="POST" id="comment_form">
    <div class="form-group">
    <!-- <label for="">Shrenik</label> -->
     <h4 style="margin-left: auto;color: #B0E0E6;font-size: 1.2em;"><?php echo $name." :"?></h3>
    </div>
    <div class="form-group">
     <center><textarea name="comment_content" id="comment_content" class="form-control" placeholder="What are your thoughts on this." rows="5"></textarea></center>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <center><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit"></center>
    </div>
   </form>
   <span id="comment_message" class="text-green"></span>
   <br />
   <div id="display_comment" style="color: #ADFF2F;"></div>
  </div>


<footer class="page-footer font-small teal pt-4 footer-ele">
          <div class="container-fluid text-center text-md-left">
            <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3 text-center text-white">
                      <h5 class="text-uppercase font-weight-bold">Rajesh</h5>
                      <p><i>"This discussion forum works considerably well."</i></p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-6 mb-md-0 mb-3 text-center text-white">
                      <h5 class="text-uppercase font-weight-bold">Om Prakash</h5>
                          <p><i>"This website works so well."</i></p>
                    </div>

              </div>
          </div>
        <div class=" text-center py-3">
            <a href="index.php"> vichaar-vimarsh.com</a>
        </div>
    </footer>



 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>



