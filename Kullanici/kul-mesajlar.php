@@ -0,0 +1,94 @@
<?php
session_start();
ob_start();
$ad = $_SESSION["ad"];
$username = $_SESSION["username"];
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Mesajlar-Diyetin Güvende!</title>
<link rel="stylesheet" href="/css/styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<section id="body" class="width">
		<?php if($_SESSION["kullaniciTur"] == "Kullanici"){include "../Menus/kullanici-menu.php";}?>

			
        <section id="content" class="column-right">
                <div class="beyaz" style="padding-top: 50px"  >
				 <fieldset>
                    <legend>Mesajlar</legend><br><br>
                    <?php
                    include "../baglan.php";

                    $id = $_SESSION['Id'];
                    $gonderilenId =  $_GET['kullaniciId'];
                    $karsi = $db->query("SELECT * FROM kullanici WHERE Id = $gonderilenId")->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h2><?php echo $karsi['KullaniciAdi']; ?> ile olan mesajlaşma</h2>
                    <div class="mesajAlani" id="mesajAlani" style="background-color: #6e707d;width: 100%;height: 400px;overflow: scroll;">

                        <?php
                        $query = $db->query("SELECT * FROM kullanicimesaj WHERE GonderenId= $gonderilenId OR AlanId= $gonderilenId", PDO::FETCH_ASSOC);
                        if ( $query->rowCount() ){
                            foreach( $query as $mesaj ){
                                if($mesaj['AlanId']!=$id){
                                    print '
                                        <div class="alanMesaj" style="background-color: #00b8d4;font-size: 24px;font-weight: bold;margin: 10px 15px">
                                            <p style="padding: 5px 5px 5px 5px">Ben:'.$mesaj['Mesaj'].'</p>
                                        </div>
                                        ';
                                }
                                else{
                                    print '
                                        <div class="karsiMesaj" style="background-color: #2b669a;font-size: 24px;font-weight: bold;margin: 10px 15px">
                                            <p style="padding: 5px 5px 5px 5px">O:'.$mesaj['Mesaj'].'</p>
                                        </div>
                                    ';
                                }

                            }
                        }


                        ?>

                    </div>
                    <form method="get">
                        <input type="text" style="width: 70%" id="msg" name="msg"/>
                        <input type="hidden" value="<?php echo $karsi['Id'] ?>" name="kullaniciId">
                        <input type="submit" onclick="mesajGonderildi()" value="Gönder">
                    </form>
                </div>
		</section>

		<div class="clear"></div>

	</section>
	

</body>

<script>
    function mesajGonderildi() {
       var alan = document.getElementById('mesajAlani');
       var mesaj = document.getElementById('msg');
       alan.innerHTML +=
           "<div class=\"alanMesaj\" style=\"background-color: #00b8d4;font-size: 24px;font-weight: bold;margin: 10px 15px\">\n" +
           "                                            <p style=\"padding: 5px 5px 5px 5px\">Ben: +mesaj+</p>\n" +
           "                                        </div>";
    }
</script>
</html>
<?php
$msg = $_GET['msg'];
$query = $db->prepare("INSERT INTO kullanicimesaj SET GonderenId = ?, AlanId = ?, Mesaj = ?,GonderilmeTarihi = ?");
$insert = $query->execute(array($id, $gonderilenId,$msg, date("Y-m-d H:i:s")));
?>