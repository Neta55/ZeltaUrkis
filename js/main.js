
"use strict";


let heroSlideIndex = 1;
showHeroSlides(heroSlideIndex);

function switchSlide(n) {
  showHeroSlides(heroSlideIndex += n);
}

function showHeroSlides(n) {
  let i;
  let x = document.getElementsByClassName("heroSlides");
  if (n > x.length) { heroSlideIndex = 1 }
  if (n < 1) { heroSlideIndex = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[heroSlideIndex - 1].style.display = "block";
}


function playVideo() {


  let cards = document.getElementById('aplis');
  let video = document.getElementById('zu-video');
  cards.style.display = 'none';
  video.style.display = 'block';
  setTimeout(function () {
    video.style.display = 'none';
    cards.style.display = 'block';
  }, 43000);
}






// Set a same-site cookie for first-party contexts
document.cookie = 'cookie1=value1; SameSite=Lax';
// Set a cross-site cookie for third-party contexts
document.cookie = 'cookie2=value2; SameSite=None; Secure';