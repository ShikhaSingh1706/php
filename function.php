<?php //function

//basci function
 function displaydata(){
    echo "my name is <b>Shikha Singh</b> <br/>";
    echo "i am 25 years old <br/><hr>";

 }

 displaydata();
 displaydata();
 displaydata();


 //function with parameter

 function fun($x, $y){
    $z=$x+$y;
    echo "z is $z<br>";
 }
 fun(3,6);
 fun(13,7);



 //2
 function colorchange( $name, $color){
    echo " <hr><h1 style='color:$color'>  $name</h1>"; 
}

colorchange("Shikha","red");
colorchange("Ram","green");


//function with return statement
 function returnstatement($a,$b){
    echo "function is return ";
    return $a+$b;
    
 }

 echo returnstatement(4,4);


 //function with default parameter

 function defaultparameter( $name, $color="red"){
    echo "<hr><h1 style='color:$color'> name is $name </h1>";

 }
defaultparameter ("ram","green");
defaultparameter ("ram");

//nested function
 function test(){
    echo "<hr>test1";

    function test2(){
            echo "<hr>test2";

    }
 }
test();
test2()

 ?>




