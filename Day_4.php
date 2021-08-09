<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $age = readline();
  if($age < 10){
    echo 'I am happy as having no responsibilities.';
  }else if($age < 18){
    echo 'I am still happy but starts feeling pressure of life.';
  }else{
    echo 'I am very much happy as i handled the pressure very well.';
  }
?>
