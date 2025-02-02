const form = document.querySelector("form");
const list = document.querySelector("ul");
const input = document.querySelector("input");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  if (input.value !== "") {
    const li = document.createElement("li");
    const btn = document.createElement("button");
    btn.textContent = "delete";
    btn.addEventListener("click", () => {
      list.removeChild(li);
    })
    li.textContent = input.value;
    li.appendChild(btn);
    list.appendChild(li);
    input.value = "";
    input.focus();
  }
})