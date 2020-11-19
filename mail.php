<?php
$field_name = $_POST['inputFIO'];
$field_phone = $_POST['inputPhone'];
//$field_message = $_POST['message'];
$field_maila = $_POST['inputMail'];
$field_gorod = $_POST['inputGorod'];

if ($field_gorod == "") {
	$field_gorod = "---------";
}
if ($field_maila == "") {
	$field_maila = "---------";
}
if ($field_phone == "") {
	$field_phone = "---------";
}


$field_sender = 'Мясо. Заявка с лэндинга.';

$mail_to = 'meatpro196@gmail.com'; // email adresa tyt

$subject = 'Мясо. Заявка с лэндинга.';

//$body_message  = 'Форма: 3'."\n";
$body_message  = 'Имя: '.$field_name."\n";
$body_message .= 'Телефон: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_maila."\n";
$body_message .= 'Город: '.$field_gorod."\n";



$headers = 'From: '.$field_sender."\r\n";
//$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('ок');
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert('Ошибка');
    </script>
<?php
}
?>