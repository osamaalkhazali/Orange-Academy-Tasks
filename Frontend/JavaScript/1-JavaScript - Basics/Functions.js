//  1. Write a function that makes each word in a string an element of an array.
const toArray = (words) => {
  return console.log(words.split(" "));
};
toArray("Orange Jordan"); 

// 2. Write a function that converts the first seven digits of a mobile phone number to a hidden form. 
function first7(number) {
  number = number.slice(7);
  number = "*******".concat(number);
  return console.log(number);
}
first7("0787276821");

// 3. Write a function that converts an email address to a hidden form. 
function hideEmail(email) {
  replaceLetters = email.slice(6, email.indexOf("@"));
  return console.log(email.replaceAll(replaceLetters, "..."));
}
hideEmail("orange_academy@orange.jo");

// 4. Write a function that turns the first letter of every word in a string to the upper case.  
function upperCase(string) {
  let arr = string.split(" ");
  arr.forEach((element, index) => {
    arr[index] = element.charAt(0).toUpperCase() + element.slice(1);
  })
  return console.log(arr.join(" "));
}
upperCase("coding academy by orange");

// 5 same as 4 but using map function
function upperCase2(string) {
  let arr = string.split(" ");
  arr = arr.map(element => element.charAt(0).toUpperCase() + element.slice(1));
  return console.log(arr.join(" "));
}
upperCase2("coding academy by orange");

// 6. Write a function that flips a number. 
function flipNumber(number) {
  return console.log(number.toString().split("").reverse().join(""));
}
flipNumber(1234);

// 7. Write a function that swaps the value of 2 variables in at least three ways. 
let a = 3;
let b = 4;
function swap(a, b) {
  [a , b] = [b , a];
  return console.log(a, b);
}
swap(a, b);

// 8. Write a function that removes an indexed character from a string. 
function removeIndex(word, index) {
  word = word.replace(word.charAt(3) , "");
  return console.log(word);
}
removeIndex("orange", 3);

// 9. Write a function that merges two strings after removing the first character of each one. 
function fun1(w1 , w2) {
  w1 = w1.replace(w1.charAt(0) , "");
  w2 = w2.replace(w2.charAt(0) , "");
  return console.log(w1.concat(w2));
}
fun1("lora" , "inge");


// 10. Write a function that ensures a specific character appears in a string's first or last position. 
function check(letter , word) {
  let checker = word.charAt(0) == letter || word.charAt(word.length - 1) == letter;
  return console.log(checker);
}
check("o" , "orange");
check("z" , "orange");
check("e" , "orange");


// 11. Write a function that takes a string and returns every word in the string as an array element. 

function to_array(string) {
  return console.log(string.split(" "));  
}
to_array("Coding Academy by Orange");

// 12. Write a function that takes a string and reorders the characters alphabetically. 
function sort(word) {
  word = word.split("").sort().join("");
  return console.log(word);
}
sort("orange");