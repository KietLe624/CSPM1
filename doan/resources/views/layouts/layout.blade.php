<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Website</title>
  <link rel="shortcut icon" href="asset/dailydictation.svg" type="image/x-icon">
  <!-- Liên kết Font Awesome -->
  <link rel="stylesheet" href="FE/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <div class="header">
    <div class="nav-bar-header">
      <div class="logo">
        <div class="me-1">
          <img src="asset/dailydictation.svg" alt="Logo" />
        </div>
        <div class="me-2"><span>DailyDictation</span></div>
      </div>
      <div class="navlink">
        <ul>
          <li><a href="#">All exercises</a></li>
          <li><a href="">Top users</a></li>
          <li><a href="">Video lessons</a></li>
          <li><a href="">Learn Together</a></li>
          <li>
            <a href="">Help me <i class="fas fa-truck-medical"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <hr style="margin-top: 10px" />
    <div class="nad-bottom">
      <div class="nav-button">
        <ul>
          <li><a href="#">Login</a></li>
          <li><a href="">Register</a></li>
        </ul>
      </div>
    </div>
    <hr />
  </div>

  <div class="content">
    @yield('content')
  </div>

  <div class="footer">
    <div class="mainft">
      <div class="mainfooter">
        <div class="flex-colums">
          <a href="#">Home</a>
          <a href="#">All exercises</a>
          <a href="#">English expressions</a>
          <a href="#">English pronunciation</a>
          <a href="#">FluentPal - English Speaking App</a>
          <a href="#">Download audio files</a>
        </div>
        <div class="flex-colums">
          <a href="">Top users</a>
          <a href="">Latest comments</a>
          <a href="">Support DailyDictation 🙏</a>
          <a href="">Learning English resources</a>
          <a href="">Practice German Listening</a>
        </div>
        <div class="flex-colums">
          <a href="">Blog</a>
          <a href="">Contact</a>
          <a href="">Terms & rules</a>
          <a href="">Privacy policy</a>
        </div>
        <div class="flex-colums">
          <a
            class="nav-link"
            href="https://www.facebook.com/dailydictation"
            target='"_blank"'
            rel='"noopener"'
            aria-label='"Facebook"'><i class="fab fa-facebook"></i> Like our Facebook</a>
        </div>
      </div>
    </div>
    <div class="last-ft">
      <p>© dailydictation.com · since 2019</p>
    </div>
  </div>
</body>
<script>
  $(document).ready(function() {
    $(".slick-slider").slick({
      autoplay: true,
      autoplaySpeed: 1000, // Đổi slide mỗi 3 giây
      dots: true, // Hiển thị các chấm điều khiển
      arrows: true, // Hiển thị nút điều hướng
      infinite: true, // Lặp lại các slide
    });
  });
</script>

</html>