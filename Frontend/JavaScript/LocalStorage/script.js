const btn = document.querySelector(".btn");
let users = [];
console.log(users);
let editedUserID;
const contentComponent = document.querySelector(".contentComponent");

function actions() {
  const deleteBtn = document.querySelectorAll(".delete");
  const editBtn = document.querySelectorAll(".edit");
  for (let i = 0; i < deleteBtn.length; i++) {
    deleteBtn[i].addEventListener("click", (e) => {
      const id = e.target.parentElement.parentElement.id;
      users = users.filter((user) => user.id !== parseInt(id));
      localStorage.setItem('users', JSON.stringify(users));
      e.target.parentElement.parentElement.remove();
    });
  }
  for (let i = 0; i < editBtn.length; i++) {
    editBtn[i].addEventListener("click", (e) => {
      const id = e.target.parentElement.parentElement.id;
      const user = users.find((user) => user.id === parseInt(id));
      document.querySelector('#name').value = user.name;
      document.querySelector("#age").value = user.age;
      document.querySelector("#address").value = user.address;
      document.querySelector("#email").value = user.email;
      editedUserID = id;
      btn.textContent = "Update";
    });
  }
}

function loadFromLocalStorage() {
  document.querySelector("tbody").innerHTML ='';
  users = JSON.parse(localStorage.getItem('users')) || [];
  users.forEach((user) => {
    const row = document.createElement("tr");
    row.id = user.id;
    row.innerHTML = `<td>${user.name}</td>
                    <td>${user.age}</td>
                    <td>${user.address}</td>
                    <td>${user.email}</td>
                    <td class="actions"><button class="delete">Delete</button>
                    <button class="edit">Edit</button></td>`;
    document.querySelector("tbody").appendChild(row);
  });
  actions();
}

window.addEventListener("load", loadFromLocalStorage);

function emptyInputs() {
  document.querySelector('#name').value = "";
  document.querySelector("#age").value = "";
  document.querySelector("#address").value = "";
  document.querySelector("#email").value = "";
}

btn.addEventListener("click", (e) => {
  e.preventDefault();
  const name = document.querySelector('#name').value;
  const age = document.querySelector("#age").value;
  const address = document.querySelector("#address").value;
  const email = document.querySelector("#email").value;
  const tbody = document.querySelector("tbody");
  if (btn.textContent === "Update") {
    const user = users.find((user) => user.id == editedUserID);
    user.name = name;
    user.age = age;
    user.address = address;
    user.email = email;
    localStorage.setItem('users', JSON.stringify(users));
    btn.textContent = "Add Data";
    emptyInputs()
    loadFromLocalStorage()
    actions();

  } else if (btn.textContent === "Add Data") {
    const id = users.length + 1;
    const user = {
      id,
      name,
      age,
      address,
      email
    };
    users.push(user);
    localStorage.setItem('users', JSON.stringify(users));
    const row = document.createElement("tr");
    row.id = id;
    row.innerHTML = `<td>${name}</td>
                    <td>${age}</td>
                    <td>${address}</td>
                    <td>${email}</td>
                    <td class="actions">
                    <button class="delete">Delete</button>
                    <button class="edit">Edit</button>
                    </td>`;
    tbody.appendChild(row);
    actions();
    emptyInputs()
  }
});



// register 

let usersList = JSON.parse(localStorage.getItem('usersList')) || [];

const email = document.getElementById("registerEmail");
const password = document.getElementById("password");
const confirm = document.getElementById("confirm");
const registerForm = document.getElementById("registerForm");
const message = document.querySelector(".message");
const register = document.getElementById("register");
const inputs = document.querySelectorAll("input");


email.setAttribute("required", "");
password.setAttribute("required", "");
confirm.setAttribute("required", "");

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

register.setAttribute("disabled", "");

inputs.forEach(input => {
  input.addEventListener("input", () => {
    if ( email.value !== "" && password.value !== "" && confirm.value !== "" && check() ) {
      register.removeAttribute("disabled");
    } else {
      register.setAttribute("disabled", "");
    }
  })
})

function checkEmail() {
  const user = usersList.find(user => user.email === email.value);
  if (user) {
    message.innerHTML = "Email already exists";
    return false
  } else {
    message.innerHTML = "";
    return true
  }
}

register.addEventListener("click", e => {
  e.preventDefault();
  if (check() && checkEmail()) {
    const user = {
      email: email.value,
      password: password.value
    }
    usersList.push(user);
    localStorage.setItem('usersList', JSON.stringify(usersList));
    message.innerHTML = "Registration successful";
  }
})


// login

const login = document.getElementById("login");
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");
const loginForm = document.getElementById("loginForm");
const loginMessage = document.querySelector(".loginMessage");

login.addEventListener("click", e => {
  e.preventDefault();
  const user = usersList.find(user => user.email === loginEmail.value && user.password === loginPassword.value);
  if (user) {
    loginMessage.innerHTML = "Login successful";
    localStorage.setItem('user', JSON.stringify(user));
    setTimeout(() => {
      document.querySelector(".loginComponent").classList.add("none");
      document.querySelector(".contentComponent").classList.remove("none");
      loginMessage.innerHTML = "";
    } , 1000);
  } else {
    loginMessage.innerHTML = "Invalid email or password";
  }
})

const loginButton = document.getElementById("loginButton");
loginButton.addEventListener("click", () => {
  document.querySelector(".registerComponent").classList.add("none");
  document.querySelector(".loginComponent").classList.remove("none");
})

const registerButton = document.getElementById("registerButton");
registerButton.addEventListener("click", () => {
  document.querySelector(".registerComponent").classList.remove("none");
  document.querySelector(".loginComponent").classList.add("none");
})

window.addEventListener("load", () => {
  const user = JSON.parse(localStorage.getItem('user'));
  if (user) {
    document.querySelector(".loginComponent").classList.add("none");
    document.querySelector(".registerComponent").classList.add("none");
    document.querySelector(".contentComponent").classList.remove("none");
  }
})

const logout = document.getElementById("logout");
logout.addEventListener("click", () => {
  localStorage.removeItem('user');
  document.querySelector(".loginComponent").classList.remove("none");
  document.querySelector(".contentComponent").classList.add("none");
})