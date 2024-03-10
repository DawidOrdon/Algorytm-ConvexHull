<?php
function matrix_calc($p, $q, $r){
//    echo "p: {$p[0]};{$p[1]} q: {$q[0]};{$q[1]} r: {$r[0]};{$r[1]} <br />";
    $first=$p[0]*$q[1]+$p[1]*$r[0]+$q[0]*$r[1];
    $second=$q[1]*$r[0]+$p[0]*$r[1]+$p[1]*$q[0];
    return($first-$second);
}