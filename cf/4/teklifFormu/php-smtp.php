<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>

<?PHP

$cevap = $_POST['sorumuz'];

if ($cevap!=7)
	
	{	echo "Güvenlik sorusuna yanlış cevap verdiniz, lütfen tekrar deneyiniz. ";

		echo yonlendir(3, "../iletisim.html");
		die();
	}

else {
	require("phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsHTML(true); // Eposta HTML(true) - text(false) 
	$mail->Subject = "internet sitemizde mesaj";
 
 // TXT eposta icin eposta govdesini olusturuyoruz
/* $mail->AltBody = "Teklif Formu\n\n
                   Ad / Soyad: ".$_POST['name']."\n
                   Email : ".$_POST['email']."\n
				   Konu : ".$_POST['subject']."\n
				   Mesaj : ".$_POST['message']."\n
				  ";*/
				  
 // HTML eposta icin eposta govdesini olusturuyoruz
	$mail->Body    = "internet sitenizden mesaj:<br><br><br>
					  Ad / Soyad: ".$_POST['name']."<br><br><br>
                      Email : ".$_POST['email']."<br><br><br>
				      Mesaj : ".$_POST['message']."<br><br>
					";



 // epostamizi SMTP ustunden yollayalim.
 $mail->IsSMTP();

 // SMTP sunucu adresimiz.
 $mail->Host = "mail.cgnyazilim.com";
 
 // Sunucumuz kimlik dogrulamasi istiyorsa "true" degerini verelim.
 $mail->SMTPAuth = true;     

 // SMTP kullanici adi ve parolasi
$mail->Username = "cgn@cgnyazilim.com";
 $mail->Password = "027CAG951an";

 // Eposta kimden gidiyor?
 $mail->From = "cgn@cgnyazilim.com";

 // Eposta icin gorunen isim (Opsiyonel)
 //$mail->FromName = "Teknik Destek";

 // hedef adres (gorunen isim olmadan)
 $mail->AddAddress("cgn@cgnyazilim.com");
 
 // hedef adres (gorunen isim ile birlikte)
 //$mail->AddAddress("alici1@adres.com", "ALICI 1");

 // Eposta birden fazla kisiye gidecek ise $mail->AddAddress'i yine kullanabiliriz.
 //$mail->AddAddress("alici2@adres.com");

 // Yanitlama adresi ornegi (Opsiyonel)
 //$mail->AddReplyTo("destek@niobeweb.net","Teknik Destek");

 // Eposta icin sozcuk kaydirma. (Opsiyonel)
 //$mail->WordWrap = 50;

 // Eposta eklentisi (Opsiyonel)
 //$mail->AddAttachment("deneme.txt");

 // Eposta eklentisi (giden dosya adini biz belirleyelim) (Opsiyonel)
 //$mail->AddAttachment("deneme.txt", "yeni.txt");

 if(!$mail->Send()) {
   echo yonlendir(0, "teklif-formu-red.php");
  }
 else
   echo yonlendir(0, "teklif-formu-onay.php");
}
 function yonlendir($sure,$sayfa){ 
  		$deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n"; 
  		return $deger; 
 	}

?>
</body>
</html>