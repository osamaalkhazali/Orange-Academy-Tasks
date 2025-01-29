// 1.Create an array of numbers and use the forEach() method to print each element to the console. 
let arr =  [1, 2, 3, 4, 5] 
arr.forEach((item) => {console.log(item)})

// 2.Use the map() method to square each element in an array of numbers and return a new array. 
let arr1 = arr.map((item) => item * 2)
console.log(arr1)

// 3.Use the filter() method to create a new array containing only even numbers from an original array. 
let arr2 = arr.filter((item)=> item % 2 === 0);
console.log(arr2);

// 4.Use the reduce() method to sum up all elements in an array of numbers. 
let arr3 = arr.reduce((acc , curr) => acc + curr);
console.log(arr3);

// 5.Use the sort() method to sort an array of strings alphabetically. 
let arr5 =  ["apple", "cherry", "banana"]
arr5.sort();
console.log(arr5);

// 6.Use the reverse() method to reverse the order of elements in an array. 
arr5.reverse();
console.log(arr5);

// 7.Use the concat() method to combine two arrays into a single array. 
let arr6 =  [1, 2, 3];
let arr7 =  [4, 5, 6];
let arr8 = arr6.concat(arr7);  
console.log(arr8);

// 8.Use the slice() method to extract a portion of an array. 
function slice(arr , start , end) {
  let first = arr.slice(0, start);
  let second = arr.slice(end);
  return console.log(first.concat(second));
}
slice([1, 2, 3, 4, 5, 6], 2, 4)

// 9.Use the splice() method to add and remove elements from an array. 
function splice(arr , num) {
  return console.log(arr.splice(num));
}
splice([1, 2, 3, 4, 5], 3)

// 10.Use the indexOf() method to find the index of a specific element in an array. 
function indexOf(arr , num) {
  return console.log(arr.indexOf(num));
}
indexOf([1, 2, 3, 4, 5], 3)

// 11.Use the join() method to convert an array to a string. 
function join(arr) {
  return console.log(arr.join(""));
}
join([1, 2, 3, 4, 5])

// 12.Use the split() method to convert a string to an array. 
function split(str) {
  return console.log(str.split(""));
}
split("12345");


// 13.Use the length property to find the number of elements in an array. 
function length(arr) {
  return console.log(arr.length);
} 
length([1, 2, 3, 4, 5])


// 14.Use the for...of loop to iterate through an array. 
function forOf(arr) {
  for (let item of arr) {
    console.log(item);
  }
}
forOf([1, 2, 3, 4, 5])


// 15.Use the for...in loop to iterate through the indexes of an array. 
function forIn(arr) {
  for (let index in arr) {
    console.log(index);
  }
}
forIn([1, 2, 3, 4, 5])

// 16.Use the Array.isArray() method to check if an object is an array. 
function isArray(arr) {
  return console.log(Array.isArray(arr));
}
isArray([1, 2, 3, 4, 5])

// 17.Use the Array.from() method to convert an array-like object to an array. 
function from(arr) {
  return console.log(Array.from(arr));
}
from('12345')

// 18.Use the Array.of() method to create an array with a set of elements. 
function of(...arr) {
  return console.log(Array.of(...arr));
}
of(1, 2, 3, 4, 5)

// 19.Use the Array.prototype.fill() method to fill an array with a specific value. 
function fill(arr , ...value) {
  return console.log(arr.fill(...value));
}
fill([1, 2, 3, 4, 5], 0 , 0 , 3)

// 20. Use the Array.prototype.copyWithin() method to copy a sequence of elements within an Example:array.  [1, 2, 3, 4, 5], 1, 3
function copyWithin(arr , start , end) {
  return console.log(arr.copyWithin(start , end));
}
copyWithin([1, 2, 3, 4, 5], 1, 3)

