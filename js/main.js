// window.addEventListener('load', function () {
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





// })