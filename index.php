<?php include_once 'mobile_check.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>오멜론 뷰티크리에이터 선발대회</title>
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
    font-size:14px;
  /*  color:rgb(0, 191, 255);*/
  color:#11a3d4;
 }
 .navbar-brand .logo {
   font-weight: bold;
   font-size: 21px;
 }
 .thumbnail {
   padding: 0 0 15px 0;
   border: none;
   border-radius: 0;
   background-color: #000;
   margin-bottom: 0px;
 }
 #band {
   padding-top: 0px;
   padding-bottom: 0px;
   padding-left: 70px;
   padding-right: 70px;
 }
 #city_img {
   padding-top: 20px;
   padding-bottom: 30px;
 }

 /***********모바일 경우 ******************/
 @media (max-width: 768px) {
   #main_copy { /* 로고 글자 */
     font-size:12px !important;
   }
   .navbar li a, .navbar .navbar-brand { /* 로고 글자 */
     color: #d5d5d5 !important;
     font-size: 10px;
   }
   .navbar-brand .logo {
     font-size: 17px;
   }
  #carousel_img1 {
     margin-top: 50px;
   }
   #carousel_img2 {
      margin-top: 50px;
    }
  .person_caption {
    font-size: 13px !important;
  }
  #city_img {
    padding-left: 50px;
    padding-right: 50px;
  }

}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- navigation -->
<?php include_once("nav.html"); ?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
   <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">

      <?php if ($obj -> mobileConcertCheck() == "mobile") { ?>
        <img src="img/landing_img_red_mobile_caption4_1.png" id="carousel_img1" alt="" width="1200" height="700">
      <?php }else{?>
        <!--<img src="img/landing_img_a.jpg" id="carousel_img1" alt="" width="1200" height="700">-->
        <img src="img/landing_img_red_caption_small.png" id="carousel_img1" alt="" width="1200" height="700">
    <?php  } ?>

  <!--  <div class="carousel-caption">
      <h1>O'melon</h1>
      <p>뷰티크리에이터 선발대회</p>
    </div>-->

  </div>

     <div class="item">
       <?php if ($obj -> mobileConcertCheck() == "mobile") { ?>
         <img src="img/landing_img_yellow_mobile_caption8_1.png" id="carousel_img1" alt="" width="1200" height="700">
       <?php }else{?>
         <!--<img src="img/landing_img_a.jpg" id="carousel_img1" alt="" width="1200" height="700">-->
         <img src="img/landing_img_yellow_caption_small.png" id="carousel_img1" alt="" width="1200" height="700">
     <?php  } ?>

        <!--<div class="carousel-caption">
          <h1>O'melon</h1>
          <p>크리에이터 부문 / 액터 부문</p>
        </div>-->
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


<!-- 메인 카피 문구 -->
<div class="text-center">
  <?php
  if($obj -> mobileConcertCheck() == "mobile") {//echo"현재 휴대폰으로 접속했습니다.";?>
   <!--  모바일 접속-->
   <br>
   <p><span id="main_copy" style="font-weight:100;font-size:12px;">기업과 함께 성장하는<br><span style="font-weight:bold;font-size:22px;">오멜론 뷰티크리에이터<br>선발대회</span></span></p>


  <?php }else{ //echo "현재 컴퓨터로 접속했습니다."; ?>
    <!--  PC 접속 -->
  <p><h3><span id="main_copy">기업과 함께 성장하는<br> <span style="font-size:20px;font-weight:bold;">오멜론 뷰티크리에이터 선발대회</span> </span></h3></p>

  <?php } //끝_ 컴퓨터 접속 때 모달 ?>
</div>




