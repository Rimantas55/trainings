//? exercize
// Back to the two gymnastics teams, the Dolphins and the Koalas! There is a new gymnastics discipline, which works differently.
// Each team competes 3 times, and then the average of the 3 scores is calculated (so one average score per team).
// A team ONLY wins if it has at least DOUBLE the average score of the other team. Otherwise, no team wins!

// 3. Create a function 'checkWinner' that takes the average score of each team as parameters ('avgDolhins' and 'avgKoalas'), and then logs the winner to the console, together with the victory points, according to the rule above. Example: "Koalas win (30 vs. 13)".
// 4. Use the 'checkWinner' function to determine the winner for both DATA 1 and DATA 2.
// 5. Ignore draws this time.

// TEST DATA 1: Dolphins score 44, 23 and 71. Koalas score 65, 54 and 49
// TEST DATA 2: Dolphins score 85, 54 and 41. Koalas score 23, 34 and 27

// HINT: To calculate average of 3 values, add them all together and divide by 3
// HINT: To check if number A is at least double number B, check for A >= 2 * B. Apply this to the team's average scores 😉

// countAvrScores = (score1, score2, score3) => (score1 + score2 + score3) / 3; // arrow function
// const countAvrScores = function (score1, score2, score3) {
//   return (score1 + score2 + score3) / 3;
// };

// let dolphinsAvrScore = countAvrScores(10, 1, 1);
// let koalasAvrScore = countAvrScores(22, 1, 1);

// const checkWinner = function (team1AvgScore, team2AvgScore) {
//   if (team1AvgScore === team2AvgScore) {
//     return console.log(
//       `Score is tie ${team1AvgScore} : ${team2AvgScore} \n No winner`
//     );
//   } else if (team1AvgScore >= team2AvgScore * 2) {
//     return console.log(
//       `Dolphins avg score is ${team1AvgScore} vs ${team2AvgScore} Koalas avg score \n Dolphins wins`
//     );
//   } else if (team2AvgScore >= team1AvgScore * 2) {
//     return console.log(
//       `Koalas avg score is ${team2AvgScore} vs ${team1AvgScore} Dolphins avg score \n Koalas wins`
//     );
//   } else {
//     console.log(
//       `Koalas avg score is ${team2AvgScore} vs ${team1AvgScore} Dolphins avg score \n no winner`
//     );
//   }
// };

// checkWinner(dolphinsAvrScore, koalasAvrScore);

//? example in arrray can we store and functions
// function calcAge(birthYear) {
//     return 2037 - birthYear;
// }
// const year = [1990, 1967, 2015];
// console.log(year);
// let age1 = calcAge(year[0]);
// let age2 = calcAge(year[1]);
// let age3 = calcAge(year[2]);

// const ages = [calcAge(year[0]), calcAge(year[1]), calcAge(year[year.length - 1])];
// console.log(ages);

//? use slice(), var.length, touppercase(),, promt user
//insert name in small letters, how to make it with first
// capitale letter, how to make lower case rest of name
//if needed

//* excercise
// Steven is still building his tip calculator, using the same rules as before: Tip 15% of the bill if the bill value is between 50 and 300, and if the value is different, the tip is 20%.

// 1. Write a function 'calcTip' that takes any bill value as an input and returns the corresponding tip, calculated based on the rules above (you can check out the code from first tip calculator challenge if you need to). Use the function type you like the most. Test the function using a bill value of 100.
// 2. And now let's use arrays! So create an array 'bills' containing the test data below.
// 3. Create an array 'tips' containing the tip value for each bill, calculated from the function you created before.
// 4. BONUS: Create an array 'total' containing the total values, so the bill + tip.

// TEST DATA: 125, 555 and 44

// HINT: Remember that an array needs a value in each position, and that value can actually be the returned value of a function! So you can just call a function as array values (so don't store the tip values in separate variables first, but right in the new array) 😉

// GOOD LUCK 😀

