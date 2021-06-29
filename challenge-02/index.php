<?php

function noIterate($strArr)
{
    $output = null;
    $a = $strArr[0];
    $b = $strArr[1];

    for ($i = 0; $i < strlen($a); $i++){
        for ($j = $i + 1; $j < strlen($a); $j++){
            $arrayA = implode(array_slice(str_split($a), $i, $j));
            if(evaluateWord($arrayA, $b)){
                if($output === null || strlen($arrayA) < strlen($output) ){
                    $output = $arrayA;
                }
            }
        }
    }
    return $output;
}

//Evaluate with the second word
function evaluateWord($arrayA, $b){
    $arrayB = str_split($b);

    for($i = 0; $i < strlen($arrayA) ; $i++){
        $char = $arrayA[$i];
        $index = strpos(implode($arrayB), $char);
        if($index !== FALSE){
            array_splice($arrayB, $index,1);
        }
    }
    if(strlen(implode($arrayB)) === 0){
        return TRUE;
    }else{
        return FALSE;
    }
}

echo noIterate(["aaffhkksemckelloe", "fhea"]);

//Output: affhkkse
