<?php
echo "goto statement";
echo "<br>";


$x=20;
echo "before condition";
echo "<br>";

if ($x==20){
    goto jump;

    //if coditon matches above echo will not work otherwise everything will be work.

}
$name="anil";
echo $name;
echo "<br>";


jump:
echo "statement is jumped to line number 15";

?>