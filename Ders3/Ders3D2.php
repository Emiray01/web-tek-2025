
<?php
$gelendoysa = $_FILES["cv"];
echo "<pre>";
print_r($gelendoysa);
echo "</pre>";
echo "gelen dosyanın adı",$gelendoysa["name"],"<br>";
echo "gelen dosyanın tipi",$gelendoysa["type"],"<br>";
echo "gelen dosyanın temp dizini",$gelendoysa["tmp_name"],"<br>";
echo "gelen dosyanın boyutu",$gelendoysa["size"],"<br>";
?>