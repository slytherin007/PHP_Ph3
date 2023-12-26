<?php

/* The scope of a variable is the part of the script where the variable can be referenced or used.*/

/*Local: A variable declared within a function has a LOCAL SCOPE 
and can only be accessed within that function*/
function myname(){
    $color="green";

    echo "My fav color is " . $color;
}

myname();
echo $color;//local Scope


/*Global: A variable declared outside a function has a GLOBAL SCOPE 
and can only be accessed outside a function. The global keyword is 
used to access a global variable from within a function.
*/
$name="Rahul";

function myfun(){
    global $name;
    echo $name;
}

myfun();
$name="Rani"; 
echo "\n".$name;//global scope
?>