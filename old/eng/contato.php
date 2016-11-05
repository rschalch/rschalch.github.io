<?php

require_once("class.phpmailer.php");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$msg =
	'<html>
		<head>
			<title>Contato</title>
		</head>
		<body>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td height="30" colspan="2" bgcolor="#996600"><span   style="color: #FFFFFF; font-family: Verdana, Geneva, sans-serif; font-size: smaller; ">RBS PORTFOLIO</span></td>
			  </tr>
			  <tr>
			    <td width="300" height="20"><font face="Verdana, Geneva, sans-serif" size="-1">Nome:</font></td>
			    <td height="20"><span  style="font-family: Verdana, Geneva, sans-serif; font-size: smaller; ">' .$name. '</span></td>
			  </tr>
			  <tr>
			    <td width="300" height="20"><font face="Verdana, Geneva, sans-serif" size="-1">Email:</font></td>
			    <td height="20"><span  style="font-family: Verdana, Geneva, sans-serif; font-size: smaller; ">' .$email. '</span></td>
			  </tr>
			  <tr>
			    <td width="300" height="20"><font face="Verdana, Geneva, sans-serif" size="-1">Mensagem:</font></td>
			    <td height="20"><span  style="font-family: Verdana, Geneva, sans-serif; font-size: smaller; ">' .$message. '</span></td>
			  </tr>
			</table>
		</body>
	</html>';

$phpMail = new PHPMailer();
$phpMail->FromName 		= $name;
$phpMail->From 		= $email;

/*$phpMail->AddAddress("rbs@rbs.web44.net");*/
$phpMail->AddAddress("ricardo.schalch@gmail.com");

$phpMail->Subject 		= "Visita Portfolio de ".$name;
$phpMail->Body 			= $msg;
$phpMail->isHTML(true);
$phpMail->CharSet = 'UTF-8';

if($phpMail->Send())
	header('Location: http://rbs.web44.net');
else
	echo 'Failed! Try again later!';

/*$to = "rbs@rbs.web44.net";
$subject = "Visita Portfolio de ".$name;

$headers  = "From: $email\r\n";
$headers .= "Reply-To: $to\r\n";
$headers .= "Return-Path: $to\r\n";
$headers .= "X-Mailer: PHP/" . phpversion(). "\r\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; UTF-8' . "\r\n";

if(mail($to,$subject,$msg,$headers))
	echo 'SENT';
else
	echo 'Failed!';*/