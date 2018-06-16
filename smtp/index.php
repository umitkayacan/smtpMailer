<?php

require("class.phpmailer.php"); // PHPMailer dosyamýzý çaðýrýyoruz
$mail = new PHPMailer(); // Sýnýfýmýzý $mail deðiþkenine atadýk

$mail->IsSMTP(); // Mailimizin SMTP ile gönderileceðini belirtiyoruz
$mail->From     = "info@yasamhastanesi.com.tr"; //Gönderen kýsmýnda yer alacak e-mail adresi
$mail->Sender   = "info@yasamhastanesi.com.tr";
$mail->ReplyTo  = "info@yasamhastanesi.com.tr";
$mail->FromName = "Özel Tekirdag Yasam Hastanesi";
$mail->Host     = "mail.yasamhastanesi.com.tr"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullanýcý adý ile baðlanýlcaðýný belirtiyoruz
$mail->Username = "info@yasamhastanesi.com.tr"; //SMTP kullanýcý adý
$mail->Password    = "info2013ysm"; //SMTP þifre
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML formatýnda hazýrlanacaðýný bildiriyoruz.
$mail->Subject  = "Deneme Maili"; // Konu

//Mailimizin gövdesi: (HTML ile)
$body = "<b>Bu mail</b> bir deneme mailidir.<br /><br />SMTP server ile gönderilmiþtir.";

// HTML okuyamayan mail okuyucularda görünecek düz metin:
$textBody = "Bu mail bir deneme mailidir. SMTP server ile gönderilmiþtir.";

$mail->Body = $body;
$mail->AltBody = $text_body;

$mail->AddAddress("umitkayacan@yasamhastanesi.com.tr"); // Mail gönderilecek adresleri ekliyoruz.
$mail->AddAddress("umt_xxx@hotmail.com");

if ($mail->Send()) echo "Mail gönderildi";
else echo "Mail gönderimi baþarýsýz";

$mail->ClearAddresses();
$mail->ClearAttachments();

?>