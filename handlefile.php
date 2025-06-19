<?php 
echo  "include file";
include("./index.php");
echo "<hr>";
for($i=0;$i<4;$i++){
    include("./index.php");

}
//include only once
echo "<hr>";
for($i=0;$i<4;$i++){
    include_once("./index.php");  

}

//require
echo "<hr>";
require("./index.php");


//require_once
echo "<hr>";
for($i=0;$i<4;$i++){
    require_once("./index.php");  

}
//include give warning  can be hide
//require gives fatal error , not be hide


?>
