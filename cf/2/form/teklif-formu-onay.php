<!doctype html>
<html>
<head>
<meta charset="UTF-8">

</head>
<body>

           	  <h1><center>Formunuz tarafımıza iletilmiştir!</center></h1>
           	  <h3><center>Ekibimiz en kısa sürede size geri dönüş yapacaktır.</center></h3>

           	  <?php 
           	  
           	  function yonlendir($sure,$sayfa){ 
  				$deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n"; 
  				return $deger; 
 				}
           	  echo yonlendir(3, "../index.php"); 
           	  
           	  ?>



</body>
</html>