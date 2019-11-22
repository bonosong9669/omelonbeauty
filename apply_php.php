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
/////////////////////  파일 업로드   ////////////////////////
$allowed_ext = array('jpg','jpeg','png','gif','PNG','JPG','JPEG','GIF','ppt','pptx','pdf','hwp','doc','docx','PPT','PPTX');
$category = $_POST['category'];
$apply_name = $_POST['apply_name'];
$phone = $_POST["phone"];
$email = $_POST["email"];
//echo $apply_name."<br>";

// 파일 업로드 오류 확인
if( !isset($_FILES['upload']['error']) ) {
	echo json_encode( array(
		'status' => 'error',
		'message' => '파일이 첨부되지 않았습니다.'
	),JSON_UNESCAPED_UNICODE);
	exit;
}
$error = $_FILES['upload']['error'];
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			$message = "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			$message = "파일이 첨부되지 않았습니다. ($error)";
			break;
		default:
			$message = "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	echo json_encode( array(
		'status' => 'error',
		'message' => $message
	),JSON_UNESCAPED_UNICODE);
	exit;
}

//배우 이름으로 폴더 생성
//$apply_name_cp949 = iconv("utf-8","CP949",$apply_name); //한글 이름을 변환 (utf-8 ->cp949)
//$dir_name = "apply_upload/".$apply_name_cp949; //폴더명 이름만
//$dir_name = "apply_upload/".$apply_name_cp949.'-'.$phone; //폴더명 이름+전화
//$dir_name = "apply_upload/".$apply_name_cp949.'-'.$email; //폴더명 이름+이메일
//$dir_name = "apply_upload/".$category.'_'.$apply_name_cp949.'_'.$phone.'_'.$email; //폴더명 이름+이메일
$dir_name = "apply_upload/".$category.'_'.$apply_name.'_'.$phone.'_'.$email; //폴더명 이름+이메일
if (!is_dir($dir_name)) {
	mkdir($dir_name, 0777);
}

// 변수 정리 -> 확장자 추출
$file_name = $_FILES['upload']['name'];
$file_name = str_replace("%","",$file_name);// 특수문자 처리
$file_name = str_replace("&","",$file_name);//  특수문자 처리
$file_name_cp949 = iconv("utf-8","CP949",$file_name);
$pre_ext = explode('.', $file_name_cp949); //확장자 추출
$ext = array_pop($pre_ext);//확장자 추출

// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo json_encode( array(
		'status' => 'error',
		'message' => '파일확장자가 다릅니다.'
	),JSON_UNESCAPED_UNICODE);
	exit;
}

// $target_dir = $dir_name."/".$file_name_cp949; // 원래 파일 이름으로 업로드
$email_rand = $email.'_'.rand(10,100);/// 이메일 주소 + 난수
$target_dir = $dir_name."/".$email_rand.'.'.$ext; // 파일 이름을 이메일 이름으로 업로드

if (isset($_FILES['upload']) && $_FILES['upload']['error'] == 0) {
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $target_dir)) {
        echo "upload 성공!!";
        //header("Location: apply_result/o.html"); //페이지 리다이렉션!

        /////////// 신청자 접수 메일 + 제작사에 첨부파일 보내기 //////////////////////
        include_once 'apply_to_send_email.php';
    }



}else { // 파일 업로드 실패했을 때
  header("Location: apply_result/x.html"); //페이지 리다이렉션! 실패
}
/////////////////////  끝_ 파일 업로드   ////////////////////////
?>


<?php
  /////////////////////////////////////////////////////////////////
  ////////////////////  제작사 메일로  파일 리턴 ////////////////

//include_once 'apply_to_send_email.php';


  //////////////////// 끝_ 제작사 메일로 리턴 ////////////////////////
   ?>
