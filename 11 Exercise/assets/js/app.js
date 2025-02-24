"use strict";

let form = document.querySelector("form");

// CHECK EMAIL

function checkEmail(email) {
  // const reg = /([a-zA-Z]+)\@([a-z]+)\.([a-z]{2,3}|[a-z]{2})/;
  const reg = /(?=.*[a-z])(?=.*|\d)(?=.*@)/;

  let bol = reg.test(email);

  if (!bol) return false;

  return bol;
}

console.log(checkEmail("zaws linn@gmail.com"));

// CHECK PASSWORD

function checkPassword(password) {
  if (password.length >= 8) {
    console.log("pas length is more than 8");
    const reg =
      /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@.#$!%*?&])[A-Za-z\d@.#$!%*?&]{8}$/;
    const bol = reg.test(password);

    return bol;
  } else {
    return false;
  }
}

function checkUsername(username) {
  const reg = /()/;

  const bol = reg.test(username);

  if (bol) {
    return bol;
  }

  return false;
}

/*

const levels = {
    1: "Very Weak",
    2: "Weak",
    3: "Medium",
    4: "Strong",
};

function checkPwd(pwd) {
    if (pwd.length > 15) {
        return console.log(pwd + " - Too lengthy");
    } else if (pwd.length < 8) {
        return console.log(pwd + " - Too short");
    }

    const checks = [
        /[a-z]/,     // Lowercase
        /[A-Z]/,     // Uppercase
        /\d/,        // Digit
        /[@.#$!%^&*.?]/ // Special character
    ];
    let score = checks.reduce((acc, rgx) => acc + rgx.test(pwd), 0);

    console.log(pwd + " - " + levels[score]);
}

let pwds = [
    "u4thdkslfheogica",
    "G!2ks",
    "GeeksforGeeks",
    "Geeks123",
    "GEEKS123",
    "Geeks@123#",
];

pwds.forEach(checkPwd);

*/
