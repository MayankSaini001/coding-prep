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