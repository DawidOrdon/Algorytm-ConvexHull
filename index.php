<?php
include_once('./import.php');
include_once('./turn_left.php');

//wczytanie współrzędnych punktów z pliku do tablicy
$points = import_from_file('points.txt');

//wyliczenie punktów w prawo
for($i=0;$i<=count($points)-1;$i++) {
    //dodanie punktu do tablicy lg
    $lg[] = $points[$i];
    //obliczenie wielkości tablicy
    $l_count = count($lg);
    //usuwanie środkowego elementu jeżeli są conajmniej 3 elementy oraz jest skręt w lewo
    while ($l_count > 2 && check_if_turn_left($lg[$l_count - 3], $lg[$l_count - 2], $lg[$l_count - 1])) {
        array_splice($lg, $l_count - 2, 1);
        $l_count = count($lg);
    }
}

//wyliczenie punktów w lewo
for($i=count($points)-1;$i>=0;$i--){
    //dodanie punktu do tablicy lg
    $ld[]=$points[$i];
    //obliczenie wielkości tablicy
    $l_count=count($ld);
    //usuwanie środkowego elementu jeżeli są conajmniej 3 elementy oraz jest skręt w lewo
    while($l_count>2&&check_if_turn_left($ld[$l_count-3],$ld[$l_count-2],$ld[$l_count-1])){
        array_splice($ld, $l_count-2, 1);
        $l_count=count($ld);
    }

}
//suma 2 tablic
$result = $lg+$ld;
//wypisanie wyniku
print_r($result);
