<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 2</title>
</head>
<body>
    <h4>Matemetiksel İfadeler</h4>
    <h5>Toplama İşlemi</h5>
    <?php
        $sayi1 = 20;//sayi1 değişkeni tanımlandı
        $sayi2 = 17;//sayi2 değişkeni tanımlandı
        $sonuc = $sayi1 + $sayi2;//Toplama işlemi yapıldı
        echo "İşlemin Sonucu: " ,$sayi1 ,"+"  ,$sayi2 ,"=" ,$sonuc;//Sonuç ekrana yazdırıldı
        echo "<br><br> Atamalı İşlem";
        $deger = 10;
        $ekdeger = 59;
        echo "sonuç" ,$deger ,"+" ,$ekdeger ,":" ,$deger += $ekdeger;
        echo "<br>Değre Değişkeninin Yeni İçeriği" ,$deger;
        echo "<br>Değer değişkeninin yeni içeriği", $deger += 123;
        echo "<br>Değer Değişkeninin Son İçeriği", $deger;

    ?>
    <h5>Çıkarma İşlemi</h5>
    <?php
        $sayi1 = 50;//sayi1 değişkeni tanımlandı
        $sayi2 = 77;//sayi2 değişkeni tanımlandı
        $sonuc = $sayi1 - $sayi2;//Toplama işlemi yapıldı
        echo "İşlemin Sonucu: " ,$sayi1 ,"-"  ,$sayi2 ,"=" ,$sonuc;//Sonuç ekrana yazdırıldı
        echo "<br><br> Atamalı İşlem";
        $deger = 10;
        $ekdeger = 59;
        echo "sonuç" ,$deger ,"-" ,$ekdeger ,":" ,$deger -= $ekdeger;
        echo "<br>Değre Değişkeninin Yeni İçeriği" ,$deger;
        echo "<br>Değer değişkeninin yeni içeriği", $deger - 123;
        echo "<br>Değer Değişkeninin Son İçeriği", $deger;
        
    ?>
    <h5>Çarpma İşlemi</h5>
    <?php
        $sayi1 = 120;//sayi1 değişkeni tanımlandı
        $sayi2 = 77;//sayi2 değişkeni tanımlandı
        $sonuc = $sayi1 * $sayi2;//Toplama işlemi yapıldı
        echo "İşlemin Sonucu: " ,$sayi1 ,"*"  ,$sayi2 ,"=" ,$sonuc;//Sonuç ekrana yazdırıldı
        echo "<br><br> Atamalı İşlem";
        $deger = 120;
        $ekdeger = 72;
        echo "sonuç" ,$deger ,"*" ,$ekdeger ,":" ,$deger *= $ekdeger;
        echo "<br>Değre Değişkeninin Yeni İçeriği" ,$deger; 
        echo "<br>Değer değişkeninin yeni içeriği", $deger *= 123;
        echo "<br>Değer Değişkeninin Son İçeriği", $deger;
    
    ?>
     <h5>Bölme İşlemi</h5>
        <?php
        $sayi1 = 50;//sayi1 değişkeni tanımlandı
        $sayi2 = 77;//sayi2 değişkeni tanımlandı
        $sonuc = $sayi1 / $sayi2;//Toplama işlemi yapıldı
        echo "İşlemin Sonucu: " ,$sayi1 , "/"  ,$sayi2 ,"=" ,$sonuc;//Sonuç ekrana yazdırıldı
        echo "<br><br> Atamalı İşlem";
        $deger = 168;
        $ekdeger = 72;
        echo "sonuç" ,$deger ,"/" ,$ekdeger ,":" ,$deger /= $ekdeger;
        echo "<br>Değre Değişkeninin Yeni İçeriği" ,$deger;
        echo "<br>Değer değişkeninin yeni içeriği", $deger /= 123;
        echo "<br>Değer Değişkeninin Son İçeriği", $deger;
        
        ?>
        <h5>Mod Alma İşlemi</h5>
        <?php
        $sayi1 = 50;
        $sayi2 = 10;
        $sonuc = $sayi1 % $sayi2;
        echo $sonuc;
        echo "<br> İşlemin Sonucu:" ,$sayi1 , "%" ,$sayi2 ,"=" ,$sonuc;
        ?>
        <h5>Arttırma İşlemi</h5>
        <?php
        $sayi1 = 50;
        echo "<br> Arttırma İşlemi Yapıldı:" ,$sayi1++;//sayının değerini arttırmada değişkenin soluna veya sağına yazmamız durumu değiştiriyor
        echo "<br> Değişkenin Değeri:" ,$sayi1;

        $sayi2 = 20;
        echo "<br><br> Arttırma İşlemi Yapıldı:" ,++$sayi2 ;
        echo "<br> Değişkenin Değeri:" ,$sayi2;
        ?>
        <h6>Temel Uygulama Örneği</h6>
        <?php
          $a = 6;
          echo "<br>",$a++;
          echo"<br>", $a++;
          echo"<br>", $a++;
          echo"<br>", $a ,"<br>";
          
          $a = 6;
          echo "<br>",++$a;
          echo"<br>", ++$a;
          echo"<br>", ++$a ,"<br>";

          $a=9;
          echo"<br>", $a--;
          echo"<br>", --$a;
        ?>
        <h5> Ceil işlemi </h5>
        <?php
        $sayi = 5.3;
        echo"<br>", "sonuç: ", ceil($sayi);
        ?>
        <h5> Floor işlemi </h5>
        <?php
        $sayi = 14.28565;
        echo"<br>", "sonuç: ", floor($sayi),"<br>","<br>";


        $sayi1=24.28565;
        echo "\$sayi1 değişkeninin değeri:", $sayi1," yukarı yuvarlma işlemi sonucu:", ceil($sayi1);
        ?>
        <h5> Round işlemi </h5>
        <?php
        $sayi1 = 57.323 ;
        echo "\$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1);
        $sayi1 = 57.523 ;
        echo "<br>","\$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1);

        echo "<br> <br> ilk iki hanenin sabit tutuluk 3. haneye göre işlemin yapılması";
        $sayi1 = 57.3239 ;
        echo "<br><br>\$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1,2);
        $sayi1 = 57.3298 ;
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1,2);


        echo "<br><br> virgülden öncesi için örnek yuvarlama uygulamaları";
        $sayi1 = 257.323955 ;
        echo "<br><br>\$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1,-1);
        $sayi1 = 557.329855 ;
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", round($sayi1,-2);
        ?>7
        <h5> Number Format İşlemi </h5>
        <?php 
        $sayi1 = 95450.28563;
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", number_format($sayi1);
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", number_format($sayi1,2);
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", number_format($sayi1,2,",",".",);//ondalık ve binlik ayraç ayarlama
        echo "<br> \$sayi1 değişkeninin değeri:", $sayi1," Round işlemi sonucu:", number_format($sayi1,0,"TL",".",);
        ?>

</body>
</html>