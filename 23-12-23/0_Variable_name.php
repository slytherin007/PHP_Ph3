<?php
echo "Hello World\n";

print ("Hello World Again");
?>

<?php

$num=9;
$_name="Raju";
$item1="Book";
$Age=12;
$age=13;
echo $Age." ".$age;
?>


/*
  -> A variable starts with the $ sign in PHP.
  -> Must start with a letter or the underscore character.
  -> Cannot start with a number.
  -> Can only contain alpha-numeric characters and underscores

.------------------------.------------------------------------.--------------------------------.
|       Aspect           |             echo                   |             print              |
|------------------------|------------------------------------|--------------------------------| 
| Type                   |    Language construct              |         Function               |
| Syntax                 | Doesn't require parentheses        | Requires parentheses           |
| Return Value           | Doesn't have a return value        | 1 for success, 0 for failure   |
| Usage                  | Used for simple output             | Can be used in expressions     |
| Performance            | Slightly faster                    | Marginally slower              |
| Example                | echo "Hello, world!";              | print("Hello, world!");        |
'------------------------'------------------------------------'--------------------------------'
*/