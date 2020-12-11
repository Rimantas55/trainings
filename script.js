"use strict"; // allways include in beginngin of the script for errors
// most of times input values is returned as strings and we need to convert to number type if needed
// code editor
// code editor extentions
// install PHP
// how code from file
// console.log()  / alert('') / promt(); prmot give a string
// variables let vat const // const value can not change, let can change, var variable which is decleared in function scope you can use outside the function, if you will declear it as var
//

// Lexical scope,function inside function, nested functions
// function bankRobbery() {
//     const heroes = ["Spiderman", "Wolverine", "Black Panther"];
//     // console.table(heroes);
//     function cryForHelp() {
//         for (let hero of heroes) {
//             console.log(`Please help us ${hero.toUpperCase()}`);
//         }
//     }
//     // cryForHelp();
// }
// // bankRobbery();

// talk about return that needs to save to variable

// passing function as parameter
// function callTwiceFn(functio) {
//     functio();
//     functio();
// }

// function rollDieFn() {
//     const roll = Math.floor(Math.random() * 6) + 1;
//     console.log(roll);
// }
// callTwiceFn(rollDieFn); // we passing function without parentesis ()

//* CONCAT ARRAY IN JS OR MERGE ARRAY IN PHP
// const vegetables = ["Bulve", "Kopustas", "Burokas"];
// const fruits = ["Bananas", "Apple", "Morka"];

// const newArray = vegetables.concat(fruits);

// console.log(newArray);

//? STRINGS
// const string = "Bananas, Apple, Morka"; // `` "" is naujos eilutes
//strings have positions, count from 0
// variable.length // php strlen($str)
// variable.trim() // php trim($variable)
// variable.slice(1,3) gali buti ir minusas -1 ir t.t// php substr('abcdef', 1, 3);  // bcd
// variable.replace('actualString', 'replace to this string') // php str_replace("facts", "truth", $my_str);

//? ARRAY
//* let fruits = ["Banana", "Apple", "Orange"];
//* const friends = ["Mike", "Steve", "Peter"];

//* SHOW/GET ALL ARRAYS ELEMENTS IN CONSOLE
//const friends = ["Mike", "Steve", "Peter"];
//console.log(friends); // kazkodel rasant typeof raso kad objektas ne array

//* SHOW/GET ARRAYS ELEMENT VALUE OF SELECTED INDEX
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends[1]); // Steve
// console.log(typeof friends[1]);

//* SHOW/GET ARRAYS LENGTH / TOTAL NUMBER OF ELEMENTS
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends.length);

//* SHOW/GET ARRAYS LAST ELEMENT VALUE
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends[friends.length - 1]); // get last element in the array

//* SET/REPLACE ARRAYS OLD VALUE BY NEW VALUE BY SELECTED INDEX
// const friends = ["Mike", "Steve", "Peter"];
// console.log((friends[3] = "jack")); // set new value or replace value from array to another, if you replace or set array element which is not exist it will be counted as empty element
// console.log((friends[0] = "FRANK"));
// console.log(friends);

// console.log((friends[6] = "Tom"));
// console.log(friends); // ['FRANK', 'Steve', 'Peter', 'Jack', 'empty', 'empty', 'Tom'];

//* ADD ELEMENT TO THE END OF ARRAY ARRAY
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends);
// friends.push("Jay");
// console.log(friends);

//* ADD ELEMENT TO THE START OF ARRAY ARRAY
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends);
// friends.unshift("John");
// console.log(friends);

//* REMOVE LAST ELEMENTS FROM ARRAY
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends);
// friends.pop();
// console.log(friends);

//* REMOVE FIRST ELEMENTS FROM ARRAY
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends);
// friends.shift();
// console.log(friends);

//* VALIDATE IF ELEMENT EXIST IN ARRAY - RETURN VALUE 1 OR -1
// const friends = ["Mike", "Steve", "Peter"];
// console.log(friends);
// console.log(friends.indexOf("Steve") + " index is Steve");
// console.log(friends);
// console.log(friends.indexOf("Bob"));

// console.log(friends.includes("Steve")); // returns value TRUE of that element if he element DOES exist in array
// console.log(friends.includes("bob")); //  returns value FALSE of that element if element DOES NOT exist in array

