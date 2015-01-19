<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = “princesskwann@gmail.com”;
if(empty($name) OR empty($email) OR empty($subject) OR empty($message)){
echo “<div class=’errors’>คุณกรอกข้อมูลไม่ครบทุกช่อง</div>”;
}else{
@mail($to, $subject, $message,”From: $name  <$email>”);
echo “<div class=’pass’>ได้รับข้อมูลเรียบร้อย ทางเราจะรีบติดต่อกลับท่านโดยเร็วที่สุด ขอบคุณมากค่ะ</div>”;
}
?>