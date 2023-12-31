<?php
//PHP String Operators
// Two operators that are specially designed for strings
$str1="Good "; 
$str2="Morning";

echo $str1 . $str2."\n"; // Concatenation of $str1 and $str2
$str1 .=$str2;// Appends str1 and str2 and assigns to str1
echo $str1."\n";

// PHP Array Operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

//print_r(): displays information about a variable in a way that's readable by humans.
print_r($x + $y)."\n";// union of $x and $y
print_r($x == $y)."\n";// Returns true if $x and $y have the same key/value pairs 
print_r($x === $y)."\n"; /* Returns true if $x and $y have the same key/value pairs 
                            in the same order and of the same types*/
print_r($x != $y)."\n"; //Returns true if $x is not equal to $y
print_r($x <> $y)."\n"; //Returns true if $x is not equal to $y	
print_r($x !== $y)."\n"; //Returns true if $x is not equal to $y	

//PHP Conditional Assignment Operators
$a=45;
$b=78;

echo $a>$b?"$a":"$b"."\n"; /* Ternary operator: follows the same algorithm as of if-else statement 
                              but the conditional operator takes less space and helps to write the 
                              if-else statements in the shortest way possible. */

/*If the first operand is null or doesn’t exist, the null coalescing operator 
returns the second operand. Otherwise, it returns the first one.*/
echo $color??"red"."\n"; 

$car="BMW";

echo $car??"i10"."\n";
/*Now in the above case car variable exists and is already defined 
with value BMW so the output would be printed as BMW but incase of
color variable which is does not exists(undefined) so the output is
printed as red
*/ 



//Math in-bulit functions

echo(pi())."\n";// Displays value of Pi
echo(min(23,34,23,11,56,66,99))."\n";// Displays the minimum number from the given numbers
echo(max(78,343,2323,543,2,00))."\n";// Displays the maximum number from the given numbers
echo(rand())."\n";// Displays a random number
echo(rand(10,20))."\n";// Displays a random number between 10 and 20
echo(abs(-9090))."\n";// Returns the absolute (positive) value of a number
echo(exp(2))."\n";/* Calculates the exponent of e.  returns E raised to the power 
              of x (Ex).'E' is the base of the natural system of logarithms  
              (approximately 2.718282) and x is the number passed to it.*/
echo(log(6))."\n";// returns the natural logarithm of a number, or the logarithm of number to base.
echo(log(2,10))."\n";// returns 2 to the base 10 result
echo(sqrt(81))."\n";// returns square root of the number
echo(pow(4,2))."\n";// returns x i.e. 4 to the power y .i.e. 2
echo(round(2.78))."\n";/* returns number rounded to the closest integer.
                      If the value after decimal is more  than 5 then it is round up i.e. the result will be here 3
                      If the value after decimal is less  than 5 then it is round down i.e. the result will be 2*/



//If statement
$age=18;
if($age<20){
  echo "You are not eligible for driving a car\n";
}

//If - else statement

$age=34;
if($age<20){
  echo "You are not eligible for driving a car\n";
}
else{
  echo "You are eligible for driving a car\n";
}


//else if statement

$age=48;
if($age<20){
  echo "You are not eligible for driving a car\n";
}
else if($age>20 && $age<50){
  echo "You are eligible for driving a car\n";
}
else {
  echo "You can drive but be careful\n";
}

//nested if statement

$num=21;
if($num%2==0){
  echo "$num is even number\n";
  if($num>0){
    echo "$num is +ve number \n";
  }
}
else{
  echo "$num is odd number \n";
}

//Switch Case:
/*The switch statement is similar to a series of IF statements on the same expression. In many occasions, you may want to compare the same variable (or expression) with many different values, and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.*/
$choice=5;
switch($choice){
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thrusday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default: 
  echo "Invalid choice is entered";
}
?>