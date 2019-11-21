<?php
//PC? 모바일? 체크 함수
function MobileCheck() {
    global $HTTP_USER_AGENT;
    $MobileArray  = array("iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone");

    $checkCount = 0;
        for($i=0; $i<sizeof($MobileArray); $i++){
            if(preg_match("/$MobileArray[$i]/", strtolower($HTTP_USER_AGENT))){ $checkCount++; break; }
        }
   return ($checkCount >= 1) ? "Mobile" : "Computer";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>오멜론 뷰티크리에이터</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
    background-color: #000;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }

  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 1;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
  /*-webkit-filter: grayscale(40%);*/
  /*filter: grayscale(40%);*/ /* make all photos black and white */
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    /*background-color: #2d2d30;*/
    background-color: #000;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    background-color: #000;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    /*background-color: #2d2d30;*/
    background-color: #000;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { /* 로고 글자 */
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }

  footer {
    /*background-color: #2d2d30;*/
    background-color: #000;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  .career {color:#fff;}
  #main_copy {
    font-size:13px;
    font-weight:500;
    color:rgb(0, 191, 255);
 }
 .navbar-brand .logo {
   font-weight: bold;
 }
 .thumbnail {
   padding: 0 0 15px 0;
   border: none;
   border-radius: 0;
   background-color: #000;
 }
 #band {
   padding-top: 10px;
   padding-bottom: 10px;
 }


 /***********모바일 경우 ******************/
 @media (max-width: 768px) {
   #main_copy { /* 로고 글자 */
     font-size:13px !important;
   }
   .navbar li a, .navbar .navbar-brand { /* 로고 글자 */
     color: #d5d5d5 !important;
     font-size: 14px;
   }
  #carousel_img1 {
     margin-top: 30px;
   }
   #carousel_img2 {
      margin-top: 30px;
    }

 }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- navigation -->
<?php include_once("nav.html"); ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
            <img src="img/landing_img_a.jpg" id="carousel_img1" alt="" width="1200" height="700">
      <div class="carousel-caption">
          <h1>O'melon</h1>
          <p>뷰티크리에이터 선발대회</p>
        </div>
      </div>

     <div class="item">
        <img src="img/landing_img_b.jpg" id="carousel_img2" alt="" width="1200" height="700">
        <div class="carousel-caption">
          <h1>O'melon</h1>
          <p>크리에이터 부문 / 액터 부문</p>
        </div>
      </div>



<!--
    <div class="item">
            <img src="landing_img_7.jpg" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
              <h3>LA</h3>
              <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div>
          </div>
        </div>-->

  </div>


    <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>


<!-- Container (The Band Section) -->
<div id="band" class="container text-center aaa">

  <!-- 메인 카피 문구 -->
  <?php
  if(MobileCheck() == "Mobile"){ //echo"현재 휴대폰으로 접속했습니다.";?>
   <!--  모바일 접속 -->
   <p><span id="main_copy">기업과 함께 성장하는<br><span style="font-weight:bold;">오멜론 뷰티크리에이터</span><br> 선발대회</span></p>
   <span style="color:rgb(0, 191, 255);font-weight:bold;"><p>알리바바 TOP 왕홍들과의 콜라보</p></span>

  <?php }else{ //echo "현재 컴퓨터로 접속했습니다."; ?>
    <!--  PC 접속 -->
  <p><h3><span id="main_copy">기업과 함께 성장하는 <span style="font-size:20px;font-weight:bold;">오멜론 뷰티크리에이터</span> 선발대회</span></h3></p>
  <span style="color:rgb(0, 191, 255);"><p>알리바바 TOP 왕홍들과의 콜라보</p></span>
  <?php } //끝_ 컴퓨터 접속 때 모달 ?>


<br><br>
  <h5>심사위원</h5>
  <br>
  <div class="row">
  <!--  <div class="col-sm-3">
    <strong class="text-center"></strong><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/song.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse career" >
        <p>Director</p>
        <p>ADM Entertainment 대표</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-3">
      <strong class="text-center"></strong><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/kim.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse career">
        <p>Kbs PD</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-3">
      <strong class="text-center"></strong><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/kimjung.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse career">
        <p>포토그래퍼</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
    <div class="col-sm-3">
      <strong class="text-center"></strong><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="img/nam.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse career">
        <p>교수</p>
        <p>동아방송예술대학교 엔터테인먼트경영</p>
        <p>Member since 1988</p>
      </div>
    </div>-->

    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img/kim_new.jpg" class="img-circle person" style="margin-bottom:10px;" alt="김형일 PD" width="255" height="255">
          <p style="color:#fff;font-size:16px;">김 형 일</p>
          <p style="color:#fff;font-size:14px;">KBS PD</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img/kimjung_new.jpg" class="img-circle person" style="margin-bottom:5px;" alt="김중만 포토그래퍼" width="255" height="255">
          <p style="color:#fff;font-size:16px;">김 중 만</p>
          <p style="color:#fff;font-size:14px;">포토그래퍼</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img/nam_new.jpg" class="img-circle person" style="margin-bottom:5px;" alt="남궁영 교수" width="255" height="255">
          <p style="color:#fff;font-size:16px;">남 궁 영</p>
          <p style="color:#fff;font-size:14px;">동아방송예술대학교 교수</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="img/song_new.jpg" class="img-circle person" style="margin-bottom:5px;" alt="송창수 감독" width="255" height="255">
          <p style="color:#fff;font-size:16px;">송 창 수</p>
          <p style="color:#fff;font-size:14px;">ADM엔터테인먼트 대표/감독</p>
      </div>
    </div>


  </div>
</div>

<!-- Container (TOUR Section) -->
<!--
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">November <span class="badge">3</span></li>
    </ul>

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>
-->

  <!-- Modal
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">-->

      <!-- Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>-->

<!-- Container (Contact Section)
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>-->

<!-- Image of location/map
<img src="map.jpg" class="img-responsive" style="width:100%">-->


<!-- sponser -->
<div class="text-center">

<p>후원사</p>
</div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p><a href="http://www.omelon.co.kr" data-toggle="tooltip" title="Visit omelon" style="font-size:12px;color:rgb(0, 191, 255);">오멜론 뷰티크리에이터@2020 </a></p>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