// let calcTip = function (bill) {
//   if (bill >= 50 && bill <= 300) {
//     //return console.log(`Tip 15%: ` + bill * 0.15);
//     return bill * 0.15;
//   } else {
//     //return console.log(`Tip 20%: ` + bill * 0.2);
//     return bill * 0.2;
//   }
// };

// const bills = [125, 555, 44];

// let tips = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
// console.log(tips);

// const total = [
//   bills[0] + calcTip(bills[0]),
//   bills[1] + calcTip(bills[1]),
//   bills[2] + calcTip(bills[2]),
// ];

// console.log(total);

//* Excercize jei gyveni iki 90 metu, kiek liko tau laiko gyventi
// function lifeInWeeks(age) {
//     var yearsLeft = 90 - age;
//     var days = (90 - age) * 365;
//     var weeks = (90 - age) * 52;
//     var months = (90 - age) * 12;

//     console.log(`You have ${days} days, ${weeks} weeks, and ${months} months left`);
// }

// lifeInWeeks(51);

//* excercise check if given number is even
// function isEven(num) {
//   if (num % 2 == 0) {
//       console.log("even");
//   }
// }
// isEven(4);

//* excercise check condintions
// function getColor(phrase) {
//     // const phrase = "stop";
//     if (phrase === "stop") {
//         console.log("red");
//     } else if (phrase === "slow") {
//         console.log("yellow");
//     } else if (phrase === "go") {
//         console.log("green");
//     } else {
//         console.log("purple");
//     }
// }
// getColor("stop");

//* excercise BMI
// function bmiCalculator(weight, height) {
//     const bmi = weight / (height * height);
//     if (bmi < 18.5) {
//         console.log("Your BMI is " + bmi + ", so you are underweight");
//     } else if (bmi > 18.5 && bmi < 24.9) {
//         console.log("Your BMI is " + bmi + ", so you have normal weight");
//     } else if (bmi > 24.9) {
//         console.log("Your BMI is " + bmi + ", so you are overweight");
//     }
// }

// bmiCalculator(45, 1.7);

// leap year or no
// function isLeap(year) {
//     if (year % 4 === 0) {
//         if (year % 100 === 0) {
//             if (year % 400 === 0) {
//                 return "Leap year";
//             } else {
//                 return "Not leap year";
//             }
//         } else {
//             return "Leap year";
//         }
//     } else {
//         return "Leap year";
//     }
// }
// const a = isLeap(2020);
// console.log(a);

// excercize buss fuzz
// let output = []; // empty array
// let count = 1;

// function fizzBuzz() {
//     if (count % 5 === 0 && count % 3 === 0) {
//         output.push("FizzBuzz");
//     } else if (count % 5 === 0) {
//         output.push("Buzz");
//     } else if (count % 3 === 0) {
//         output.push("Fizz");
//     } else {
//         output.push(count);
//     }
//     count++;
//     console.log(output);
// }
// fizzBuzz();

// excercize buss fuzz adding while loop
// let output = []; // empty array
// let count = 1;

// function fizzBuzz() {
//     while (count <= 20) {
//         if (count % 5 === 0 && count % 3 === 0) {
//             output.push("FizzBuzz");
//         } else if (count % 5 === 0) {
//             output.push("Buzz");
//         } else if (count % 3 === 0) {
//             output.push("Fizz");
//         } else {
//             output.push(count);
//         }
//         count++;
//         // console.log(output);
//     }
//     console.log(output);
// }
// fizzBuzz();

// excercize
// Let's go back to Mark and John comparing their BMIs! This time, let's use objects to implement the calculations! Remember: BMI = mass / height ** 2 = mass / (height * height). (mass in kg and height in meter)

// 1. For each of them, create an object with properties for their full name, mass, and height (Mark Miller and John Smith)
// 2. Create a 'calcBMI' method on each object to calculate the BMI (the same method on both objects). Store the BMI value to a property, and also return it from the method.
// 3. Log to the console who has the higher BMI, together with the full name and the respective BMI. Example: "John Smith's BMI (28.3) is higher than Mark Miller's (23.9)!"

