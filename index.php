<?php
include_once('./import.php');

//wczytanie współrzędnych punktów z pliku do tablicy
$points = import_from_file('points.txt');

//for($i=0;$i<=count($points);$i++){
//    $l[]=$points[$i];
//    while(count($l)>2){
//
//    }
//}



print_r($points);