<?php	
	function sendOTP($email,$otp) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');
	
		$message_body = "Dear Sir/Ma'am,<br/> Hope you are doing well. We have recieved your payment.<br> Thank you. <br><br></br> Best Regards<br></br> Event Manager ABC ";
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "fanachow92@gmail.com";
		$mail->Password = "GOOGLE92";
		$mail->Host     = "smtp.gmail.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("fanachow92@gmail.com", "web");
		$mail->AddAddress($email);
		$mail->Subject = "Payment Recieved";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
	

?>