<?php
if($obj -> mobileConcertCheck() == "mobile") {//echo"현재 휴대폰으로 접속했습니다.";?>
 <!--  모바일 접속-->
 <!-- 도시 섹션 mobile-->
 <div class="container text-center" id=city_img>
   <span style="color:#11a3d4;"><p style="margin-bottom:0px;"><span style="font-size:13px;">알리바바 </span><strong style="font-size:17px;">TOP 왕홍</strong><span style="font-size:14px;">및
   <br></span><strong style="font-size:16px;">해외 인플루언서들</strong><span style="font-size:13px;">과 콜라보</span></p></span>

   <div class="row">
     <div class="col-sm-4">
       <div class="thumbnail">
         <img src="img/beijing3_1_mobile.jpg" alt="베이징"width="300">
       </div>
     </div>
     <div class="col-sm-4">
       <div class="thumbnail">
         <img src="img/seoul3_1_mobile.jpg" alt="베이징"width="300">
       </div>
     </div>
     <div class="col-sm-4">
       <div class="thumbnail">
         <img src="img/tokyo3_1_mobile.jpg" alt="베이징"width="300">
       </div>
     </div>
   </div>
 </div>


<?php }else{ //echo "현재 컴퓨터로 접속했습니다."; ?>
  <!--  PC 접속 -->
  <!-- 도시 섹션 PC-->
  <div class="container text-center" id=city_img>
<span style="color:#11a3d4;"><p style="margin-bottom:0px;"><span style="font-size:14px;">알리바바 </span><strong style="font-size:17px;">TOP 왕홍</strong><span style="font-size:14px;">및
</span><strong style="font-size:17px;">해외 인플루언서들</strong><span style="font-size:14px;">과 콜라보</span></p></span>
<br>
    <div class="row">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/beijing3_1.jpg" alt="베이징"width="300">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/seoul3_1.jpg" alt="베이징"width="300">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/tokyo3_1.jpg" alt="베이징"width="300">
        </div>
      </div>
    </div>
  </div>

<?php } //끝_ 컴퓨터 접속 때 모달 ?>





<!-- Container (The Band Section) -->
<div id="band" class="container text-center aaa">

  <h5 style="margin-top:0px;margin-bottom:0px;">심사위원</h5>
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
    <a href="https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EA%B9%80%ED%98%95%EC%9D%BC+PD&oquery=%EA%B9%80%ED%98%95%EC%9D%BC+pd&tqi=UOQlFsp0J1ZssbKrVXNssssssjs-504734">
    <div class="thumbnail">
        <img src="img/person_kimhyungil.jpg" class="img-circle person" style="margin-bottom:10px;" alt="김형일 PD" width="255" height="255">
          <p class="person_caption" style="color:#c9c9c9;font-size:15px;">김 형 일<br><span style="color:#e0e0e0#c9c9c9;font-size:13px;">KBS PD</span></p>
          <!--<p class="person_caption" style="color:#fff;font-size:14px;">KBS PD</p>-->
      </div></a>
    </div>
    <div class="col-sm-3">
    <a href="https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EA%B9%80%EC%A4%91%EB%A7%8C&oquery=%EA%B9%80%ED%98%95%EC%9D%BC+PD&tqi=UOQlrsp0JXossRRbq7sssssss54-264578">
    <div class="thumbnail">
        <img src="img/person_kimjungman.jpg" class="img-circle person" style="margin-bottom:5px;" alt="김중만 포토그래퍼" width="255" height="255">
          <p class="person_caption" style="color:#c9c9c9;font-size:15px;">김 중 만<br><span style="color:#c9c9c9;font-size:13px;">사진 작가</span></p>
          <!--<p style="color:#fff;font-size:14px;">포토그래퍼</p>-->
      </div></a>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
   <a href="http://www.dima.ac.kr/sub_03/sub_03_20_2.aspx?mcateNum=18">
     <img src="img/person_namkungyoung.jpg" class="img-circle person" style="margin-bottom:5px;" alt="남궁영 교수" width="255" height="255">
        <p class="person_caption" style="color:#c9c9c9;font-size:15px;">남 궁 영<br><span style="color:#c9c9c9;font-size:13px;">동아방송예술대학교 교수</span></p>
          <!--<p style="color:#fff;font-size:14px;">동아방송예술대학교 교수</p>-->
      </div></a>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
      <a href="https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EC%86%A1%EC%B0%BD%EC%88%98&oquery=%EC%86%A1%EC%B0%BD%EC%88%98+%EA%B0%90%EB%8F%85&tqi=UOQA5sp0J1sssP2r4UhssssssYK-100150">
      <img src="img/person_songchangsoo.jpg" class="img-circle person" style="margin-bottom:5px;" alt="송창수 감독" width="255" height="255">
          <p class="person_caption" style="color:#c9c9c9;font-size:15px;">송 창 수<br><span style="color:#c9c9c9;font-size:13px;">ADM엔터테인먼트 대표/감독</span></p>
          <!--<p style="color:#fff;font-size:14px;">ADM엔터테인먼트 대표/감독</p>-->
      </div></a>
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
<?php include_once 'footer.html'; ?>

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
