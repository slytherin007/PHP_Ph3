<?php
$num1=24;
$num2=4;

//Arithmetic Operators
var_dump($num1+$num2);
var_dump($num1-$num2);
var_dump($num1*$num2);
var_dump($num1/$num2);
var_dump($num1%$num2);
var_dump($num1**$num2);

//Logical Operators
var_dump($num1 and $num2);
var_dump($num1 or $num2);
var_dump($num1 xor $num2);
var_dump($num1 && $num2);
var_dump($num1 || $num2);
var_dump(! $num2);

//Comparison Operator
var_dump($num1 == $num2);
var_dump($num1 === $num2);
var_dump($num1 != $num2);
var_dump($num1 <> $num2);
var_dump($num1 !== $num2);
var_dump($num1 > $num2);
var_dump($num1 < $num2);
var_dump($num1 >= $num2);
var_dump($num1 <= $num2);

//increment and decrement operator
$num1++;
echo"Post increment: "."$num1\n"; //post
++$num1;
echo"Pre increment: "."$num1\n"; //pre

$num2--;
echo"Post decrement: "."$num2\n"; //post
--$num2;
echo"Pre decrement: "."$num2\n"; //pre

//Assignment Operators
$num1+=$num2;
echo "The value is: " . $num1 . "\n";
$num1-=$num2;
echo "The value is: " . $num1 . "\n";
$num1*=$num2;
echo "The value is: " . $num1 . "\n";
$num1/=$num2;
echo "The value is: " . $num1 . "\n";
$num1%=$num2;
echo "The value is: " . $num1 . "\n";

?>