
<?php
$username = $_SESSION["username"];
$name = $_SESSION["ad"];
$soyad = $_SESSION["soyad"];
$path = $_SERVER['REQUEST_URI'];
echo '
<aside id="sidebar" class="column-left">

	<header>
		<h1><a href="#">Diyetin Güvende!</a></h1>	
	</header>
	
	<nav id="mainnav">
  		<ul>
                  ';

    if($path == "/Ortak/kullanici-profili.php")
        echo "<li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li ><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
    else if($path == "/Koc/koc.php")
        echo "<li><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li ><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li ><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
    else if($path == "/Koc/yeni-spor-plani.php")
        echo "<li><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li ><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
    else if($path == "/Koc/koc-liste-guncelle.php")
        echo "<li><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li ><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
    else if($path == "/Ortak/destek.php")
        echo "<li><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
    else
        echo "<li><a href=\"../Ortak/kullanici-profili.php\">$name $soyad <br>@$username</a></li>     		 	
                <li><a href=\"/Koc/koc.php\"> Öğrencilerim</a></li>
                <li><a href=\"/Koc/yeni-spor-plani.php\">Spor Planı Ekle</a></li>
                <li><a href=\"/Koc/koc-liste-guncelle.php\">Liste Güncelle</a></li>	
                <li class=\"selected-item\" style=\"background-color:forestgreen\"><a href=\"/Koc/koc-mesajlari.php\">Mesajlarim</a></li>
                <li ><a href=\"../Ortak/destek.php\">Destek</a></li>
                <li ><a href=\"../cikis-yap.php\">Çıkış Yap</a></li>";
echo '
        </ul>
	</nav>

			
			
</aside>
';?>


