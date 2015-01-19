<?php

// ชื่อไฟล์ sendmail.php เพื่อรับค่าจาก form 

$MailTo = $_POST['MailTo'] ;
$MailFrom = $_POST['MailFrom'] ;
$MailSubject = $_POST['MailSubject'] ;
$MailMessage = $_POST['MailMessage'] ;

$Headers = "MIME-Version: 1.0\r\n" ;
$Headers .= "Content-type: text/html; charset=windows-874\r\n" ;
// ส่งข้อความเป็นภาษาไทย ใช้ "windows-874"
$Headers .= "From: ".$MailFrom." <".$MailFrom.">\r\n" ;
$Headers .= "Reply-to: ".$MailFrom." <".$MailFrom.">\r\n" ;
$Headers .= "X-Priority: 3\r\n" ;
$Headers .= "X-Mailer: PHP mailer\r\n" ;

if(mail($MailTo, $MailSubject , $MailMessage, $Headers, $MailFrom))
{
echo "Send Mail True" ; //ส่งเรียบร้อย
}else{
echo "Send Mail False" ; //ไม่สามารถส่งเมล์ได้
}

?>