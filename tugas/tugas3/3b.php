<?php

function urutanAngka ($angka) {
    $urutanAngka = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++ ) {
            echo "$urutanAngka ";
            $urutanAngka++;
        }
        echo "<br>";
    }
    return;
}

echo urutanAngka(5);
$array_associative = array("nama" => "John", "usia" => 30, "kota" => "Jakarta");