<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $degerler = array(
        "Ocak",
        "Şubat",
        "Mart",
        array(
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe"
        ),
        "Nisan",
        "Mayıs",
        "Haziran",
        array(
            "Cuma",
            array(
                "sabah",
                "öğle",
                "akşam"
            ),
            "Cumartesi",
            "Pazar"
        )
    );
    $personel = array
    (
        "id"=> 1,
        "name"=>"Emiray",
        "surname"=>"Kılıç",
        "graduate"=>"Aymes Bilgisayar Programcılığı"
    );
    echo "<pre>";
    print_r($personel);
    echo "</pre>";
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    echo "dizinin eleman sayısı:" . count($degerler) . "<br>";
    echo "dizinin eleman sayısı:" . sizeof($degerler) . "<br>";
    echo "dizinin içerisindeki alt eleman sayısı:" . count($degerler[7][1]) . "<br>";
    echo "dizinin alt elemanları dahil tüm eleman sayısı:" . count($degerler,COUNT_RECURSIVE). "<br>";
 ?>
 <h5>Dizinin Başına Eleman Ekleme:</h5>
    <?php
     $isimler=array("Ali","Ahmet","Ayşe","huriye");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     array_unshift($isimler,"Emiray","Aynur");
     $yeni_eleman_sayisi=array_unshift($isimler,"Ayhan","Salih");
     echo "ekleme yapıldı, yeni dizinin eleman sayısı:".$yeni_eleman_sayisi."<br>";
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
    ?>
    <h5>Dizinin Sonuna Eleman Ekleme:</h5>
    <?php
     $isimler=array("Ali","Ahmet","Ayşe","huriye");
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     array_push($isimler,"Emiray","Aynur");
     $yeni_eleman_sayisi=array_push($isimler,"Ayhan","Salih");
     echo "ekleme yapıldı, yeni dizinin eleman sayısı:".$yeni_eleman_sayisi."<br>";
     echo "<pre>";
     print_r($isimler);
     echo "</pre>";
     ?>
    <h5>Dizinin Başından Eleman Çıkarma:</h5>
    <?php
    $isimler=array("Ali","Ahmet","Ayşe","Huriye","Emiray","Aynur");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    print "diziden kaldırılan 1. eleman:".array_shift($isimler)."<br>";
    print "diziden kaldırılan 2. eleman:".array_shift($isimler)."<br>";
    print "diziden kaldırılan 3. eleman:".array_shift($isimler)."<br>";
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    ?>
    <h5>Dizinin Sonundan Eleman Çıkarma:</h5>
    <?php
    $isimler=array("Ali","Ahmet","Ayşe","Huriye","Emiray","Aynur");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    print "diziden kaldırılan 1. eleman:".array_pop($isimler)."<br>";
    print "diziden kaldırılan 2. eleman:".array_pop($isimler)."<br>";
    print "diziden kaldırılan 3. eleman:".array_pop($isimler)."<br>";
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    ?>,
    <h5>dizinin key değerleri:</h5>
    <?php
    $market = array(
        "bim" => "BİM",
        "BimSubeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Efeler",
                "semt1" => array(
                    "Girne" => array(1, 2, 3, 4),
                    "Zafer" => array(1, 2, 3, 4)
                ),
                "Nazilli",
                "semt2" => array(
                    "uzuncarsi",
                    "yesil"
                )
            )
        ),
        "A101" => "A101",
        "A101Subeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Girne",
                "MimarSinan"
            )
        ),
        "Pekdemir" => "Pekdemir",
        "PekdemirSubeler" => array(
            "İzmir",
            "Manisa",
            "Aydın",
            "ilce" => array(
                "Girne",
                "MimarSinan"
            )
        )
    );

    echo "<pre>";
    print_r($market);
    echo "</pre>";
    echo key($market) . "<br>";
    ?>
    <h5>Dizilerde Explode İşlemi</h5>
    <?php
    echo $pizza ="dilim1,dilim2,dilim3,dilim4,dilim5,dilim6";
    $dizi = explode(",",$pizza);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    ?>
    <h5>Dizilerde Implode İşlemi</h5>
    <?php
    $isimler= array("Ali","Ahmet","Ayşe","Huriye","Emiray","Aynur");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    echo $metin=implode(",",$isimler);
    ?>
    <h5>Dizi birleştirmek</h5>
    <?php
    $dizi1= array("Ali","Emiray","Ahmet");
    $dizi2= array("Ayşe","Huriye","Aynur");
    $yeni_dizi=array_merge($dizi1,$dizi2);
    echo "<pre>";
    print_r($yeni_dizi);
    echo "</pre>";
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>