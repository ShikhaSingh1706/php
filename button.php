<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value="btn1">Call Function</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['button'])) {
    btn_click_Test();
}

function btn_click_Test() {
    echo "Function called on button click!";
}
?>