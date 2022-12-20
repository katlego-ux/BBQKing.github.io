<?php

if(isset($_POST['submit']))
{
$email = $_POST['name'];
 $guest =$_POST['people'];
 $time =$_POST['time'];
 $date = $_POST['date'];  

 $mailTo ='booking@thebraaiking.co.za';

 $subject ='New booking recieved' .$email;

 $htmlContent ='<h2>New booking request</h2>
 <p> <b>Client email: '.$email'</p> <br>
 <p> Number of guests: '.$guest'</p> <br>
 <p> Time: '.$time'</p><br>
 <p> Date: '.$date'</p>';
 
$headers = "from:" .$email;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$result =mail($mailTo, $subject, $htmlContent, $headers)

if($result){
    $success = "Thanking you for booking with BBQKing spitbraai. You will hear from us very soon"
}
else{
    $failed =" Sorry something went wrong please try again later";
}
}
?>