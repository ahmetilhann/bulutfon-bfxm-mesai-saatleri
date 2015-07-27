# Bulutfon BFXM Mesai Saatleri Düzenleme
Bulutfon kullanıcılarının BFXM ile mesai saatleri ve öğlen arası düzenlemelerine olanak sağlar.
## Uygulama Nasıl Çalışır
Uygulama sabitler.php dosyası içerisinden aldığı değerlere göre index.php içerisinden üç farklı menüye yönlendirme yapar. Bunlar mesai saatleri, dışı ve öğlen aralarıdır. Uygulama kullanıcıların özel günlerine göre ayarlanabilir.
Saat ayarlama
```sh
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
```
Uygulama yukarıda verilen gibi kullanılırsa haftanın 7 günü verilen başlangıç bitiş saatlerini uygulayacaktır.
```sh
/**
 * Ozel gun belirleme
 * $gunler[gun_numarasi]['sabah_baslangic'] = 'ss:dd'
 * $gunler[gun_numarasi]['sabah_bitis'] = 'ss:dd'
 * $gunler[gun_numarasi]['oglen_baslangic'] = 'ss:dd'
 * $gunler[gun_numarasi]['oglen_bitis'] = 'ss:dd'
 */
```
Bu kodların olduğu bölüme özel gün tanımlanabilir.
#####Örnek:
```sh
/**
 //Ozel gun belirleme
 $gunler[6]['sabah_baslangic'] = '00:00'
 $gunler[6]['sabah_bitis'] = '00:00'
 $gunler[6]['oglen_baslangic'] = '00:00'
 $gunler[6]['oglen_bitis'] = '00:00'
 //6. gün cumartesi
```
Burada 6. gün yani cumartesi günü mesai saati dışı yapılmıştır. Bulunan 4 değerede aynı saat girildiğinde gün mesai saati dışı sayılır. 
#####Örnek:
```sh
/**
 //Ozel gun belirleme
 $gunler[1]['sabah_baslangic'] = '08:00'
 $gunler[1]['sabah_bitis'] = '00:00'
 $gunler[1]['oglen_baslangic'] = '00:00'
 $gunler[1]['oglen_bitis'] = '17:00'
 //1. gün pazartesi
```
Burada 1. pazartesi sabah_bitis ve oglen_baslangic degerleri aynı değer girildiğinde pazartesi öğlen arası yapılmamış sayılır.
#####NOT:
1. gün pazartesı olarak alınmıştır

## Version
1.0.0

##Licence
The MIT License (MIT)

Copyright (c) 2015 Ahmet Aydoðdu

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

