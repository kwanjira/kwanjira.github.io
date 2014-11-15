<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=tis-620" />
<title>µÔ´µèÍàÃÒ</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
if(isset($_POST['sendmail'])){
	$name = $_POST['name'];	
	$email = $_POST['email'];	
	$website = $_POST['website'];	
	$subject = $_POST['subject'];	
	$message = $_POST['message'];
	$to = "princesskwann@gmail.com";
	if(empty($name) OR empty($email) OR empty($subject) OR empty($message)){
	echo "<div class='errors'>คุณกรอกข้อมูลไม่ครบทุกช่อง</div>";
	}else{
	@mail($to,$subject,$message,"From: $name  <$email>");
	echo "<div class='done'>ขอบคุณที่ติดต่อกลับมา</div>";
	}
}?>
<form action="" class="form" method="post" name="contact">
<fieldset>
<legend>ติดต่อเรา</legend>
<table align="center" width="100%">
<tr>
<td class="formfont">Name </td>
<td><input name="name" type="text" size="40" /></td>
</tr>
<tr>
<td class="formfont">Email </td><td><input name="email" type="text" size="40" /></td>
</tr>
<tr>
<td class="formfont">Website</td><td><input name="website" type="text" size="40" /></td>
</tr>
<tr>
<td class="formfont">Subject</td><td><input name="subject" type="text" size="40" /></td>
</tr>
<tr>
<td valign="top" class="formfont">Message</td><td><textarea name="message" cols="37" rows="5"></textarea></td>
</tr>
<tr>
<td colspan="2" align="right" style="padding-right:33px;"><input name="sendmail" type="submit" value="Send Email" /></td>
</tr>
</fieldset>
</table>
</form>
</body>
</html>