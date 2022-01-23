<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  while($f = fgets(STDIN)){
    if($i > 0){
      $input[$i-1] = explode(" ",$f);
    }else{
      $size = trim($f);
    }
    $i++;
  }
  $first_diagonal = $second_diagonal = 0;
  for($i = 0; $i < $size; $i++){
    $first_diagonal += $input[$i][$i];
    $second_diagonal += $input[$size - $i - 1][$i];
  }
  
  if($first_diagonal == $second_diagonal){
    echo "Equal";
  }else if($first_diagonal > $second_diagonal){
    echo "Diagonal 1";
  }else{
    echo "Diagonal 2";
  }
  
?>
