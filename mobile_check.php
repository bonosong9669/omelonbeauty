<?php
//PC? 모바일? 체크 함수
/*function MobileCheck() {
    global $HTTP_USER_AGENT;
    $MobileArray  = array("iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","sony","phone");

    $checkCount = 0;
        for($i=0; $i<sizeof($MobileArray); $i++){
            if(preg_match("/$MobileArray[$i]/", strtolower($HTTP_USER_AGENT))){ $checkCount++; break; }
        }
   return ($checkCount >= 1) ? "Mobile" : "Computer";
}

if(MobileCheck() == "Mobile") {
  echo "mobile";
}else {
  echo "pc";
}
*/

class module {
		function mobileConcertCheck() {
            $mobileArray = array(
                  "iphone"
                , "lgtelecom"
                , "skt"
                , "mobile"
                , "samsung"
                , "nokia"
                , "blackberry"
                , "android"
                , "sony"
                , "phone"
            );

			$checkCount = 0;
			for($num = 0; $num < sizeof($mobileArray); $num++) {
				if(preg_match("/$mobileArray[$num]/", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                                        $checkCount++;
                                        break;
                        	}
			}
			return ($checkCount >= 1) ? "mobile" : "computer";
		}
	}


  $obj = new module();
/*
  	if($obj -> mobileConcertCheck() == "mobile") {
  		echo "현재 보고계신 화면은 모바일 입니다.";
  	} else {
  		echo "현재 보고계신 화면은 컴퓨터 입니다.";
  	}
*/
?>
