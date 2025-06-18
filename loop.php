<?php
//for loop
echo "for loop";

for($i=0;$i<5;$i++){
    echo $i ;
    echo "<br>";
}


//while loop
echo "while loop";
$n=0;
while($n<5){
    echo $n;
    echo "<br>";
    $n+=1;

    
}
//do while loop
echo " do while loop";
$x=1;

do{
    echo $x;
    echo "<br>";
    $x++;
}while ($x<5);

   
//break c
echo " break loop";

for($i=0;$i<5;$i++){
    if($i==3){
        break;
    }
    echo $i ;
    echo "<br>";
}
// continue
echo " continue loop";

for($i=0;$i<=5;$i++){
    if($i==3){
        continue;
    }
    echo $i ;
    echo "<br>";
}

?>

