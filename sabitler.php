<?php

#Mesai saatleri
$saatler = [
    'sabah_baslangic' => '08:00',
    'sabah_bitis' => '12:00',
    'ogle_baslangic' => '13:00',
    'ogle_bitis' => '17:00'
];

#Gunler
$gunler = [
    1 => $saatler , //Pazartesi
    2 => $saatler , //Sali
    3 => $saatler , //Carsamba
    4 => $saatler , //persembe
    5 => $saatler , //cuma
    6 => $saatler , //cumartesi
    7 => $saatler , //pazar
];

/**
 * Ozel gun belirleme
 * $gunler[gun numarasi]['sabah_baslangic'] = 'ss:dd'
 * $gunler[gun numarasi]['sabah_bitis'] = 'ss:dd'
 * $gunler[gun numarasi]['oglen_baslangic'] = 'ss:dd'
 * $gunler[gun numarasi]['oglen_bitis'] = 'ss:dd'
 */

#Menu Numaralari
$mesai_saatleri = 10; //Mesai saatleri menu numarasi
$mesai_disi = 11; //Mesai saatleri disi menu numarasi
$oglen_arasi = 10; //Oglen arasi menu numarasi