<?php

//add_comment.php
session_start();

$title = $_SESSION['til'];

$connect = new PDO('mysql:host=localhost;dbname=testing', 'root', '');

$error = '';
$comment_name = $_SESSION['username'];
$comment_content = '';

// if(empty($_POST["comment_name"]))
// {
//  $error .= '<p class="text-danger">Name is required</p>';
// }
// else
// {
//  $comment_name = $_POST["comment_name"];
// }

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO comment 
 (title, comment, comment_sender_name) 
 VALUES (:title, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title' => $title,
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>