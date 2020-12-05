'use strict';

const cards = document.getElementsByClassName('card');

for (let card of cards) {
  card.addEventListener('click', function () {
    this.classList.toggle('is-flipped');
  });
}