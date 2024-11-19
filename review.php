<?php
include 'header.php';
?>


<div class="page-header animate__animated animate__zoomIn">
  <h2>Review</h2>
  <div class="devider"></div>
  <p class="subtitle">clients say</p>
</div>




<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"></div>
            <img src="./img/mypic.png">
            <br>
        <div class="cap-text">I have worked as a professional web designer for more than 3 years. Making eye-catching website designs and putting them into practice with front-end programming is my passion. I take pride in keeping up with contemporary design trends and using my</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
            <img src="./img/logo.png">
            <br>
        <div class="cap-text">I have worked as a professional web designer for more than 3 years. Making eye-catching website designs and putting them into practice with front-end programming is my passion. I take pride in keeping up with contemporary design trends and using my</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
            <img src="./img/mypic.png">
            <br>
        <div class="cap-text">I have worked as a professional web designer for more than 3 years. Making eye-catching website designs and putting them into practice with front-end programming is my passion. I take pride in keeping up with contemporary design trends and using my</div>
    </div>

</div>
<br><br><br><br><br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br><br><br>

 








<?php
include 'footer.php';
?>


<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 7000); // Change image every 2 seconds
}
</script>