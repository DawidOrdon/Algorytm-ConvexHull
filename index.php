<?php
include_once('./import.php');
include_once('./turn_left.php');

//wczytanie współrzędnych punktów z pliku do tablicy
$points = import_from_file('points.txt');
$l=[];
for($i=0;$i<=count($points)-1;$i++){
    $l[]=$points[$i];
    $l_count=count($l);
    if($l_count>2){
        while($l_count>2&&check_if_turn_left($l[$l_count-3],$l[$l_count-2],$l[$l_count-1])){
            array_splice($l, $l_count-2, 1);
            $l_count=count($l);
        }
    }
}

//$p=[-6,3];
//$q=[-5,1];
//$r=[-3,5];
//check_if_turn_left($p,$q,$r);


print_r($l);
//print_r($points);