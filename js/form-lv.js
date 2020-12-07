"use strict";

window.addEventListener('load', function () {

  document.getElementById('order-game-btn').addEventListener('click', function () {
    const form = document.getElementById('order-form').elements;

    if (isFormValid(form)) {
      form.submit();
      const mailSend = document.getElementById('mailsend');
      mailSend.innerHTML = "Tavs pieprasījums ir veiksmīgi aizsūtīts. Mēs ar tevi sazināsimies tuvākajā laikā!";
      form.reset();


    } else {
      console.log('nepareizi ievadīti dati');
      const mailSend = document.getElementById('mailsend');
      mailSend.innerHTML = "Ups! Kaut kas nav tā ar tiem sakariem. Lai pasūtītu Urķi, piezvani pa tālr. 26 008 102!";

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