// TEST DATA: Marks weights 78 kg and is 1.69 m tall. John weights 92 kg and is 1.95 m tall.
// const John = {
//   firstName: 'John',
//   lastName: 'Smith',
//   mass: 92,
//   height: 1.95,

//   calcBMI: function () {
//     this.bmi = this.mass / this.height ** 2;
//     return this.bmi;
//   },
// };

// const Mark = {
//   firstName: 'Mark',
//   lastName: 'Miller',
//   mass: 78,
//   height: 1.69,

//   calcBMI: function () {
//     this.bmi = this.mass / this.height ** 2;
//     return this.bmi;
//   },
// };

// John.calcBMI();
// Mark.calcBMI();

// console.log(John.bmi + ' Johns', Mark.bmi + ' Marks');

// if (John.bmi > Mark.bmi) {
//   console.log(
//     `${John.firstName} 's BMI ${John.bmi} is higher than ${Mark.firstName}'s 's BMI ${Mark.bmi}`
//   );
// } else if (John.bmi < Mark.bmi) {
//   console.log(
//     `${Mark.firstName} 's BMI ${Mark.bmi} is higher than ${John.firstName}'s BMI ${John.bmi}`
//   );
// }

// you have list of peoples name ["Angela", "Ben", "Jenny", "Michale", "Cloe"]
// make a random function which will pick randoom name who is paying for lunch

// function whosPaying() {
//   const list = ["Angela", "Ben", "Jenny", "Michale", "Cloe"];
//   let randIndex = Math.floor(Math.random() * list.length);
//   console.log(list[randIndex]);
// }
// whosPaying();

// output Michael is going to buy lunch today!

// sunkus pratimas
// function fibonacciGenerator(n) {
//   let output = [];
//   if (n === 1) {
//       output = [0];
//   } else if (n === 2) {
//       output = [0, 1];
//   } else {
//       output = [0, 1];
//       for (let i = 2; i < n; i++) {
//           output.push(output[output.length - 2] + output[output.length - 1]);
//       }
//   }
//   return output;
// }
// const a = fibonacciGenerator(0);
// console.log(a);

// https://medium.com/@andyide/creating-the-fibonacci-series-in-php-b2e8bc6a27e8
// recursive example  1
// function fib(n) {
//     if (n < 2) return n;
//     return fib(n - 1) + fib(n - 2);
// }

// for (let i = 0; i < 8; i++) {
//     console.log(fib(i) + " ");
// }

// recursive example 2 faktorial number 4! 4*3*2*1=24
// https://www.youtube.com/watch?v=LteNqj4DFD8
// function fnr(n) {
//     if (n === 1 || n === 0) {
//         return 1;
//     } else {
//         return n * fnr(n - 1);
//         // 4 * fnr(4-1=3) // kadangi fnr = 3 funkcija vel kviecia save
//         // 3 * fnr(3-1=2) // 2 yra praeitos funkcijos n reiksme nes tai nera 0 ar vienas
//         // 2 * fnr(2-1=1) // 1 kadangi pasieke base line dabar vyks matematika
//         // 2*1 = 2
//         // 2*3 = 6
//         // 6*4 = 24
//     }
// }
// const a = fnr(4);
// console.log(a);

// recursive example 3 - count down
// https://www.youtube.com/watch?v=lMBVwYrmFZQ

// function countDown(n) {
//     if (n <= 0) {
//         console.log("done");
//         return;
//     } else {
//         console.log(n);
//         n--;
//         countDown(n);
//     }
// }
// countDown(5);

// recursive example 4 - sum range 3 + 2 + 1 // case case - terminating condition // recursive case
// https://www.youtube.com/watch?v=lMBVwYrmFZQ

// function sumRange(n) {
//     if (n === 0) {
//         return 0;
//     } else {
//         console.log(n);
//         return n + sumRange(n - 1);
//         // 3 + countDown(3 - 1 = 2); // countdown = 3+3 = 6
//         //   2 + countDown(2-1=1) // countdown = 2+1 = 3
//         //     1 + countDown(1-1 = 0) // countdown = 0
//     }
// }
// const a = sumRange(3);
// console.log(a);
