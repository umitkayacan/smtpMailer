<?php

require("class.phpmailer.php"); // PHPMailer dosyam�z� �a��r�yoruz
$mail = new PHPMailer(); // S�n�f�m�z� $mail de�i�kenine atad�k

$mail->IsSMTP(); // Mailimizin SMTP ile g�nderilece�ini belirtiyoruz
$mail->From     = "info@yasamhastanesi.com.tr"; //G�nderen k�sm�nda yer alacak e-mail adresi
$mail->Sender   = "info@yasamhastanesi.com.tr";
$mail->ReplyTo  = "info@yasamhastanesi.com.tr";
$mail->FromName = "�zel Tekirdag Yasam Hastanesi";
$mail->Host     = "mail.yasamhastanesi.com.tr"; //SMTP server adresi
$mail->SMTPAuth = true; //SMTP server'a kullan�c� ad� ile ba�lan�lca��n� belirtiyoruz
$mail->Username = "info@yasamhastanesi.com.tr"; //SMTP kullan�c� ad�
$mail->Password    = "info2013ysm"; //SMTP �ifre
$mail->WordWrap = 50;
$mail->IsHTML(true); //Mailimizin HTML format�nda haz�rlanaca��n� bildiriyoruz.
$mail->Subject  = "Deneme Maili"; // Konu

//Mailimizin g�vdesi: (HTML ile)
$body = "<b>Bu mail</b> bir deneme mailidir.<br /><br />SMTP server ile g�nderilmi�tir.";

// HTML okuyamayan mail okuyucularda g�r�necek d�z metin:
$textBody = "Bu mail bir deneme mailidir. SMTP server ile g�nderilmi�tir.";

$mail->Body = $body;
$mail->AltBody = $text_body;

$mail->AddAddress("umitkayacan@yasamhastanesi.com.tr"); // Mail g�nderilecek adresleri ekliyoruz.
$mail->AddAddress("umt_xxx@hotmail.com");

if ($mail->Send()) echo "Mail g�nderildi";
else echo "Mail g�nderimi ba�ar�s�z";

$mail->ClearAddresses();
$mail->ClearAttachments();

?>