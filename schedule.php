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
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */
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
    /*background: #2d2d30;*/
    background-color: #000;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}

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
  .thumbnail p {
    margin-top: 15px;
    color: #555;
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
  .navbar li a, .navbar .navbar-brand {
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
  .navbar-brand .logo {
    font-weight: bold;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    background-color: #000;
  }

  /***********모바일 경우 ******************/
  @media (max-width: 768px) {
    #main_copy { /* 로고 글자 */
      font-size:17px;
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
   #apply_end_text {
     font-size: 18px;
   }

  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include_once("nav.html"); ?>



<!-- Container (TOUR Section) -->

<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">선발대회 일정</h3>

    <p class="text-center">접수 시작 2019.12.01<br></p>
<h3 class="text-center" id="apply_end_text">접수 마감 2019.12.31</h3>

    <div class="row text-center">
      <div class="col-sm-1">

      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <p style="color:#fff;"><strong>예 심</strong></p>
          <p style="color:#bdbdbd;">서경대학교 오디션홀</p>
          <p style="color:#bdbdbd;">2020.02 (추후 공지)</p>
          <!--<img src="flower_b_1.jpg" alt="Paris" width="400" height="300">-->
          <!--<img src="kim_flower_white_schedule.png" alt="Paris" width="400" height="300">-->
            <!--<img src="prize_n_3.jpg" alt="Paris" width="400" height="300">-->
            <!--<img src="sch_2_1.jpg" alt="Paris" width="200" height="200">-->
            <!--<img src="img/kim_flower_red2.png" alt="Paris" width="200" height="200">-->
            <img src="img/kim_flower_yellow_new.png" alt="Paris" width="200" height="200">
            <button class="btn" data-toggle="modal" data-target="#myModal_pre_contest">프로그램</button>
        </div>
      </div>
      <div class="col-sm-2">

      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <p style="color:#fff;"><strong>본 심</strong></p>
          <p style="color:#bdbdbd;">(추후 공지)</p>
          <p style="color:#bdbdbd;">2020.02 (추후 공지)</p>
            <!--<img src="flower_b_6.jpg" alt="New York" width="400" height="300">-->
            <!--<img src="kim_flower_resd_schedule.png" alt="New York" width="400" height="300">-->
            <!--<img src="prize_n_4.jpg" alt="Paris" width="400" height="300">-->
            <!--<img src="sch_1_1.jpg" alt="Paris" width="200" height="200">-->
              <!--<img src="img/kim_flower_red3_schedule.png" alt="Paris" width="200" height="200">-->
              <img src="img/kim_flower_red_new.png" alt="Paris" width="200" height="200">
          <button class="btn" data-toggle="modal" data-target="#myModal_final_contest">프로그램</button>
        </div>
      </div>
      <div class="col-sm-1">

      </div>

    </div>
  </div>
</div>

  <!-- 예심 Modal-->
  <div class="modal fade" id="myModal_pre_contest" role="dialog">
    <div class="modal-dialog">-->

      <!-- Modal content-->
      <div class="modal-content text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-camera"></span> 예심 프로그램</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> 본심 진출자 20명 선발</label>
              <br>(크리에이터 부문: 10명 / 배우 부문: 10명)
              <!--<input type="number" class="form-control" id="psw" placeholder="What time?">-->
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> 오디션 시간</label>
              <input type="number" class="form-control" id="psw" placeholder="What time?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> 준비 사항</label>
              <input type="text" class="form-control" id="usrname" placeholder="Check">
            </div>
                <button type="button" type="button" onclick="location.href='https://map.naver.com/?query=서울시+성북구+서경로+137+'" class="btn btn-block">
                <span class="glyphicon glyphicon-search">  지 도</span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> 닫기
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>


  <!-- 본심 Modal-->
  <div class="modal fade" id="myModal_final_contest" role="dialog">
    <div class="modal-dialog">-->

      <!-- Modal content-->
      <div class="modal-content text-center">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-camera"></span> 본심 프로그램</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> 최우수상 1명 선발</label>
              <br>우수상 6명(크리에이터 부문: 3명 / 배우 부문: 3명)
              <!--<input type="number" class="form-control" id="psw" placeholder="What time?">-->
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-user"></span> 오디션 시간</label>
              <input type="number" class="form-control" id="psw" placeholder="What time?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> 준비 사항</label>
              <input type="text" class="form-control" id="usrname" placeholder="Check">
            </div>
                <button type="button" type="button" onclick="location.href='https://map.naver.com/?query=서울시+강남구+논현로+854+'" class="btn btn-block">
                <span class="glyphicon glyphicon-search">  지 도</span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> 닫기
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>

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



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools" style="font-size:12px;color:rgb(0, 191, 255);">오멜론 스타 콘테스트@2020</a></p>
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
