<?php 
	require 'smtp/class.phpmailer.php';		
	$mail = new PHPMailer();
	$mail->IsSMTP(true);
	$mail->SMTPAuth   = true;
	$mail->Mailer = "smtp";
	$mail->Host= "mail.sunucu.com";
	$mail->Port = 587;
	$mail->Username = "no-reply@sunucu.com";  // SMTP  Username
	$mail->Password = "Şifre buraya gelir";  // SMTP Password
	$mail->SetFrom('no-reply@sunucu.com', 'sunucu.com');
	$mail->Subject = "İletişim Formu";
	$mail->MsgHTML($yenimesaj);
	$mail->AddAddress("gonderilecekadres1@gmail.com", "gonderilecekadres1@gmail.com");
	$mail->AddAddress("gonderilecekadres2@gmail.com", "gonderilecekadres2@gmail.com");
	$mail->AddAddress("gonderilecekadres3@gmail.com", "gonderilecekadres3@gmail.com");
	$mail->AddAddress("gonderilecekadres4@gmail.com", "gonderilecekadres4@gmail.com");
	$mail->AddAddress("gonderilecekadres5@gmail.com", "gonderilecekadres6@gmail.com");
	if ($mail->Send())
	{
		echo "Gönderildi";
	}
	else
	{
		echo "Hata";
	}


?>