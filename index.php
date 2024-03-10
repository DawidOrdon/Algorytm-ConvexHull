<?php
include_once('./import.php');
include_once('./turn_left.php');

//wczytanie współrzędnych punktów z pliku do tablicy
$points = import_from_file('points.txt');
$l=[];
for($i=0;$i<=count($points)-1;$i++){
    $l[]=$points[$i];
    echo"point : ";
    print_r($points[$i]);
    echo"<br /> tabela l<br />";
    print_r($l);
    $l_count=count($l);
//    echo check_if_turn_left($l[$l_count-2],$l[$l_count-1],$l[$l_count-2]);
    echo"<br />";
    if($l_count>2){
//        print_r($l);
        echo "testowane indeksy: " . ($l_count - 3)."<br />";
        while($l_count>2&&check_if_turn_left($l[$l_count-3],$l[$l_count-2],$l[$l_count-1])){
            array_splice($l, $l_count-2, 1);
            $l_count=count($l);
        }
//        print_r($l);
        echo"<br />";
    }
    echo"<br />";
    echo"<br />";
}

//$p=[-6,3];
//$q=[-5,1];
//$r=[-3,5];
//check_if_turn_left($p,$q,$r);


print_r($l);
//print_r($points);