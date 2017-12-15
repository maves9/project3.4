<?php

$email = $_GET['email'];
$name = $_GET['name'];
$checkbox = $_GET['checkbox'];

//beskedens indhold
$to = $email;
$subject = 'Kære: "' .$name.'"' ;
$headers = 'From: '.$email."\r\n".
            'Reply-To: '.$email."\r\n".
            'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "tak for at du prøvede vores quiz";
if ($checkbox === 'true') {
  $message .= '<br><br>vi vil herfra sende dig nyheder ugeligt';
}else{
  $message .= '<br><br>Du ønskede ikke nyhedsbrev. Ombestemmer du dig kan du trykke <a href="#">her</a>';
}
  $message .="<br><br>Med venlig hilsen<br> Jagt og Fiskerimagasinet";

mail($to, $subject, $message, $headers, "From: " . $name); // send mailens indhold

 ?>
