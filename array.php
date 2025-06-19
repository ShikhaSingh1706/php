<?php //array
$arr=["1","2","3","4","5"];
echo $arr[1];
echo "<br><hr>";

for ($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo "<br>";
}


//for each loop
echo "<hr>";
foreach($arr as $x)
echo "$x<br>";



//associative array
//key value pair
echo "<hr>";
$arr1=["name"=>"shikha","age"=>"30"];
foreach($arr1 as $x)
echo "$x<br><hr>";
foreach($arr1 as  $y=>$x)
echo "$y => $x<br>";


//multidimentional array
echo "<hr";
$arr3=[
    [1,"shikha"],
    [2,"vikas"],
    [3,"satyam"],
];
    foreach($arr3 as $x){
        echo "<pre>";
        print_r($arr3);
        echo "<pre>";

    }


    //table array
    echo "<hr";

  //add element
array_push($arr,"peter");
//remove element
 array_pop($arr);


?>
<html>
    <title>Table
    <head>
</head>
<body>
<table border="1">
    <tr>
        <td>s.no</td>
        <td>name</td>
        <td>age</td>
    </tr>
    <tr>
        <td>1</td>
        <td>shikha</td>
        <td>25</td>
        <td>
    </tr>
</table>
</body>
<?php
$users=[
    [1,"anil",25],
    [2,"shikha",34]
];
for($i=0;$i<count($users);$i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];

    }

}



?>

</body>
    </html>

   
  
