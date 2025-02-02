const p = document.querySelector("p");
const body = document.querySelector("body");

const words = p.textContent.split(" ")
const link = document.createElement("a");
link.setAttribute("href", "https://www.google.com/");
link.textContent = "Google";
const br = document.createElement("br");
const NoWords = words.length;
const newWords = words.map((word) => {
  if (word.length > 8) {
    return '<mark>' + word + '</mark>';
  }
  else {
    return word;
  }
})
p.innerHTML = newWords.join(" ");
const Lines = p.innerHTML.split(".").join("<br>");
p.innerHTML = Lines;


body.append(link);
body.append(br);
body.append(NoWords);