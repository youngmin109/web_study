<?php
  # 삼각형
  # 입력값
  $n = 5;
  
  for ($i=0; $i<$n; $i++) {
    
    for ($j=0; $j<$i+1; $j++)
        echo '*';
    echo "<br>";
  }
?>