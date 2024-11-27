@extends('layouts.layout')
@section('content')
<div class="main-baner">
      <div class="left-baner">
        <h1>Practice English with dictation exercises</h1>
        <p>
          Dictation is a method to learn languages by listening and writing down
          what you hear. It is a highly effective method!
        </p>
        <p>
          This website contains hundreds of dictation exercises to help English
          learners practice easily and improve quickly
        </p>
        <a href="/exercises"><button>Star Now</button></a>
        <span
          >It's 100% FREE! <i class="fas fa-fire" style="color: red"></i>
        </span>
      </div>
      <div class="slick-slider">
        <div>
          <img
            style="width: 600px; height: 400px"
            src="asset/slide.png"
            alt=""
          />
        </div>
        <div>
          <img
            style="width: 600px; height: 400px"
            src="asset/slide1.jpg"
            alt=""
          />
        </div>
        <div>
          <img
            style="width: 600px; height: 400px"
            src="asset/slide2.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
    
<div class="title">
      <h2 class="homepage__section-title">
        How practicing dictation will improve your English skills?
      </h2>
      <p class="mt-4 mb-3">
        When practicing exercises at dailydictation.com, you will go through 4
        main steps, all of them are equally important!
      </p>
    </div>
    <div class="main-col-md-6">
      <div class="col-md-6">
        <img style="width: 150px" src="asset/listen.png" alt="" />
        <h3 class="mt-4 mb-3">1. Listen to the audio</h3>
        <p class="text-muted">
          Through the exercises, you will have to listen a lot; that's the key
          to improving your listening skills in any learning method.
        </p>
      </div>
      <div class="col-md-6">
        <img id="center" style="width: 150px" src="asset/input.png" alt="" />
        <h3 class="mt-4 mb-3">2. Type what you hear</h3>
        <p class="text-muted">
          Typing what you hear forces you to focus on every detail which helps
          you become better at pronunciation, spelling and writing.
        </p>
      </div>
    </div>
    <div class="main-col-md-7">
      <div class="col-md-6">
        <img style="width: 150px" src="asset/check.svg" alt="" />
        <h3 class="mt-4 mb-3">3. Check & correct</h3>
        <p class="text-muted">
          Error correction is important for your listening accuracy and
          reading comprehension, it's best to learn from mistakes.
        </p>
      </div>
      <div class="col-md-6">
        <img style="width: 150px" src="asset/read.png" alt="" />
        <h3 class="mt-4 mb-3">4. Read it out loud</h3>
        <p class="text-muted">
          After complete a sentence, try to read it out loud, it will greatly
          improve your pronunciation & speaking skills!
        </p>
      </div>
    </div>
    <div class="Questions">
      <div class="text-center">
        <h2>Frequently Asked Questions</h2>
      </div>
      <div class="md4">
        <div class="md2">
          <h4>Is this program free?</h4>
          <p>Yes, it's 100% FREE!</p>
        </div>
        <div style="margin-left: 30px" class="md2">
          <h4>Is this website for beginners?</h4>
          <p>
            As long as you can understand this page, you're good to go! But
            it's better if you know basic English pronunciation, if you don't,
            watch this
          </p>
        </div>
      </div>
      <div class="md4">
        <div class="md2">
          <h4>How long will it take to become fluent with this website?</h4>
          <p>
            It depends on many things (such as your current level, how many
            hours you will spend each day). I can only say that your English
            will improve very quickly with this method.
          </p>
        </div>
        <div style="margin-left: 30px" class="md2">
          <h4>Will my speaking skills improve using this method?</h4>
          <p>
            Speaking and listening skills are related together, once you have
            better listening skills, it's much easier and faster to improve
            your speaking skills.

            <br />

            Also, you can try to read out loud what you hear, your skills will
            improve really quickly!
          </p>
        </div>
      </div>
    </div>
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
@endsection