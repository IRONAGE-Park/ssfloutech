<?php
include_once('PHPMailer/PHPMailerAutoload.php');
function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file, $cc="", $bcc="") {
    if ($type != 1)
        $content = nl2br($content);
    $mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPSecure = "ssl";
	$mail->SMTPAuth = true;
	$mail->Host = "smtp.naver.com";
	$mail->Port = 465;
	$mail->Username = "ghooz1204";
	$mail->Password = "psch9612";
    $mail->CharSet = 'UTF-8';
    $mail->From = $fmail;
    $mail->FromName = $fname;
    $mail->Subject = $subject;
    $mail->AltBody = "";
    $mail->msgHTML($content);
    $mail->addAddress($to);
    $mail->addReplyTo($fmail, $fname);
    if ($cc) $mail->addCC($cc);
    if ($bcc) $mail->addBCC($bcc);
    if(isset($file)) { $mail->AddAttachment($file['tmp_name'], $file['name']); }
    return $mail->send();
}
echo "<script>";
if(mailer($_POST["user"], $_POST["email"], "ssfloutech@naver.com", $_POST["tel"]." ".$_POST["title"], $_POST["content"], 1, $_FILES['file'])) {
    echo "alert('성공적으로 전송되었습니다!');";
} else {
    echo "alert('전송에 오류가 생겼습니다! 잠시후 다시 시도해주세요.');";
}
echo "history.back(); </script>";
?>
