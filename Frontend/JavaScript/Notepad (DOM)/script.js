const text = document.querySelector("textarea");

const bold = document.querySelector(".bold");
const italic = document.querySelector(".italic");
const start = document.querySelector(".start");
const end = document.querySelector(".end");
const center = document.querySelector(".center");
const upper = document.querySelector(".upper");
const lower = document.querySelector(".lower");
const cap = document.querySelector(".cap");
const clear = document.querySelector(".clear");
const color = document.querySelector(".color");
const bgColor = document.querySelector(".bgColor");
const fontSize = document.querySelector(".fontSize");
const fontFamily = document.querySelector(".fontFamily");
const print = document.querySelector(".print");


bold.addEventListener("click", () => {
  if (text.style.fontWeight === "bold") {
    text.style.fontWeight = "normal";
  } else {
    text.style.fontWeight = "bold";
  }
});

italic.addEventListener("click", () => {
  if (text.style.fontStyle === "italic") {
    text.style.fontStyle = "normal";
  } else {
    text.style.fontStyle = "italic";
  }
});

start.addEventListener("click", () => {
    text.style.textAlign = "start"; 
});

end.addEventListener("click", () => {
    text.style.textAlign = "end"; 
});

center.addEventListener("click", () => {
    text.style.textAlign = "center"; 
});

upper.addEventListener("click", () => {
    text.style.textTransform = "uppercase"; 
});

lower.addEventListener("click", () => { 
    text.style.textTransform = "lowercase"; 
});

cap.addEventListener("click", () => {
    text.style.textTransform = "capitalize"; 
});

clear.addEventListener("click", () => {
    text.value = ""; 
});

color.addEventListener("input", () => {
    text.style.color = color.value; 
});

bgColor.addEventListener("input", () => {
    text.style.backgroundColor = bgColor.value; 
});

fontSize.addEventListener("input", () => {
    text.style.fontSize = fontSize.value + "px"; 
});

fontFamily.addEventListener("input", () => {
    text.style.fontFamily = fontFamily.value; 
});

print.addEventListener("click", () => {
    alert(text.value);
});