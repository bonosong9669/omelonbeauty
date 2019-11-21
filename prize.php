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
  #prize_memo {
    color:#bdbdbd;
    font-size: 12px;
  }
.modal-title {
  color:rgb(0, 191, 255) !important;
  font-weight: bold;
  font-size: 22px !important;
}
.modal-body {
  padding: 0px;
}
.thumbnail-caption {
  /*color:rgb(0, 191, 255) !important;*/
  font-weight: 600;
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
   .modal-title {
      font-size: 19px;
   }

  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include_once("nav.html"); ?>



<!-- Container (TOUR Section) -->

<br>

<div class="container" style="padding-top:55px">

  <h3 class="text-center" style="color:#fff;">특전 Prize</h3>
  <p class="text-center" id="prize_memo">본심 수상자 전원에게 혜택</p>

    <div class="row text-center">

      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#myModal_1" data-toggle="modal">
            <!--<img src="prize1.jpg" alt="Paris" width="400" height="300">-->
            <!--<img src="prize_b_1.jpg" alt="Paris" width="400" height="300">-->
            <img src="img/prize_n_1_caption.jpg" alt="Paris" width="210" height="210">
          </a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#myModal_2" data-toggle="modal">
            <img src="img/prize_n_2_caption.jpg" alt="Paris" width="210" height="210">
          </a>
      </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#myModal_3" data-toggle="modal">
            <!--<img src="prize_b_3.jpg" alt="Paris" width="400" height="300">-->
            <img src="img/prize_n_33_caption.jpg" alt="Paris" width="210" height="210">
          </a>
        </div>
    </div>

  </div>

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#myModal_4" data-toggle="modal">
            <!--<img src="prize_b_4.jpg" alt="Paris" width="400" height="300">-->
            <img src="img/prize_n_15_caption.jpg" alt="Paris" width="210" height="210">
          </a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail">
          <a href="#myModal_5" data-toggle="modal">
            <img src="img/prize_n_34_caption.jpg" alt="Paris" width="210" height="210">
          </a>
      </div>
      </div>

      <div class="col-sm-4">
        <div class="thumbnail_">
          <a href="#myModal_6" data-toggle="modal">
            <img src="img/prize_n_9_caption.png" alt="Paris" width="210" height="210">
          </a>
       </div>
     </div>
  </div>
</div>



<!-- Modal -->
<div id="myModal_1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">상금 수여</h4>
      </div>
      <div class="modal-body text-center">
        <div class="thumbnail_">
            <img src="img/img_page_w_1.jpg" alt="상금 수여" width="300">
            <!--<p>Some text in the modal.</p>-->
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>


  <!-- Modal -->
  <div id="myModal_2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">전속 계약</h4>
        </div>
        <div class="modal-body text-center">
          <div class="thumbnail_">
              <img src="img/img_page_w_2_1.jpg" alt="전속 계약" width="300">
            <p style="color:black;">오멜론 <span class="thumbnail-caption">전속 모델</span> 계약<br>
            <span class="thumbnail-caption">김중만 사진작가</span>(심사위원)가 프로필 촬영</p>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>


    <!-- Modal -->
    <div id="myModal_3" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">2020 뷰티 박람회 참가</h4>
          </div>
          <div class="modal-body text-center">
            <div class="thumbnail_">
                <img src="img/img_page_w_3.jpg" alt="뷰티 박람회 참가" width="300">

            <p style="color:black;">2020.3.<span class="thumbnail-caption">이태리</span> 뷰티박람회<br>
             2020.11.<span class="thumbnail-caption">홍콩</span> 뷰티박람회<br>
             오멜론 홍보대사로 참가 예정</p>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      </div>

      <!-- Modal -->
      <div id="myModal_4" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">크리에이터 양성</h4>
            </div>
            <div class="modal-body text-center">
              <div class="thumbnail_">
                  <img src="img/img_page_w_4.jpg" alt="크리에이터 양성" width="300">
                  <p style="color:black;">오멜론의 <span class="thumbnail-caption">전략적 크리에이터</span>로 양성<br>
                  중국 알리바바 <span class="thumbnail-caption">톱 왕홍들과 콜라보</span> 프로젝트 추진</p>
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
        </div>


        <!-- Modal -->
        <div id="myModal_5" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">출연 캐스팅</h4>
              </div>
              <div class="modal-body text-center">
                <div class="thumbnail_">
                    <img src="img/img_page_w_5.jpg" alt="캐스팅" width="300">
                    <p style="color:black;"><span class="thumbnail-caption">심사위원들의 작품</span>에 캐스팅<br>
                      그외 오멜론<span class="thumbnail-caption">웹드라마</span> 출연 예정</p>
               </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          </div>

          <!-- Modal -->
          <div id="myModal_6" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">매니지먼트 체결</h4>
                </div>
                <div class="modal-body text-center">
                  <div class="thumbnail_">
                      <img src="img/img_page_w_6.jpg" alt="매니지먼트 체결" width="300">
                      <p style="color:black;">수상자의 <span class="thumbnail-caption">교육 및 투자</span> <br>매니지먼트 체결</p>
                 </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
            </div>
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



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools" style="font-size:12px;color:rgb(0, 191, 255);">오멜론 스타 콘테스트@2020</a></p>
</footer>
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
