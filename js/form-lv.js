"use strict";

window.addEventListener('load', function () {
  const form = document.getElementById('order-form').elements;
  document.getElementById('order-game-btn').addEventListener('click', function () {


    if (isFormValid(form)) {
      const orderForm = document.getElementById('order-form');
      orderForm.submit();
      orderForm.reset();
      console.log('Pieprasījums aizsūtīts');
    } else {
      console.log('Nepareizi ievadīti dati');

    }
  })

  function isFormValid(form) {
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
      errorMsg.innerHTML = "Tālruņa numurs nav ievadīts vai ievadīts nepareizi!"
      isFormValid = false;
    }

    return isFormValid;


  }
})


