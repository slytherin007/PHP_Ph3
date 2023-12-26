<?php
/**
 * One can concatnate strings using . or
 * using " " for more simplification
 */


$x="Hello";
$y="John is a good boy";
$z="           John is a good boy            ";

echo "$x"."\n";// " " can parse escape characters

echo '$x'."\n";// ' ' cannot parse escape characters

echo $x." ".$y."\n";

echo trim($z)."\n"; // removes whitespaces from front and back

echo strlen($x)."\n"; // finds length of the string

echo str_word_count($y)."\n"; // counts the no. of words in a particular string or sentence

echo strrev($x)."\n"; // reverses a string

echo strtoupper($x)."\n"; // returns string in upper case

echo strtolower($x)."\n"; // returns string in lower case

echo str_replace("John","Jimmy",$y)."\n";// replace a particular word in string

/*Slicing: return a range of characters by using the substr() function

Syntax: substr(Variable_name,index_start,End or length)
*/

echo substr($y,7)."\n"; // start the slice at index 7 and go to the end

echo substr($y,7,5)."\n"; // start the slice at index 7 and end the slice 5 positions later

echo substr($y,-12)."\n"; // start the slice at index -12 and go to the end

echo substr($y,-8,5)."\n"; // start the slice at index -8 and end the slice 5 positions later

?>

//Index of first character of a string is 1 and that of the last character is -1 
//substr can have negative index values

/*
String        G   o   o   d
+ve index     0   1   2   3
-ve index    -4  -3  -2  -1
*/