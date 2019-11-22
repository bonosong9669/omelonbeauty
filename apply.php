<?php include_once 'mobile_check.php'; ?>

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
  #memo {
    color:#bdbdbd;
    font-size: 13px;
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
        font-size: 10px;
      }
      .navbar-brand .logo {
        font-size: 17px;
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
     .container {
       padding-left: 35px;
       padding-right: 35px;
     }

    }
  </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include_once("nav.html"); ?>


<div class="container" style="padding-bottom:0px;">
<!--<h3 class="text-center" style="color:#fff;">A P P L Y</h3>-->
<!--<h3 class="text-center" style="color:#fff;">지  &nbsp; &nbsp;&nbsp;원</h3>-->
<div class="col-sm-3">

</div>
<div class="col-sm-6">
 <div class="text-center">
   <h3 style="color:#fff;">지원 하기</h3>
 </div>
 <br>
  <form action="apply_php.php" enctype="multipart/form-data" method='post'>

    <!-- 지원부문 + 이름 -->
    <div class="row">
      <div class="col-sm-6 form-group">
        <label for="name">지원 부문</label>
        <select name="category" class="form-control" id="category" required>
          <option value="" selected="true">지원부문</option>
          <option value="cre">크리에이터</option>
          <option value="act">액터</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name">이름</label>
        <input type="name" class="form-control" id="name" placeholder="이름 입력" name="apply_name" required>
      </div>
    </div>

    <!-- 전번 + 이메일 -->
    <div class="row">
      <div class="col-sm-6 form-group">
        <label for="phone">전화번호</label>
        <input type="phone" class="form-control" id="phone" placeholder="''-'없이 전화번호 입력" name="phone" onkeyup="this.value=this.value.replace(/[^0-9]+$/g,'');" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">이메일</label>
        <input type="email" class="form-control" id="email" placeholder="이메일 입력" name="email" required>
      </div>

    </div>

<!--
    <div class="form-group">
      <label for="name">이름:</label>
      <input type="name" class="form-control" id="name" placeholder="이름 입력 (한글만)" name="apply_name" onkeyup="this.value=this.value.replace(/[^가-힣\s]+$/g,'');" required>
    </div>
    <div class="form-group">
      <label for="phone">전화번호:</label>
      <input type="phone" class="form-control" id="phone" placeholder="''-'없이 전화번호 입력" name="phone" onkeyup="this.value=this.value.replace(/[^0-9]+$/g,'');" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="이메일 입력" name="email" required>
    </div> -->
    <div class="form-group">
      <label for="file">프로필(또는 사진) 첨부</label>
      <input type="file" class="form-control" id="file" placeholder="프로필 첨부" name="upload" required>
      <span id="memo"><!--*프로필 파일은 ppt, pptx, pdf, hwp, doc, docx 가능<br>
      *사진 파일은 jpg, jpeg, png, gdf 가능<br>-->
      *동영상 첨부 불가 / 동일인 중복 지원 가능 <br> *파일전송에 10초 정도 소요됩니다</span>
      <br><br>
      <div class="text-right"><button type="submit" style="border:0px;" class="btn btn-default" onclick="cursor_wait();">지원 하기</button></div>
    </div>

    <!-- 체크박스 -->
    <!--<div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>-->


  </form>
</div>
<div class="col-sm-3">

</div>


</div>



<!-- Footer -->
<?php // include_once 'footer.html'; ?>

<script>
  function cursor_wait() {
    $("*").css("cursor", "wait");//ajax 진행중일 때 커서 모양
  }
</script>

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
