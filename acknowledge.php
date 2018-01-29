<!DOCTYPE html>
<html>
<body>
	<?php if(isset($success) && $success){
		header('Location: success/success.html');
		} else{
			header('Location: success/failed.html');
		}?>
</body>
</html>
<?php


if(isset($_POST['submit'])){
	$to = 'midhun.rnair011@gmail.com';
	$subject = 'Feedback from '.$_POST['fullname'];
	$comment='Name: '.$_POST['fullname']."\r\n\r\n";
	$comment.='E-mail: '.$_POST['email']."\r\n\r\n";
	$comment.='Message: '.$_POST['message'];
	$headers = "From: midhun-nair.com\r\n";
	$headers.='Content-Type: text/plain; charset=utf-8';
	$email= filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
		if($email){
				$headers.="\r\nReply-To:$email";
		}
	$success = mail($to, $subject, $comment, $headers,'-fmidhun.rnair011@gmail.com');


}


?>