<?php

require_once 'vendor/autoload.php';
require_once 'constants.php';

use Xuma\Bfxm\Builder;

date_default_timezone_set('Europe/Istanbul'); //Turkiye saati
$day_now = date('N'); //Suanki gun degeri
$hour_now = date('H:i'); //Suanki saat degeri

switch($hour_now){
    //Mesai saatleri disi
    case ($hour_now < $days[$day_now]['morning_start'] || $hour_now > $days[$day_now]['afternoon_finish'] ):
        $bfxm = new Builder();
        $bfxm->dial($shift_out)
            ->build(true);
        break;

    //Oglen arasi
    case ($hour_now > $days[$day_now]['morning_finish'] && $hour_now < $days[$day_now]['afternoon_start'] ):
        $bfxm = new Builder();
        $bfxm->dial($launch_break)
            ->build(true);
        break;

    //Mesai saatleri
    default:
        $bfxm = new Builder();
        $bfxm->dial($shift_in)
            ->build(true);
        break;
}