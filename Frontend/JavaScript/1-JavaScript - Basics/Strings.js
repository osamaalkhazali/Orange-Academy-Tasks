
// 1. Write the code to make this string “Welcome to Orange” outputted in the following forms using string methods:

let p = "Welcome to Orange";

console.log(p.toUpperCase());
console.log(p.slice(8, 10).toUpperCase());
console.log("Hello from ".concat(p.slice(11)))
console.log(p.toLocaleLowerCase());
console.log(p.length)
console.log(p.replace("Orange", "\"Orange\""))
console.log(p.concat(" Jordan"));


// 2. Write the code that replaces all occurrences of the first letter of a string with '*'  


let word = "alkhazali";

let first = word[0];
let newWord = word.slice(1);
console.log(first + newWord.replaceAll(first, "*"));
