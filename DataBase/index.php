<?php


function incrementFun(&$value, $amount = 1)
{
    $value = $value + $amount;
}
$value = 10;
incrementFun($value);
var_dump($value);
echo "<br>";
function incrementFun2($value, $amount = 1)
{
    $value = $value + $amount;
}
$value = 10;
incrementFun2($value);
var_dump($value);

/**
 * Closures
 * closure is the PHP equivalent of an anonymous function, eg .A function that does not have a name
 */
$quantity = 1;
# use special keyword to use the variable form outside
$calculator = function ($number) use ($quantity) {
    return $number + $quantity;
};
var_dump($calculator(7));
echo "<br>";
////////////////////////////////////////////////////////////
$fruits = ['banana', 'apple', "Kiwi", "Orange"];
$found = in_array('banana', $fruits); // true
var_dump(current($fruits)); // banana
var_dump(next($fruits)); //apple
var_dump(next($fruits)); // kiwi
var_dump(current($fruits)); // kiwi
var_dump(reset($fruits)); //banana
var_dump(end($fruits)); //Orange
var_dump(prev($fruits));

////////////////////////////////////////////////
function print_fruits($value)
{
    echo "$value <br/>";
}
$fruits = ['banana', 'apple', "Kiwi", "Orange"];
array_walk($fruits, "print_fruits");
/////////////////////////////////////////////////
//Array_chunck: split an array into smaller chunks
$a = array(5 => "banana", 22 => "Kiwi");
var_dump(array_merge($a));
$input_array = array('a', 'b', 'c', 'd', 'e');
$output_array = array_chunk($input_array, 2);
var_dump($output_array);

///////////////////////////////////////////////////////
//     Array navigation
//  To loop on two arrays at once (assuming both have the same
// length)
$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];
$result = array_map(function ($instructor, $course) {
    return "$instructor teaches $course <br>";
}, $instructors, $courses);
var_dump($result);
/////////////////////////////////////////////////////////
// Array navigation
// ● Combine two arrays into one key-value pair array
$combinedArray = array_combine($instructors, $courses);

////////////////////////////////////////////////////////////////
// Array navigation
// ● Remove empty values: use array_filter()
$my_array = [1, 90, 2, null, 3, '', 55, [], 5, 6, 7, 8, ""];
$non_empties = array_filter($my_array);
var_dump($non_empties);
//////////////////////////////////////////////////////////
// Array navigation
// ● array_intersect_key : Computes the intersection of arrays
// using keys for comparison
// ● Use it to pass certain keys.
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan' => 8);
var_dump(array_intersect_key($array1, $array2));
$arr = array('a' => 123, 'b' => 213, 'c' => 321);
$allowed = array('b', 'c');
print_r(array_intersect_key($arr, array_flip($allowed)));
//////////////////////////////////////////////////////////////////
// Count elements in an array
// ● Count, sizeof, array_Count_values
$students = array("Ali", "Ahmed", "Mostafa", "Omar", "Ahmed");
var_dump(count($students)); // 5
var_dump(sizeof($students)); // 5
var_dump(array_count_values($students));
