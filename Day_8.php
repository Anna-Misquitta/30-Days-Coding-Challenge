<?php
  /* Read input from STDIN. Print your output to STDOUT*/
    $__fp = fopen("php://stdin", "r");
  //Write code here
  $input = readline();
  $length = strlen($input);
  $num = 0;
  for($i = 0; $i < $length; $i++){
    $num += pow($input[$i],3);
  }
  if($num == $input){
    echo "True";
  }else{
    echo "False";
  }
?>
