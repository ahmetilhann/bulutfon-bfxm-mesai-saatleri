<?php

#Mesai saatleri
$hours = [
    'morning_start' => '08:00',
    'morning_finish' => '12:00',
    'afternoon_start' => '13:00',
    'afternoon_finish' => '18:00'
];

#Gunler
$days = [
    1 => $hours , //Pazartesi
    2 => $hours , //Sali
    3 => $hours , //Carsamba
    4 => $hours , //persembe
    5 => $hours , //cuma
    6 => $hours , //cumartesi
    7 => $hours , //pazar
];

/**
 * Ozel gun belirleme
 * $days[gun numarasi]['morning_start'] = 'hh:mm'
 * $days[gun numarasi]['morning_finish'] = 'hh:mm'
 * $days[gun numarasi]['afternoon_start'] = 'hh:mm'
 * $days[gun numarasi]['afternoon_finish'] = 'hh:mm'
 */

#Menu Numaralari
$shift_in = 10; //Mesai saatleri menu numarasi
$shift_out = 11; //Mesai saatleri disi menu numarasi
$launch_break = 10; //Oglen arasi menu numarasi