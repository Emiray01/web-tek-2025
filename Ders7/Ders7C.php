<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döngüler</title>
</head>
<body>
    Döngüler:
    <hr>
    <p>---------------------------------------------------</p>
    <?php
    echo "<h3>while Döngüsü</h3>";
    while ($basla<=10)
    {
        $basla=1;
        echo "Tur",$basla;
        $basla++;
    }
    $dizi1 = ["mavi","kırmızı","sarı","yeşil"];
    ?>
</body>
</html>