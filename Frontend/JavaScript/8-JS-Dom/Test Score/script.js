let names = ["Ben", "Joel" , "Jenny", "Adam"];
let scores = [88, 98, 77, 88];


const btns = document.querySelector(".btns");
const results = document.querySelector(".results");
const scoresList = document.querySelector(".scores");
const inputName = document.getElementById("name");
const inputScore = document.getElementById("score");

const addBtn = document.createElement("button");
addBtn.textContent = "Add Score";
btns.appendChild(addBtn);

const resultBtn = document.createElement("button");
resultBtn.textContent = "Result";
btns.appendChild(resultBtn);


const scoreBtn = document.createElement("button");
scoreBtn.textContent = "Score";
btns.appendChild(scoreBtn);




function editResult(params) {
  const highestScore = Math.max(...scores);
  const highestScoreIndex = scores.indexOf(highestScore);
  results.innerHTML = "Average Score = " +
                      scores.reduce((a, b) => a + b) / names.length + "<br>" + 
                      "Highest Score = "+ names[highestScoreIndex] + " with score of "  + highestScore ;
}
editResult();


resultBtn.addEventListener("click", () => {
  editResult();
})


const scoreTable = document.createElement("table");

function editScore(params) {
  scoreTable.innerHTML = "<tr><th>Name</th><th>Score</th></tr>";
  scores.forEach((score , index) => {
    const row = document.createElement("tr");
    const name = document.createElement("td");
    const scoreElement = document.createElement("td");
    name.textContent = names[index];
    scoreElement.textContent = score;
    row.appendChild(name);
    row.appendChild(scoreElement);
    scoreTable.appendChild(row);
    scoresList.appendChild(scoreTable);
  })
}
editScore();



addBtn.addEventListener("click", () => {
  if (inputName.value !== "" && inputScore.value !== "" && inputScore.value >= 0 && inputScore.value <= 100) {
    names.push(inputName.value);
    scores.push(parseInt(inputScore.value));
    inputName.value = "";
    inputScore.value = "";
    inputName.focus();
  } else {
    alert("Please enter a valid name and score");
  }
})

scoreBtn.addEventListener("click", () => {
  editScore();
})
