<?php
/*for loop:Loops through a block of code a specified number of times.
Syntax
for (expression1, expression2, expression3) {
  // code block
}
Let's print number ranging from 0-50 as a basic program:
*/

for($i=0;$i<=50;$i++){
    echo "$i"."\t"; //prints 0-50 with horizontal spacing(/t)
}

//Lets say we want only even and odd nos. between 0-50:

for($i=0;$i<=50;$i++){
    if($i%2==0){
        echo "$i: Even Number"."\n";
    }
    else{
        echo "$i: Odd Number"."\n";
    }
}
/**while loop: Loops through a block of code as long as the specified condition is true. */


$i = 1;
while ($i < 6) {
  echo $i."\n";
  $i++;
}

//now let's print a table of 19 using while loop

$i=1;
$num=19;

while($i<=10){
    $result=$num*$i;
    echo"$num "."X "."$i "."= "."$result "."\n";
    $i++;
}


/**do..while: Loops through a block of code once, and then repeats the loop as long as the specified condition is true. 
 * In a do...while loop the condition is tested AFTER executing the statements within the loop. 
 * This means that the do...while loop will execute its statements at least once, even if the condition is false.
 * 
*/

$i = 1;

do {
  echo $i."\n";
  $i++;
} while ($i < 6);//prints 1-5

$j = 8;

do {
  echo $j."\n";
  $j++;
} while ($j < 6);//the code is executed once even if the condition is never true.


/**Foreach: Loops through a block of code for each element in an array or each property in an object. */

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x"."\n";
}
echo"$colors[1]"."\n";//using index to access the value stored at a particular index.

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y"."\n";//prints in key value pair form as the array used here is an associative array and not a indexed one like above
}
echo "The value of Ben is: ".$members['Ben'];//using key to access the value associated with it.


//break: can be used to jump out of different kind of loops.

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x"."\n";//jump when x is 4
  }

  
  $x = 0;

while($x < 10) {
  if ($x == 4) {
    break;//jump when x is 4
  }
  echo "The number is: $x"."\n";
  $x++;
}

$i = 1;

do {
  if ($i == 3) break; //Stop the loop when $i is 3
  echo $i."\n";
  $i++;
} while ($i < 6);


//continue: can be used to jump out of the current iteration of a loop, and continue with the next.
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x"."\n";//jump out when x is 4 and continue with the next
  }

  $x = 0;

while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x"."\n";//jump out when x is 4 and continue with the next
  $x++;
}

$i = 0;

do {
  $i++;
  if ($i == 3) continue;//jump out when x is 3 and continue with the next
  echo $i."\n";
} while ($i < 6);
?>



