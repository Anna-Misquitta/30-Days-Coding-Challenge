<?php
  /* Read input from STDIN. Print your output to STDOUT*/
  $fp = fopen("php://stdin", "r");
  //Write code here
  $i = 0;
  $principal = $interest = $year = 0;
  while($f = fgets(STDIN)){
    if($i == 0){
      $principal = $f;
    }else if($i == 1){
      $interest = $f;
    }else{
      $year = $f;
    }
    $i++;
  }
  $simple_interest = ($principal*$interest*$year)/100;
  echo $simple_interest;
?>
