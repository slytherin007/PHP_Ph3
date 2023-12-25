<?php
/*
PHP Datatypes are used to hold different types of data or values. 
There are 3 types of datatypes:
    -> Scalar Types (predefined)
    -> Compound Types (user-defined)
    -> Special Types

1. Scaler Types:
    boolean
    integer
    float
    string

2. Compound Types:
    array
    object

3. Special Types:
   resource
   NULL
*/

//Scaler Types: can contain only single value

//integer
$num1=23;
var_dump($num1);
//float
$num2=34.6;
var_dump($num2);
//boolean
$num3=true;
var_dump($num3);
//string
$name="Rani";
var_dump($name);

//Compound Types: can contain multiple values

//array
$arr=array('Apple',23.4,45,true);
var_dump($arr); //consists values of different datatypes. Not restricted to a single type.


//object
class Car {
  public $color;

  public function drive() {
    echo "I'm driving a ".$this->color." car";
  }
}

$obj = new Car();
$obj->color = "blue"; //assign blue to color variable
$obj->drive(); //runs the drive method of Car class
 

//Special Types:

//null

$nl=NULL;
echo "$nl"; //data type that has only one value: NULL.

/*resource: these are used to store some function calls or references 
to external PHP resources. For example - a database call. 
It is an external resource.

*/

?> 
