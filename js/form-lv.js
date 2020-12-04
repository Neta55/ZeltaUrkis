"use strict";

window.addEventListener('load', function () {

  document.getElementById('order-game-btn').addEventListener('click', function () {
    const form = document.getElementById('order-form').elements;

    if (isFormValid(form)) {
      const orderForm = document.getElementById('order-form')
      orderForm.classList.add('hidden')
      const popUp = document.getElementById('pop-up')
      popUp.classList.add('hidden')
      const cover = document.getElementById('cover')
      cover.classList.add('hidden')


      // nosūtīt uz epastu ar html tagiem vai vēlāk ar php

    } else {
      console.log('Forma ir nepareizi aizpildīta')
    }
  })

  function isFormValid(form) {
    const orderForm = document.getElementById('order-form');

    let isFormValid = true;

    const errorMsgBlocks = document.getElementsByClassName('error-msg');
    Object.values(errorMsgBlocks).forEach(function (block) {
      block.innerHTML = ""
    })

    const name = form.namedItem('name').value;

    if (name.length < 1) {
      const errorMsg = document.getElementsByClassName('error-msg name')[0];
      errorMsg.innerHTML = "Lūdzu ierakstiet savu vārdu!"
      isFormValid = false;
    }

    const email = form.namedItem('email').value;
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (!re.test(email)) {
      const errorMsg = document.getElementsByClassName('error-msg email')[0];
      errorMsg.innerHTML = "Epasts nav ievadīts vai ir nekorekts!"
      isFormValid = false;
    }

    const phone = form.namedItem('phone').value;
    if (phone.length < 8) {
      const errorMsg = document.getElementsByClassName('error-msg phone')[0];
      errorMsg.innerHTML = "Lūdzu ievadiet tālruņa numuru!"
      isFormValid = false;
    }

    return isFormValid;


  }
})

function closeForm() {
  const cover = document.getElementById('cover');
  cover.classList.add('hidden');
  const popUp = document.getElementById('pop-up');
  popUp.classList.add('hidden');
  const orderForm = document.getElementById('order-form');
  orderForm.reset();
  orderForm.classList.add('hidden')
}

function openForm() {
  const cover = document.getElementById('cover');
  cover.classList.remove('hidden');
  const popUp = document.getElementById('pop-up');
  popUp.classList.remove('hidden');
  const orderForm = document.getElementById('order-form');
  orderForm.classList.remove('hidden');
}
