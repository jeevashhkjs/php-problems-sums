<?php

$getValuesArray = [];

for($i=1;$i<4;$i++){
    for($j=1;$j<4;$j++){
        if($j == 1){
            $getValuesArray = $j * 3;
        }
        if($j == 2){
            $getValuesArray = $j * 5;
        }
        if($j == 3){
            $getValuesArray = $j * 10;
        }
    }
}

print_r($getValuesArray);