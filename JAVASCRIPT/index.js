var slideIndex = 0;
    showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("box");
    for (i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active-slide");
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].classList.remove("active-box");
    }
    slides[slideIndex - 1].classList.add("active-slide");
    dots[slideIndex - 1].classList.add("active-box");
    setTimeout(showSlides, 5000);
  }

  function currentSlide(n) {
    slideIndex = n;
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("box");
    for (i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active-slide");
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].classList.remove("active-box");
    }
    slides[slideIndex - 1].classList.add("active-slide");
    dots[slideIndex - 1].classList.add("active-box");
  }

  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtns = document.querySelectorAll(".toggle-btn");

    toggleBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        const songList = this.nextElementSibling;
        songList.classList.toggle("hidden");
      });
    });
  });
