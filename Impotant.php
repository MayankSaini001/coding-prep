/*===== Reverse String ====*/

function reverseString(str)(
    let reversed = ""
    for(let i = str.length - 1;i >= 0; i--){
        reversed += str[i];
    }
    return reversed;
)

console.log(reverseString("Hello"));


----

function reversedString(str)(
    let reversed = "";

for (let i = str.length -1; i >= 0; i--){
    reversed += str[i];
}
return reversed;
)

console.log(reverseString("Mango"));


/*==== Find Maximum number in array ====*/

function findMax(arr) {
  let max = arr[0];

  for (let i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }

  return max;
}

console.log(findMax([10, 5, 20, 8]));



/*===== find Minimum No. in array ======*/

function findMin(arr) {
  let min = arr[0];

  for (let i = 1; i < arr.length; i++) {
    if (arr[i] < min) {
      min = arr[i];
    }
  }

  return min;
}

console.log(findMin([10, 5, 20, 8]));


/*===== Loops ======*/
-- for Loop ---
<php
for($x = 1; $x <= 20; $x++){
    echo "Number - <br>";
}
?>

-- While Loops ---

<php
$i = 0;
while ($i <= 6) {
    echo $i;
    $i++;
}
?>

-- do...while loop --

<?php
$i = 1;

do{
    echo $i;
    $i++;
}while($i <= 5);
?>

-- foreach loop --

<?php
$colors = ["Red", "Green", "Blue"];

foreach($colors as $color){
    echo $color;
}
?>


/*====== Reverse Array ======*/

function findDuplicates(arr) {
  let duplicates = [];

  for (let i = 0; i < arr.length; i++) {
    for (let j = i + 1; j < arr.length; j++) {
      if (arr[i] === arr[j] && !duplicates.includes(arr[i])) {
        duplicates.push(arr[i]);
      }
    }
  }

  return duplicates;
}

console.log(findDuplicates([1, 2, 3, 2, 4, 1]));


/*====== Indexed Array  ======*/
$users = ["John","David"];


/*====== Associative Array ======*/
$users = [
"name" = "John",
"age" = "25"
];

/*====== Array duplicate values check======*/
<?php
$arr = [1, 2, 3, 3, 4, 5, 2, 6];

$result = [];

foreach ($arr as $value) {

    if (in_array($value, $result)) {
        echo $value . "\n";
    } else {
        $result[] = $value;
    }

}

?>