<?php
function findPoint($strArr)
{
    //echo gettype($strArr);
    // code goes here
        $a = explode(",",$strArr[0]);
        $b = explode(",",$strArr[1]);
        
        $output = array();

        foreach($a as $e){
            foreach($b as $i){
                if(trim($i) === trim($e) ){
                    $output[] = $i.", ";
                }
            };
        };

        if(strlen(implode($output)) > 0){
            $strArr =   rtrim(implode($output), ", ");
        }else{
            $strArr = false;
        }

        return $strArr;
}

// keep this function call here
echo findPoint(["1, 4, 3, 8,10, 11, 17, 18 " , " 1, 4, 9, 10 "]);
?>
