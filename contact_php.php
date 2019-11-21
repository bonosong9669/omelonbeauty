<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
$name = $_POST['name'];
$email = $_POST["email"];
$comment = $_POST["comment"];

//echo $name."<br>";


//////////////// 메일 보내기  PHPMailer ////////////////////////
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer/PHPMailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // 한글 인코딩
   $mail->CharSet = 'UTF-8'; //메일 제목, 본문 한글 깨짐 없음
   $mail->Encoding = 'base64';
   //Server settings
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
   $mail->isSMTP();                                            // Send using SMTP
   //$mail->Host       = 'ssl://smtp.naver.com';
   $mail->Host       = 'ssl://smtp.gmail.com';                    // Set the SMTP server to send through
   $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   //$mail->Username   = 'bonosong';
   $mail->Username   = 'digicon69@gmail.com';                     // SMTP username
   $mail->Password   = 'gforcedynamic';
   //$mail->Password   = 'starwars9669';                               // SMTP password
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
   //$mail->Port       = 587;
   $mail->Port       = 465;                                    // TCP port to connect to


   ////////////////////////////////////////////////////////////
   //// *********문의자에게 접수 이메일 보내기 **********//////

   //Recipients
   $mail->setFrom('digicon69@gmail.com', '오멜론 뷰티크리에이터');
   $mail->addAddress($email, $name);     // Add a recipient
   //$mail->addAddress('bonosong@naver.com');               // Name is optional
   //$mail->addReplyTo('digicon69@gmail.com', 'Information');
   //$mail->addCC('bonosong@naver.com');
   //$mail->addBCC('bonosong@naver.com');

   // Attachments
   //$mail->addAttachment('img/song.jpg');         // Add attachments
   //$mail->addAttachment('img/song_.jpg', 'new.jpg');    // Optional name

   // Content
   $mail->isHTML(true);
   $subject="오멜론뷰티대회 문의 받았습니다."; // 제목 한글 만들기
 //  $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
 //$subject .= '-'.'01062113039'.'-'.'bonosong@naver.com';
   $mail->Subject = $subject;                       // Set email format to HTML
 //  $mail->Subject = 'Here is the subject. hello world';

   $mail->Body    = '<b>'.$name.'</b>님의 문의를 받았습니다. <br>
                     보내주신 이메일로 빨리 답변드리겠습니다.
                     <br> 감사합니다 <br>'.$email;
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   //$mail->SMTPDebug = 2;//추가

   $mail->send();



///////////////////////////////////////////////////////////////
//// *********제작사에 이메일 보내기 **********//////
    $mail->addAddress('bonosong@naver.com', 'song changsoo');
    $mail->addReplyTo($email, $name);

    // Attachments
  // $target_dir = $dir_name."/".$file_name_cp949;
  // $mail->addAttachment($target_dir);         // Add attachments
    // Content
    $mail->isHTML(true);
    $subject="문의: ".$name."오멜론 뷰티대회"; // 제목 한글 만들기
    //  $subject = "=?UTF-8?B?".base64_encode($subject)."?=";
    //$subject .= '-'.'01062113039'.'-'.'bonosong@naver.com';
    $mail->Subject = $subject;                       // Set email format to HTML
    //  $mail->Subject = 'Here is the subject. hello world';

    $mail->Body    = '이름 : <b> '.$name.'</b><br>
                      메일 : <b> '.$email.'</b><br>
                      문의 내용 : <b> '.$comment.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();

   //echo 'Message has been sent';
   header("Location: contact_result/o.php"); //페이지 리다이렉션!

} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//////////////////// 끝_ 신청자에게  신청 인사 ////////////////////////
?>
