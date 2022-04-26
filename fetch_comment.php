<?php
session_start();
$title = $_SESSION['til'];

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$query = "
SELECT * FROM comment
WHERE title='$title'
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b></div>
  <div class="panel-body">'.$row["comment"].'</div>
  
 </div>
 ';
//  $output .= get_reply_comment($connect, $row["comment_id"]);
}

 echo $output;



?>
