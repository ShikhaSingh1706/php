<?php
  $fruit="apple";


  //setcookie(name,value,path,domain,secure,httponly);
  setcookie("fruit","apple",time()+(86400));
  if(isset($_COOKIE['fruit'])){
      print_r($_COOKIE);
      echo "<br>cookie found";


  }
  else{
    echo "no cookie found";
  }


?>
