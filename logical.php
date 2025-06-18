<?php
$age=79;

if ($age>1 && $age<18){
    echo"under 18";
}
elseif ($age>18 || $age<50){
    echo"above 18 and less ltan 50";
}
elseif ($age>50 ){
    echo"above 50";
}

?>