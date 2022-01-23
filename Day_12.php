<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  $input_one = $input_two = [];
  while($f = fgets(STDIN)){
    if($i > 0 && $i <= $matrix_len[0]){
      array_push($input_one,explode(" ",trim($f)));
    }else if($i == 0){
      $matrix_len = explode(" ",trim($f));
    }else if($i > $matrix_len[0]+1){
      array_push($input_two,explode(" ",trim($f)));
    }
    $i++;
  }
  for($i = 0; $i < $matrix_len[0]; $i++){
    for($j = 0; $j < $matrix_len[1]; $j++){
      $final_output[$i][$j] = $input_one[$i][$j] + $input_two[$i][$j];
    }
  }
  foreach($final_output as $value){
    print_r(implode(" ",$value)."\n");
  }
  // print_r(implode(" ",$final_output));
?>