// patikrina ar toks elementas yra array, ir jei yra kazka padaro arba ne.
// if(friends.includes('Steve')) {
//   console.log('You have a friend called Steve');
// }

//* CREATE NEW ARRAY AND ADD NEW VALUES
// const years = [1990, 1999, 2005, 1987];
// const age = [];

// for (let i = 0; i < years.length; i++) {
//     // option 1
//     age[i] = 2020 - years[i];
//     //option 2 better
//     // ages.push(2020 - years[i]);
// }
// console.log(age);

//? ASSOCIATIVE ARRAY IN JS CAN HAVE METHODS BUT IT IS NOT CLASSES
// const person = {
//     name: "Brad",
//     lastName: "Traversy",
//     age: 30,
//     birthYear: 1987,
//     hobbies: ["tennis", "socer", "cars"],
//     friends: ["Mike", "Steve", "Peter"],
//     job: "programer",

// methods of object

// example 1
// calcAge: function (birthYear) {
//     return 2037 - birthYear;
// },

// example 2 using 'this'
// calcAge: function () {
//     return 2037 - this.birthYear;
// },

// example 3 - storing method in veriable
// calcAge: function () {
//     this.age = 2037 - this.birthYear;
//     return this.age;
// },
// };

//* FOR IN LOOP - lOOP THOUGHT OBJECTS PARAMETERS GETTING KEYES AND VALUES
// for (let key in person) {
//     console.log(key, person[key]); // key is first key of array // person[key] is value of that key
// }

// console.log(Object.keys(person)); // get all key of array and store in array
// console.log(Object.values(person)); // get all key values of array and store in array
// console.log(Object.entries(person)); // nested arrays with keys and values

//* CALL METHOD
// console.log(person.calcAge(1987)); // example 1
// console.log(person.calcAge()); // example 2
// console.log(person.calcAge()); // example 3

//* GET ASSOCIATIVE ARRAYS VALUE
// console.log(person);
// console.log(person.lastName); // option 1
// console.log(person["lastName"]); // option 2

// example how to check if such value in array exist via promt()
// const interestedIn = prompt(`What do you want to know about Jonas?
// Choose between fistName, lastName, age, job, and friends`);

//* CHECK IF SUCH ASSOCIATIVE ARRAYS KEY EXIST
// console.log(person.name ? person.name : "no such info");

// console.log(person[interestedIn]);
// console.log(person[interestedIn] ? person[interestedIn] : "no such info");

//* ADD KEYS AND VALUES TO ARRAY
// person.location = "Portugal";
// person["twitter"] = "@jonasjonas";
// console.log(person);

// excercise no hard coding
// console.log(person["name"] + ` has ` + person.hobbies.length + ` hobbies and his best hobby is ` + person.hobbies[0]);

//? FOR LOOP
// basic example // story with gym reps and later how update the number
// for (let i = 0; i < 5; i++) {
//     console.log(`Counter ${i}`);
// }

//* get index/element value from array using for loop
// const friends = ["Mike", "Steve", "Peter"];
// for (let i = 0; i < friends.length; i++) {
//     console.log(`Element index/location: ${i} //index value: ${friends[i]} \n`);
// }

//* sum all values in array using for loop
// const numbers = [1, 2, 3, 4];
// let sum = 0;
// for (let i = 0; i < numbers.length; i++) {
//     sum = sum + numbers[i];
//     console.log(`${sum} sum //index of array and loop round ${i} //value of array: ${numbers[i]} \n`);
// }
// console.log(sum);

//* CREATE NEW ARRAY AND INSERT DATA TO NEW ARRAY
// const person = ["Brad", "Traversy", 30, 1987, ["tennis", "socer", "cars"], ["Mike", "Steve", "Peter"], "programer"];

// const types = [];

// for (let i = 0; i < person.length; i++) {
// option 1
// types[i] = typeof person[i];
// //option 2
//     //types.push(typeof person[i]);
// }
// console.log(types);

//* CONTINUE AND BREAK LOOP
// const years = [1990, 1999, 2005, 1987, 2010];
// const ages = [];

// for (let i = 0; i < years.length; i++) {
//      if (years[i] > 2000) break; // eina paeiliui index ir kai prieina salyga nutraukia
//     //if (years[i] > 2000) continue; // parodys tik tuos kurie atitinka salyga, kitus praskipins
//     ages.push(2020 - years[i]);
// }
// console.log(ages);

