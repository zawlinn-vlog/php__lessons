"use strict";

let form = document.querySelector("form");

// CHECK EMAIL

function checkEmail(email) {
  const reg = /([a-zA-Z]+)\@([a-z]+)\.([a-z]{2,3}|[a-z]{2})/;

  let bol = reg.test(email);

  if (!bol) return false;

  return bol;
}

// CHECK PASSWORD

function checkPassword(password) {
  if (password.length <= 8) {
  } else {
    return false;
  }
}
