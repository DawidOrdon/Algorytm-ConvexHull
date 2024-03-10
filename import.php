<?php
function import_from_file($file_name){
    $data = file($file_name);
    foreach ($data as $line) {
        $array[] = explode(";", $line);
    }

    usort($array, function($a, $b) {
        // Sortowanie rosnące po pierwszym indeksie
        if ($a[0] != $b[0]) {
            return $a[0] - $b[0];
        } else {
            // Jeśli pierwsze indeksy są takie same, sortowanie malejąco po drugim indeksie
            return $b[1] - $a[1];
        }
    });
    //usunięcie tych samych punktów
    $array = array_map("unserialize", array_unique(array_map("serialize", $array)));

    return $array;
}