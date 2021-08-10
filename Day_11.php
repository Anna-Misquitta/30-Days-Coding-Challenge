<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $input = readline();
  $lower_case_count = $upper_case_count = 0;
  for($i = 0; $i < strlen($input); $i++){
    if(ctype_upper($input[$i])){
      $upper_case_count++;
    }
    if(ctype_lower($input[$i])){
      $lower_case_count++;
    }
  }
  echo $upper_case_count."\n".$lower_case_count;
?>
