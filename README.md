# Bulutfon BFXM Mesai Saatleri Düzenleme
[Bulutfon] kullanıcılarının [BFXM] ile mesai saatleri ve öğlen arası düzenlemelerine olanak sağlar. Ayrıca özel günler için mesai saati ayarlanabilir.
## Uygulama Nasıl Çalışır
Uygulama constants.php dosyası içerisinden aldığı değerlere göre index.php içerisinden üç farklı menüye yönlendirme yapar. Bunlar mesai saatleri, dışı ve öğlen aralarıdır. Uygulama kullanıcıların özel günlerine göre ayarlanabilir.
Saat ayarlama
```sh
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
```
Uygulama yukarıda verilen gibi kullanılırsa haftanın 7 günü verilen başlangıç bitiş saatlerini uygulayacaktır.
```sh
/**
 * Ozel gun belirleme
 * $days[gun numarasi]['morning_start'] = 'hh:mm'
 * $days[gun numarasi]['morning_finish'] = 'hh:mm'
 * $days[gun numarasi]['afternoon_start'] = 'hh:mm'
 * $days[gun numarasi]['afternoon_finish'] = 'hh:mm'
 */
```
Bu kodların olduğu bölüme özel gün tanımlanabilir.
#####Örnek:
```sh
/**
 //Ozel gun belirleme
 $days[6]['morning_start'] = '00:00'
 $days[6]['morning_finish'] = '00:00'
 $days[6]['afternoon_start'] = '00:00'
 $days[6]['afternoon_finish'] = '00:00'
 //6. gün cumartesi
```
Burada 6. gün yani cumartesi günü mesai saati dışı yapılmıştır. Bulunan 4 değerede aynı saat girildiğinde gün mesai saati dışı sayılır. 
#####Örnek:
```sh
/**
 //Ozel gun belirleme
 $days[1]['morning_start'] = '08:00'
 $days[1]['morning_finish'] = '00:00'
 $days[1]['afternoon_start'] = '00:00'
 $days[1]['afternoon_finish'] = '17:00'
 //1. gün pazartesi
```
Burada 1. pazartesi morning_start ve afternoon_start degerleri aynı değer girildiğinde pazartesi öğlen arası yapılmamış sayılır.
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

[Bulutfon]:https://www.bulutfon.com/
[BFXM]:https://github.com/bulutfon/documents/tree/master/BFXM
