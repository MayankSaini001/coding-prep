// function reverseString(str) {
//     let reversed = "";

//     for (let i = str.length - 1; i >= 0; i--) {
//         reversed += str[i];
//     }

//     return reversed;
// }

// console.log(reverseString("Hello"));


//Array Sorting

// let numbers = [1, 2, 3, 4, 5, 6];
// let evenNumbers = [];

// for (let i = 0; i < numbers.length; i++) {
//     if (numbers[i] % 2 === 0) {
//         evenNumbers.push(numbers[i]);
//     }
// }

// console.log(evenNumbers);

// Output = [2, 4, 6]

<?php

$arr = [1,2,3,3,4,5];

$result = [];

foreach ($arr as $value) {
    if (!in_array($value, $result)) {
        $result[] = $value;
    }
}

print_r($result);

?>