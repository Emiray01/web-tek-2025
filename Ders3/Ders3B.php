<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_FILES</h4>
    <h3>$_POST</h3>
    <form action="" method="POST">
    <label for="">Kullanıcı Adını Giriniz:</label>
    <input type="text" name="username" id="">
    <br>
    <label for="">Şifreyi Giriniz</label>
    <input type="password" name="password" id="sifre">
    <br>
    <input type="submit" value="Giriş Yap">
    </form>
    <?php
    $kullanici_adi=@$_POST["username"];
    $kullanici_sifre=@$_REQUEST["password"];
    echo "formdan kullanıcı adı: $kullanici_adi <br>";
    echo "formdan kullanıcı şifresi: $kullanici_sifre <br>";
    
    if($kullanici_adi=="Emiray" and $kullanici_sifre=="1234")
    {
        echo "Kullanıcı adı ve şifresi doğru";
    }
    ?>
</body>
</html>