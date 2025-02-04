<?php 

/**?
 * Loop in php
  PHP me loops ka use repetitive tasks ko automate karne ke liye hota hai. Jab hume ek kaam ko baar-baar karna ho (fixed ya dynamic iterations ke liye), to hum loops ka use karte hain.

 */

// 1. For loop
// Syntax: for (init; condition; increment) {   code to be executed; }

for ($i = 0; $i < 5; $i++) {
    echo "The number is: $i <br>";
}

// 2. While loop
// 3. Do-While loop

// 4. Foreach loop (for arrays)
 $fruits = ['Apple', 'Banana', 'Orange', 'Mango'];

 foreach ($fruits as $fruit){
    echo "fruit: $fruit <br>";
 }



 // fore each loop employees salary management calculation code example

 $employees = [

    ["name" => "amit", "position" => "manager", "salary => 60000"],
    ["name" => "rakhesh", "position" => "developer", "salary => 45000"],
    ["name" => "priya", "position" => "Designer", "salary => 55000"],
    ["name" => "ankit", "position" => "tester", "salary => 35000"],
 ];

 $totalSalary = 0;

?>