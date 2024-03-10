<?php
include_once('./matrix_calc.php');
function check_if_turn_left($p, $q, $r){
//    print_r($p);
    $matrix_result = matrix_calc($p, $q, $r);
    if($matrix_result==0){
        echo"punkt leży na prostej";
        return 0;
    }else if($matrix_result>0){
        echo"punkt jest po lewej";
        return 1;
    }else if($matrix_result<0){
        echo"punkt jest po prawej";
        return 0;
    }
    return 0;
}