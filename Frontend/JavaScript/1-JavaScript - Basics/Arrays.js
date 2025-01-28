// 1. Write the code to get this array outputted in the following forms:  

let arr1 = ["Coding", "Academy", "By", "Orange"]

arr1.push("Jordan") 
console.log(arr1); 
// 
console.log(arr1.slice(0,2));
// 
arr1.unshift(...["Welcome","To"])
console.log(arr1);
// 
arr1.pop()
console.log(arr1.slice(3));
// 
console.log(arr1.slice(2).join(" "));
// 
console.log(arr1.slice(2));
// 
arr1.shift()
arr1.shift()
console.log(arr1.toSpliced(1,2));



//  Using these two arrays write the JavaScript code that performs these operations on them:

var fruit = ["banana", "apple", "orange", "watermelon"]; 
var vegetables = ["carrot", "tomato", "pepper", "lettuce"]; 

// a. Remove the last item from the vegetable array.
vegetables.pop();
console.log(vegetables);

// b. Remove the first item from the fruit array.
fruit.shift();
console.log(fruit);

// c. Find the index of "orange."
console.log(fruit.indexOf("orange"));

// d. Add that number to the end of the fruit array.
fruit.push(fruit.indexOf("orange"));
console.log(fruit);

// e. Find the length of the vegetable array.
console.log(vegetables.length); 

// f.  Add that number to the end of the vegetable array.
vegetables.push(vegetables.length)
console.log(vegetables);

// g. Put the two arrays together into one array. Fruit first. Call the new Array "food".
let food = fruit.concat(vegetables);
console.log(food);

// h. Remove 2 elements from your new array starting at index 4.
let newFood = food.toSpliced(4 ,2)
console.log( newFood);

// i. Reverse your array.
newFood.reverse();
console.log(newFood);

// j.  Turn the array into a string.
console.log(newFood.join(" "));
