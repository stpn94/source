<?php
    $age = 30;                  // 나이 : 30세
    $pay = 2500;                // 기본 요금 : 2500원
       
    if ($age >= 65 ) {           // 나이가 65세 이상이면 참
       $pay = 0;
    }

    echo "나이 : ".$age."세<br>";
    echo "요금 : ".$pay."원<br>";
?>