<?php
function matrix_calc($p, $q, $r){
    $first=$p[0]*$q[1]+$p[1]*$r[0]+$q[0]*$r[1];
    $second=$q[1]*$r[0]+$p[0]*$r[1]+$p[1]*$q[0];
    return($first-$second);
}