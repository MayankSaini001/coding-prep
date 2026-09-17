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




<!-- $arr = [1,2,3,3,4,5];

$result = [];

foreach ($arr as $value) {
    if (!in_array($value, $result)) {
        $result[] = $value;
    }
}

print_r($result); -->



<!-- $arr = [1, 2, 3, 3, 4, 5, 2, 6];

$result = [];

foreach ($arr as $value) {

    if (in_array($value, $result)) {
        echo $value . "\n";
    } else {
        $result[] = $value;
    }

} -->



// $arr = [1,2,2,3,4,5,5,6];

// $result = [];

// foreach ($arr as $value) {

// if(in_array($value, $result)) {
// echo $value . "\n";

// }else {

//       $result[] = $value;
// }
// }

// Attract

// function reverseString($str) {
//     $result = "";
//     for($i = strlen($str) - 1;$i >= 0; $i--){
//   $result .= $str[$i];
// } 
// return $result;
// }

// echo reverseString ("attract");

// Function reverseString($str){

// $result = "";

// for($str - strlen($str) - 1; $i >= 1; $i--){
// $result .=$str[$i];
// }
// return $result;
// }
// result reverseString("Mayank");


// function reversedString($str) {
//     $result = "";

//     for ($i = strlen($str) - 1; $i >= 0; $i--) {
//         $result .= $str[$i];
//     }

//     return $result;
// }

// echo reversedString("VsCode");


// function reversedString($str){
// $result = "";

// for($i = strlen($str) - 1; $i >= 0; $i--){
//    $result .= $str[$i];
// }
// return $result;
// }

// echo reversedString("Reverse");

<?php
$arr = [10, 5, 20, 8, 15];

$largest = $arr[0];
$secondLargest = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $largest) {
        $secondLargest = $largest;
        $largest = $arr[$i];
    } elseif ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
        $secondLargest = $arr[$i];
    }
}

echo $secondLargest;




?>