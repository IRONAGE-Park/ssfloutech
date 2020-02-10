<?php
include_once('PHPMailer/PHPMailerAutoload.php');
// 네이버 메일 전송
// 메일 -> 환경설정 -> POP3/IMAP 설정 -> POP3/SMTP & IMAP/SMTP 중에 IMAP/SMTP 사용

// 메일 보내기 (파일 여러개 첨부 가능)
// mailer("보내는 사람 이름", "보내는 사람 메일주소", "받는 사람 메일주소", "제목", "내용", "type");
// type : text=0, html=1, text+html=2

// ex) mailer("kOO", "zzxp@naver.com", "zzxp@naver.com", "제목 테스트", "내용 테스트", 1);
function mailer($fname, $fmail, $to, $subject, $content, $type=0, $file, $cc="", $bcc="") {
    if ($type != 1)
        $content = nl2br($content);

    $mail = new PHPMailer(); // defaults to using php "mail()"
	
	$mail->IsSMTP(); 
//	$mail->SMTPDebug = 2; 
	$mail->SMTPSecure = "ssl";
	$mail->SMTPAuth = true; 

	$mail->Host = "smtp.naver.com"; 
	$mail->Port = 465;  // ??
	$mail->Username = "ghooz1204"; // 아이디.
	$mail->Password = "psch9612";  // 패스워드.

    $mail->CharSet = 'UTF-8';
    $mail->From = $fmail;
    $mail->FromName = $fname;
    $mail->Subject = $subject;
    $mail->AltBody = ""; // optional, comment out and test
    $mail->msgHTML($content);
    $mail->addAddress($to);
    $mail->addReplyTo($fmail, $fname);
    if ($cc)
        $mail->addCC($cc);
    if ($bcc)
        $mail->addBCC($bcc);
    /*
    if ($file != "") {
        foreach ($file as $f) {
            $mail->addAttachment($f['path'], $f['name']);
        }
    }
    */
    if(isset($file)) { $mail->AddAttachment($file['tmp_name'], $file['name']); }
    return $mail->send();
}
/* 파일을 첨부함
function attach_file($filename, $tmp_name) {
    // 서버에 업로드 되는 파일은 확장자를 주지 않는다. (보안 취약점)
    $dest_file = '경로지정/tmp/'.str_replace('/', '_', $tmp_name);
    move_uploaded_file($tmp_name, $dest_file);
    $tmpfile = array("name" => $filename, "path" => $dest_file);
    return $tmpfile;
}
*/
$send_email = $_POST["email"]; // 송신자의 이메일
$send_user = $_POST["user"]; // 송신자의 이름
$send_tel = $_POST["tel"]; // 송신자의 전화번호
$send_message = $_POST["content"]; // 송신 내용
$send_title = $_POST["title"]; // 송신 제목
$file = $_FILES['file']; // 첨부 파일

echo "<script>";
if(mailer($send_user, $send_email, "ssfloutech@naver.com", $send_tel." ".$send_title, $send_message, 1, $file)) {
    echo "alert('성공적으로 전송되었습니다!');";
} else {
    echo "alert('전송에 오류가 생겼습니다! 잠시후 다시 시도해주세요.');";
}
echo "history.back(); </script>";
?>
