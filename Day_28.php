<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $t1 = readline();
  $input = [];
  $temp = explode(" ",$t1);
  for($i = 0; $i < count($temp); $i++){
    if(!empty(trim($temp[$i]))){
      array_push($input,$temp[$i]);
    }
  }
  
  $sum_of_digits_num1 = $sum_of_digits_num2 = 0;
  for($i = 0; $i < strlen($input[0]); $i++){
    $sum_of_digits_num1 += $input[0][$i];
  }
  for($i = 0; $i < strlen($input[1]); $i++){
    $sum_of_digits_num2 += $input[1][$i];
  }
  // echo $sum_of_digits_num1."              ".$sum_of_digits_num2;
  if($sum_of_digits_num1 == $sum_of_digits_num2){
    echo "Equal";
  }else if($sum_of_digits_num1 > $sum_of_digits_num2){
    echo $input[0];
  }else{
    echo $input[1];
  }
?>
