<?php 
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$topic = $_POST['topic'];

$headers = 'From: Uriel' . "\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$returnpath = $email;
$recipient = "office@ibereolica.com";
$topicprime = "From: $name $surname" . "\r\n" . "Email: $email" . "\r\n" . "Message: $topic";
$subjectprime = " URIEL STRONA topic: $subject";
mail($recipient, $subjectprime, $topicprime, $headers, $returnpath);
header("Location: index.html")
?>