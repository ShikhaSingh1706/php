<?php
echo "<center><h1 style='color:red'>PHP with HTML</h1></center>";
echo "<br/>";
echo "<h3 style='color:green'>This is how we can use html with php</h3>"
?>
<?php

$name="Shikha Singh";

echo "<h2 style='color:blue'> My name is " .$name."</h2>";
?>

<h1 style='color:orange'>
    <?php
    echo $name;
    ?>
</h1>
<?php
$h2_color="yellow";
echo "<h2 style='color:$h2_color'> Shikha Singh </h2>";
echo "<h2 style='color:$h2_color'> Shikha Singh </h2>";
echo "<h2 style='color:$h2_color'> Shikha Singh </h2>";


?>