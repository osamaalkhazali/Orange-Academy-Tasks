// 1. Write the expressions in JavaScript syntax for the following accounting equations (analyze the 
//      operation from the input and output) – use google if necessary:  

// Cash flow Ratio
let cashFlow = 1000;
let liabilities = 500;  
let cashFlowRatio = cashFlow / liabilities;
console.log( `Cash Flow Ratio : ${cashFlowRatio}`); 

// Net Income
let  Revenues = 1000;
let Expenses = 500;
let NetIncome = Revenues - Expenses;
console.log(`Net Income : ${NetIncome}`);

// Total assets  
let Liabilities = 1000
let equity = 500;
let totalAssets = Liabilities + equity;
console.log(`Total Assets : ${totalAssets}`);

// Net Income (Profit Margin & Sales)
let profit = 1000;
let sales = 500;
let netIncome = profit * sales;
console.log(`Net Income : ${netIncome}`);

// Average
let [a,b,c] = [7,9,2];
let average = (a + b + c) / 3;
console.log(`Average : ${average}`);

// Discount
let price = 150;
let discount = 0.3;
let discountedPrice = price * (1 - discount);
console.log(`Discounted Price : ${discountedPrice}`);

// Age limit (older than 18 and less than 30)  
let age = 20;
let ageLimit = age >= 18 && age <= 30;
console.log(`Age Limit : ${ageLimit}`);

// Exponential 
let n1=2
let n2=3
let exponential = Math.pow(n1,n2);
console.log(`Exponential : ${exponential}`);

// Remainder
let x = 10;
let y = 4;
let remainder = x % y;
console.log(`Remainder : ${remainder}`);



// 2. Find the output for these expressions and justify the output according to JavaScript interpretation: 


console.log(typeof(100)); 
// Output: "number"
// Explanation: 100 is a numeric value, so its type is "number".

console.log(typeof(73.9)); 
// Output: "number"
// Explanation: 73.9 is a floating-point number, so its type is also "number".

console.log(typeof(NaN)); 
// Output: "number"
// Explanation: NaN (Not-a-Number) is technically a special value of type "number" in JavaScript.

console.log(typeof("Water")); 
// Output: "string"
// Explanation: "Water" is a string literal, so its type is "string".

console.log(typeof(false)); 
// Output: "boolean"
// Explanation: `false` is a boolean value, so its type is "boolean".

console.log(typeof(9 != 11)); 
// Output: "boolean"
// Explanation: The comparison `9 != 11` evaluates to `true`, and the type of `true` is "boolean".

console.log("Orang" + "e"); 
// Output: "Orange"
// Explanation: The `+` operator concatenates the strings "Orang" and "e" into "Orange".

console.log("Orange" - "s", typeof("Orange" - "s")); 
// Output: NaN, "number"
// Explanation: The `-` operator tries to perform numeric subtraction, but strings ("Orange" and "s") can't be subtracted. This results in `NaN`, which is of type "number".

console.log("4" + "8", typeof("4" + "8")); 
// Output: "48", "string"
// Explanation: The `+` operator concatenates the two strings "4" and "8" into "48". The result is a string.

console.log("4" - "8", typeof("4" - "8")); 
// Output: -4, "number"
// Explanation: The `-` operator converts the strings "4" and "8" to numbers and performs subtraction, resulting in `-4`.

console.log("name" + 3, typeof("name" + 3)); 
// Output: "name3", "string"
// Explanation: The `+` operator concatenates the string "name" with the number `3`, resulting in "name3".

console.log("name" - 3, typeof("name" - 3)); 
// Output: NaN, "number"
// Explanation: The `-` operator attempts to subtract `3` from the string "name", which is invalid, resulting in `NaN`.

console.log(82 * "word", typeof(82 * "word")); 
// Output: NaN, "number"
// Explanation: The `*` operator tries to multiply `82` by the string "word". Since "word" can't be converted to a number, the result is `NaN`.

console.log(1 + "hello", typeof(1 + "hello")); 
// Output: "1hello", "string"
// Explanation: The `+` operator concatenates the number `1` with the string "hello", resulting in "1hello".

console.log("hello" + 1, typeof("hello" + 1)); 
// Output: "hello1", "string"
// Explanation: Same as above. The `+` operator concatenates the string "hello" with the number `1`.

console.log(1 + true, typeof(1 + true)); 
// Output: 2, "number"
// Explanation: In arithmetic operations, `true` is converted to `1`, so `1 + 1 = 2`.

console.log("hello" + true, typeof("hello" + true)); 
// Output: "hellotrue", "string"
// Explanation: The `+` operator concatenates the string "hello" with the boolean `true`, resulting in "hellotrue".

console.log(typeof(Infinity)); 
// Output: "number"
// Explanation: `Infinity` is a special numeric value in JavaScript, so its type is "number".

console.log(1 == '1', typeof(1 == '1')); 
// Output: true, "boolean"
// Explanation: The `==` operator performs type coercion, so the string `'1'` is converted to a number before comparison. `1 == 1` evaluates to `true`, and its type is "boolean".

console.log(1 === '1', typeof(1 === '1')); 
// Output: false, "boolean"
// Explanation: The `===` operator checks for strict equality without type coercion. Since `1` (number) is not the same type as `'1'` (string), the result is `false`, and its type is "boolean".
