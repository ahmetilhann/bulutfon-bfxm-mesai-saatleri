<?php

require_once 'vendor/autoload.php';
require_once 'sabitler.php';

use Xuma\Bfxm\Builder;

date_default_timezone_set('Europe/Istanbul'); //Turkiye saati
$gun = date('N'); //Suanki gun degeri
$saat = date('H:i'); //Suanki saat degeri

if($saat < $gunler[$gun]['sabah_baslangic'] || $saat > $gunler[$gun]['ogle_bitis'] ){

    //Mesai saatleri disi

    $bfxm = new Builder();
    $bfxm->dial($mesai_disi)
        ->build(true);


}elseif($saat > $gunler[$gun]['sabah_bitis'] && $saat < $gunler[$gun]['ogle_baslangic'] ){

    //Oglen arasi

    $bfxm = new Builder();
    $bfxm->dial($oglen_arasi)
        ->build(true);

}else{

    //Mesai saatleri

    $bfxm = new Builder();
    $bfxm->dial($mesai_saatleri)
        ->build(true);

}