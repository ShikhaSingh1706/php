<?php




// $fileName="files/dummy.text";
// $content="this is first file in php";
// $file=fopen($fileName,'w') or die("unable to make file");
// fwrite($file,$content);
// fclose($file);



if(isset($_POST['filename'])){
    $fileName="files/".$_POST['filename'];
    $content=$_POST['content'];
    $file=fopen($fileName,'w') or die("unable to make file");
    fwrite($file,$content);
    fclose($file);

}


?>

<form action="" method="post">
    <input type="text" name="filename" placeholder="enter file name">
    Filename
    </input>
    <br><br>
    <textarea  name="content">
    </textarea>
    <br><br>
    <button> Submit</button>
</form>