//* lOOP INSIDE LOOP
// for (let exercise = 1; exercise <= 5; exercise++) {
//     console.log(`------Excercise ${exercise}-------`);
//     for (let rep = 1; rep <= 5; rep++) {
//         console.log(`Excercise ${exercise} reps ${rep}`);
//     }
// }

//? WHILE LOOP // we use then we do not know condition
// let counter = 0;
// while (counter < 10) {
//     counter = counter + 1;
//     console.log(`Counter ${counter} <br>`);
//     counter++;
// }

// example 2 in this example if will be 0 than show nothing
// let dice = Math.trunc(Math.random() * 6) + 1;

// while (dice !== 6) {
//     console.log(`You rolled a ${dice}`);
//     dice = Math.trunc(Math.random() * 6) + 1; // cia yra tas pats kas i++
//     if (dice === 6) console.log(`Loop is about to end`);
// }

//? DO WHILE

//? FOREACH LOOP

//? type NUMBERS intigeter
//floating point or float decomal number 20.5
// $x = 4;
// $y = 9;
// $z = 4;

// $sum = $x+$y+$z;
// $average = ($x + $y + $z) / 3;
// echo $sum . "<br>" . $average . "<br>";
// echo number_format($average, 2, ',', '');
//object
//resource
//null
//excercise
// const age = Number(prompt());
// const humanAge = (age - 2) * 4 + 21;
// console.log(humanAge);
// score = score + 5
// score = score + 5 and so on
// score += 5
// const x = 3
// const y = x++
// const y += 1 // kiek bus y? 4, bet kodel?
// aritmetika modulus % only fr positive number
// asignment opperators  += -= *= /=  .= concatinate and asign
// string = 'bla bla';
// string .= ' is not bla bla';
// echo .= string
// comparison opperators < > == === (data types) !=
// increment or decrement ++ --
// logical operators && || true false
// conditions statement
// swutch statement

//? null - no value,
//? undefined  - i do not know what is this, no value
//? MATH * / ** + - >< = == === >= +=
//? NaN not a number 1 + NaN // NaN
//? typeof
//? variables let const
//? update the number let score = 0;
//? logical NO ! -- sito dar neuprantu
//? booleans // true or false
//? naming variables camelCase no space no numbers start with number
//? it is like psr standarts for js https://github.com/rwaldron/idiomatic.js/
//? math methods
// Math.floor(23.90) bus 23
// Math.ceil(34.1) bus 35
// Math.floor(Math.random() * 5) + 1 (reiskia 1-5)
// Math.floor(Math.random() * 3) + 20 (reiskia 20-23)

// FOR OF LOOP - GET VALUES OF ARRAY
// const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// for (let number of numbers) {
//     console.log(number);
//     // console.log(Math.pow(number, 2));
// }

// FOREACH METHOD
// const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// numbers.forEach(function (element) {
//     console.log(element);
// });

//* Excercise how to make string from array
// const temp = [17, 21, 23, -5, 26];
// const temp2 = [12, 5, -5, 0, 4];

// // outout 17 C in 1 days ... 21 c in 2 days ... 23 C in 3 days ...
// // &deg;

// const printForcast = function (arr) {
//     let string = "";
//     for (let i = 0; i < temp.length; i++) {
//         console.log(temp.toString());
//         string = string + ` ${arr[i]}°C in ` + (i + 1) + ` days ...`;
//     }
//     console.log(`... ` + string);
// };

// printForcast(temp);

// let toDOarray = [];
// let input = prompt("Choose what you want to do");

// while (input !== "quite" && input !== "q") {
//     if (input === "new") {
//         let addToList = prompt("Type what you want TODO");
//         toDOarray.push(addToList);
//     } else if (input === "list") {
//         for (let i = 0; i < toDOarray.length; i++) {
//             console.log(`${i}: ${toDOarray[i]}`);
//         }
//     } else if (input === "delete") {
//         // for (let i = 0; i < toDOarray.length; i++) {
//         //     console.log(`${i}: ${toDOarray[i]}`);
//         // }
//         let deleteItem = Number(prompt("Enter number which Item you want to delete"));
//         console.log(deleteItem);
//         toDOarray.splice(deleteItem, 1);
//     }
//     console.log(toDOarray);
//     input = prompt("Choose what you want to do");
// }
// console.log("OK QUIT THE APP");

