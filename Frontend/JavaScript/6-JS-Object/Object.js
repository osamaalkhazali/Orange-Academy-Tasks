// 1. Create an object with properties name, age, and gender and print its values to the console.  
let me = {
  name : "Osama",
  age : 27,
  gender : "male"
}
console.log(`${me.name} ${me.age} ${me.gender}`)

// 2. Create an object and add a new property to it using dot notation.  
me.country = "Jordan";
console.log(`${me.name} ${me.age} ${me.gender} ${me.country}`)

// 3. Create an object and add a new property to it using bracket notation. 
me["city"] = "Amman";
console.log(`${me.name} ${me.age} ${me.gender} ${me.country} ${me.city}`)

// 4. Access the value of a property in an object using dot notation.  
console.log(me.name)


// 5. Access the value of a property in an object using bracket notation.  
console.log(me["name"])

// 6. Use a for-in loop to iterate through the properties of an object.  
for (let key in me) {
  console.log(me[key] + " : " + key);
}

// 7. Use the Object.keys() method to get an array of an object's properties.  
console.log(Object.keys(me));

// 8. Use the Object.values() method to get an array of an object's values.  
console.log(Object.values(me));

// 9. Use the Object.entries() method to get an array of key-value pairs for an object. 
console.log(Object.entries(me));

// 10. Use the Object.assign() method to merge two objects. 
let hobbies = {
  hobby : "Coding"
}
let all = Object.assign(me , hobbies);
console.log(all);


// 11. Use the Object.freeze() method to prevent changes to an object.  
Object.freeze(me);
me.name = "Ahmed";
console.log(me);

// 12. Use the Object.seal() method to prevent changes to an object's properties but allows changes to its values. 
let him = {
  name : "Osama",
  age : 27,
  hobbies : ["Coding" , "Football"]
}
Object.seal(him);
him.age = 15;
him.name = "ahmed";
console.log(him);