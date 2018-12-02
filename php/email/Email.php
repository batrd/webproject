<?php
header( "content-type:text/html;charset=utf-8" );
use PHPMailer\ PHPMailer\ PHPMailer;
use PHPMailer\ PHPMailer\ Exception;
include( "PHPMailer.php" );
include( "Exception.php" );
include( "SMTP.php" );
$sname = $_POST[ "sname" ];
$email = $_POST[ "email" ];
$contant = $_POST[ "contant" ];
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP 
$mail->Host = "smtp.qq.com"; // SMTP servers 
$mail->SMTPAuth = true; // turn on SMTP authentication 
$mail->Username = "1278710278@qq.com"; // SMTP username 注意：普通邮件认证不需要加 @域名 
$mail->Password = "dlqhgykbqfqaggad"; // SMTP password 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->From = "1278710278@qq.com"; // 发件人邮箱 
$mail->FromName = "1278710278"; // 发件人 
$mail->CharSet = "utf-8"; // 这里指定字符集！ 
$mail->Encoding = "base64";
$mail->AddAddress( "1278710278@qq.com", "toyou" ); // 收件人邮箱和姓名 
$mail->AddReplyTo( "1278710278@qq.com", "wo" );
//$mail->WordWrap = 50; // set word wrap 换行字数 
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment 附件 
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); 
$mail->IsHTML( true ); // send as HTML 
// 邮件主题 
$subject = "有人联系你了";
$mail->Subject = $subject;
// 邮件内容 
$mail->Body = "姓名:" . $sname . "<br>邮件地址:<br>" . $email . "<br>内容:<br>" . $contant;
$mail->AltBody = "text/html";
if ( !$mail->Send() ) {
	echo "邮件发送有误 <p>";
	echo "邮件错误信息: " . $mail->ErrorInfo;
	exit;
} else {
	echo "邮件发送成功!";
}
?>