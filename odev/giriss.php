
<?php

if ($_POST['email'] == "yasinc2016@gmail.com" && $_POST['password'] =="b211210089" ){
    echo "BAŞARIYLA GİRİŞ YAPİLMİŞTİR <br>";
    
    echo "Anasayfaya gitmek için <br>";
    
    echo '<a href=odev/iletisim.html> Tiklayiniz <a>';
}
else{
    echo "Giris Basarisiz";

}
echo "<br><br>";

?>