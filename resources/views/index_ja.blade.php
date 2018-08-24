@extends('layout')

@section('content')
    <div id="content">
        <div class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/activity.jpg" style="width:50%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/actvity2.jpg" style="width:50%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/actvity3.jpg" style="width:50%">
            <div class="text">Caption Three</div>
          </div>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
  </div>
@endsection