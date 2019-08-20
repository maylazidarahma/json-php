<?php

$array = Array (
    "0" => Array (
        "id" => "1",
        "nama" => "Mayla Zida",
        "asal" => "Tulungagung",
        "kelas" => "XIIRPL5"
    ),
    "1" => Array (
        "id" => "2",
        "nama" => "Nanda Safira",
        "asal" => "Pasuruan",
        "kelas" => "XIIRPL5"
    ),
    "2" => Array (
        "id" => "3",
        "nama" => "Dewi Ayu",
        "asal" => "Malang",
        "kelas" => "XIIRPL1"
    ),
    "3" => Array (
        "id" => "4",
        "nama" => "Amaliya Yuna",
        "asal" => "Pagak",
        "kelas" => "XIIRPL5"
    ),
    "4" => Array (
        "id" => "4",
        "nama" => "Renylia",
        "asal" => "Madura",
        "kelas" => "XIIRPL3"
    ),
    "5" => Array (
        "id" => "5",
        "nama" => "Salsabila",
        "asal" => "Sidoarjo",
        "kelas" => "XIIRPL5"
    )
);

$json = json_encode(array('siswa' => $array));
 
echo $json;
?>