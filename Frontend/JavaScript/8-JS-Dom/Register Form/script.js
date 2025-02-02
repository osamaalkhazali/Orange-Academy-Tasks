const username = document.getElementById("username");
const password = document.getElementById("password");
const confirm = document.getElementById("confirm");
const form = document.querySelector("form");
const message = document.querySelector(".message");
const submit = document.querySelector("button");
const inputs = document.querySelectorAll("input");

// 1 - Add labels
var usernameLabel = document.createElement("label");
usernameLabel.textContent = "Username :";
form.insertBefore(usernameLabel, username);

var passwordLabel = document.createElement("label");
passwordLabel.textContent = "Password :";
form.insertBefore(passwordLabel, password);

var confirmLabel = document.createElement("label");
confirmLabel.textContent = "Confirm :";
form.insertBefore(confirmLabel, confirm);

// 2- Add required
username.setAttribute("required", "");
password.setAttribute("required", "");
confirm.setAttribute("required", "");

// 3- check password
function check() {
  if (confirm.value !== password.value ) {
    message.innerHTML = "Password does not match";
    return false
  } else {
    message.innerHTML = "";
    return true
  }
}

confirm.addEventListener("input", () => {
  check()
});

// 4-  check submit
submit.setAttribute("disabled", "");
inputs.forEach(input => {
  input.addEventListener("input", () => {
    if ( username.value !== "" && password.value !== "" && confirm.value !== "" && check() ) {
      submit.removeAttribute("disabled");
    } else {
      submit.setAttribute("disabled", "");
    }
  })
})

// 5- submit form
form.addEventListener("submit", e => {
  if (check()) {
    e.preventDefault();
    message.innerHTML = "Registration successful";
  }
})