// return works like break, does not allow to excute next code, it stops execution
// function sumArray(array) {
//     let sum = 0;
//     for (let i = 0; i < array.length; i++) {
//         sum += array[i];
//     }
//     return console.log(sum);
// }
// // sumArray([1, 2, 3]);
// sumArray([50, 50, 1]);

// exercise

// const weekDay = [null, "Monday", "Thuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

// function returnDay(n) {
//     for (let i = n; i < weekDay.length; i++) {
//         let day = weekDay[n];
//         day = day;
//     }
//     console.log(weekDay[n]);
// }
// returnday(0);

// print html with php // option 1
// <?php foreach($avriables as $kye => $value) { ?>
//   <div>Smth content</div>
//   <?php } ?>

// print html with php // option 2
// <?php foreach($avriables as $kye => $value): ?>
//   <div>Smth content <?php echo smth ;?></div>
//   <?php endForeach; ?>

//* MAP METHOD - CAN MODIFY CREATES NEW MODIFIED ARRAY
// const texts = ["rolf", "lol", "omg", "wow"];
// const caps = texts.map(function (arrayElement) {
//     return arrayElement.toUpperCase();
// });
// console.table(texts);
// console.table(caps);

// array with objects example
// const movies = [
//     {
//         title: "Alien",
//         score: 90,
//     },
//     {
//         title: "Superman",
//         score: 20,
//     },
//     {
//         title: "Spiderman",
//         score: 88,
//     },
// ];

// const titlesArray = movies.map(function (movie) {
//     return movie.title;
// });
// console.table(titlesArray);

// console.table([" timethree", "    darth_hater", "sassyfrassy     ", " elton john     "]);

// function cleanNames(array) {
//     return array.map(function (element) {
//         return element.trim();
//     });
// }

// console.table(cleanNames([" timethree", "    darth_hater", "sassyfrassy     ", " elton john     "]));

// SETTIMEOUT AND SETINTERVAL
// arrow function option 1
// setTimeout(() => {
//     console.log("Hello");
// }, 3000);

// regular function option 2
// function time() {
//   return console.log("Hello World");
// }
// setTimeout(time, 3000);

// const id = setInterval(() => {
//     console.log(Math.random());
// }, 2000);

// clearInterval(id);//sustabdo setInterval jei reikia

//* ARRAY FILTER - creates a new array with all elements that pass the test implemented by the provided function
// const nums = [9, 8, 7, 6, 5, 4, 3, 2, 1];
// const odds = nums.filter((n) => {
//     return n % 2 === 1; // out call back returns true or false
//     // if it returns true, n is added to the filtered array
// });
// // [9, 7, 5, 3 ,1]
// console.table(odds);

// const smallNums = nums.filter((n) => n < 5);
// // [4, 3, 2, 1]
// console.table(smallNums);

// exercise
// const names = ["mark", "aaaaaaaaaaaaaaa", "q2sassssssssssss", "carrie98", "MoanaFan"];

// const shortNames = [];
// for (let i = 0; i < names.length; i++) {
//     if (names[i].length < 10) {
//         console.log(names[i]);
//         shortNames.push(names[i]);
//     }
// }
// console.table(shortNames);

//* SOME & EVERY - returns true or false
// const exams = [80, 98, 92, 78, 77, 90, 84, 77];
// // if all elements pass condition returns true, if not false
// console.log(exams.every((score) => score >= 75)); // returns true

// const exams2 = [80, 98, 92, 78, 77, 90, 84, 77, 45];
// // if at least 1 element pass condition returns true, if not false
// console.log(exams2.some((score) => score <= 75)); // returns true

// exercise code challenge 50
// const allEvens = function (array) {
//     return array.every((element) => element % 2 === 0);
// };

// console.log(allEvens([2, 4, 6, 8]));
// console.log(allEvens([1, 4, 6, 8]));
// console.log(allEvens([1, 2, 3]));

// Spred with Array Literals - it seems that it creates new array
// const cats = ["Blue", "Scout", "Rocket"];
// const dogs = ["Rusty", "Wyatt", "Smoothy"];
// const allPets = [...cats, ...dogs];
// console.log(cats);
// console.log(dogs);
// console.table(allPets);
