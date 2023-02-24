<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$to = "kazihasin12@gmail.com";


$subject = "Contact me on my Portfolio";


$message =  $_POST['message'];

$headers = "From: ". $_POST['email'] . "\r\n" .
"Name ". $_POST['name'];


$result = mail($to, $subject, $message, $headers);


if ($result) {
   mail($_POST['email'], "Reply From Kazi Hasin", "Thank You {$_POST['name']} for Contact me. I will quickly connect you.");
 $_SESSION['message'] = "<h4><span class='check'> &check;</span>Email sent successfully.</h4>";
    header("Location: index.php");
} else {
   $_SESSION['message'] = "<h4><span class='check'> &#9888;</span>Email Sending Failed.</h4>";
    header("Location: index.php");
}

}
?>
