<?php
  /* Read input from STDIN. Print your output to STDOUT*/

  // Minimum effort - Maximum output
  
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0) {
      $inputArr = explode(" ",trim($f));
    }else{
      $arr_len = trim($f);
    }
    $i++;
  }
  $sorted_arr = $inputArr;
  sort($sorted_arr);
  $start_pos = $end_pos = 0;
  for($i = 0; $i <= $arr_len; $i++){
    if($inputArr[$i] != $sorted_arr[$i]){
      $start_pos = $i;
      break;
    }
  }
  rsort($sorted_arr);
  for($i = 0; $i <= $arr_len; $i++){
    // echo $inputArr[$arr_len - $i - 1]." ".$sorted_arr[$i]."\n";
    if($inputArr[$arr_len - $i - 1] != $sorted_arr[$i]){
      $end_pos = $arr_len - $i - 1;
      break;
    }
  }
  $final_output = "";
  for($i = $start_pos; $i <= $end_pos; $i++){
    $final_output .= " ".$inputArr[$i];
  }
  echo trim($final_output);
?>