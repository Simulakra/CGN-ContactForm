<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CGN</title>
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">

<meta name="description" content="CGN Yazılım ve Bilişim Hizmetleri Web Tasarım Hizmeti">

<meta name="keywords" content="web tasarım">

<meta name="copyright" 	content="Copyright (c) 2014 CGN yazilim & bilisim hizmetleri">
<META name="designer" 	 content="CGN yazilim & bilisim hizmetleri">
<meta name="author" 	   content="CGN yazilim & bilisim hizmetleri" />
<meta name="publisher" 	content="CGN yazilim & bilisim hizmetleri" />
<meta name="DC.title" 	 content="CGN yazilim & bilisim hizmetleri" />
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" /> 

<!-- CSS SECTION -->
<link href="../css/cgn.css" rel="stylesheet" type="text/css">
<!-- CSS SECTION -->
<!-- JAVASCRIPT SECTION -->
<script src="../js/cgn.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<!-- PAGE CUSTOM JAVASCRIPT SECTION -->
<!-- NAV DROP DOWN + NAV + DROPDOWN SLIDE + BACKtoTOP + TABS + ACCORDION-->
<script type="text/javascript">
jQuery(document).ready(function(){jQuery(".nav li").live("mouseenter mouseleave",function(e){if(e.type=="mouseenter"){jQuery(this).children("ul").fadeIn(300)}else{jQuery(this).children("ul").fadeOut(300)}});jQuery(".nav").each(function(){var e=jQuery(this);var t=jQuery("<select />").appendTo(e);jQuery("<option />",{selected:"selected",value:"",text:"Navigation Menu"}).appendTo(t);e.find("li a").each(function(){jQuery("<option />",{value:jQuery(this).attr("href"),text:jQuery(this).text()}).appendTo(t)});t.change(function(){window.location=jQuery(this).val()})});jQuery("a.fancyboxnumber").fancybox({titlePosition:"outside",overlayColor:"#000000",overlayOpacity:.7});jQuery(".tab").click(function(){jQuery(".tabs_container > .tabs > li.active").removeClass("active");jQuery(this).parent().slideDown("slow").addClass("active");jQuery(".tabs_container > .tab_contents_container > div.tab_contents_active").slideUp("slow").removeClass("tab_contents_active");var e=jQuery(this).attr("data-tab");jQuery(e).slideDown("slow").addClass("tab_contents_active")});jQuery(".accordionwrap .accordioncontent").hide();jQuery(".accordionwrap .accordiontitle:first-child").addClass("active").next().show();jQuery(".accordionwrap .accordiontitle").click(function(){if(jQuery(this).next().is(":hidden")){jQuery(this).parent().find(".accordiontitle").removeClass("active").next().slideUp("fast");jQuery(this).toggleClass("active").next().slideDown("fast")}return false});jQuery(".plus a").live("click",function(){jQuery(".dropdown_wrap").slideDown()});jQuery(".dropdown_close").live("click",function(){jQuery(".dropdown_wrap").slideUp()});jQuery(window).bind("scroll",function(){if(jQuery(this).scrollTop()>200){jQuery(".backtotop").fadeIn("3000")}if(jQuery(this).scrollTop()<199){jQuery(".backtotop").fadeOut("3000")}});jQuery(".backtotop").live("click",function(){jQuery("html, body").animate({scrollTop:0},"slow")})})
</script>
 <!-- PAGE CUSTOM JAVASCRIPT SECTION -->
<!-- JAVASCRIPT SECTION -->


</head>
<body>

<!-- DROPDOWN MESSAGE SECTION -->
<section class="dropdown_wrap">
<div class="dropdown_inner">
Müşteri panel girişleri ve çeşitli bilgiler
<div class="dropdown_close"><img src="images/close.png" alt=" paneli kapat"></div>
</div>
</section>
<!-- /DROPDOWN MESSAGE SECTION -->

<!-- SOCIAL MEDIA BUTTONS SECTION -->
<section class="socialmedia_buttons">
<div class="largecontainer">

<section class="socialmedia_index-contact">
</section>

<ul class="sbut">
<li><a href="https://twitter.com/CGNYazilim" title="CGN twitter" target="new">
<img src="../images/social/twitter.png"	 alt="CGN twitter"></a></li>

<li><a href="https://www.facebook.com/pages/CGN-Yazılım-Ve-Bilişim-Hizmetleri/122116327859" title="CGN facebook" target="new">
<img src="../images/social/facebook.png" 	alt="CGN facebook"></a></li>
     
<li><a href="http://www.linkedin.com/pub/cgn-yazilim/68/b/ab3" title="CGN linked in" target="new">
<img src="../images/social/linkedin.png" 	alt="CGN linked in"></a></li>

<li><a href="https://plus.google.com/108630447777113272184/posts" title="CGN google-plus" target="new">  
<img src="../images/social/google-plus.png" alt="CGN google plus"></a></li>

<li><a href="http://instagram.com/cgnyazilim" title="CGN instagram" target="new">	
<img src="../images/social/instagram.png"   alt="CGN instagram"></a></li>

<li><a href="https://tr.foursquare.com/v/cgn-yaz%C4%B1l%C4%B1m--bili%C5%9Fim-hizmetleri/4f742ec8e4b0bdf32e05a533" title="CGN foursquare" target="new">   
<img src="../images/social/foursquare.png"  alt="CGN foursquare"></a></li>     
       
<li><a href="http://www.youtube.com/channel/UC6RqT-1-jqNPRZNpcs6pU-Q" title="CGN youtube" target="new">	  
<img src="../images/social/youtube.png"     alt="CGN youtube"></a></li>

<li><a href="http://dribbble.com/cgnyazilim" title="CGN dribbble" target="new">	 
<img src="../images/social/dribbble.png" 	alt=CGN "dribbble"></a></li>

<li><a href="https://soundcloud.com/cgnyazilim" title="CGN soundcloud" target="new"> 		  
<img src="../images/social/soundcloud.png"  alt="CGN soundcloud"></a></li>

<!-- DROPDOWN BUTTON -->
<li class="plus"><a href="#" title="paneli aç"><img src="../images/plus.png" alt="paneli aç"></a></li>
<!-- DROPDOWN BUTTON -->
</ul>
</div>
<div class="shadoweffect"></div>
</section>

<div class="clear"></div>
<!-- //SOCIAL MEDIA BUTTONS SECTION -->

<!-- HEADER AND MAIN SECTION -->
<div class="mainbg background">
<!-- CONTAINER -->
<div class="maincontainer">
<!-- MAIN SECTION -->
<section class="main_section">
<!-- HEADER SECTION -->
<header class="header">
                
<div class="logonav">
<!-- LOGO SECTION -->
<section class="logo"><a href="../index.php" title="CGN"><img src="../images/logo.png" alt="CGN"></a></section>
<!-- /LOGO SECTION -->

<!-- NAVIGATION SECTION -->
<nav class="nav">

<ul>
<li><a href="../ekibimiz.html" title=""><span class="cgnfont">CGN</span></a>
<ul>
<li><a href="../ekibimiz.html" title="">Ekibimiz</a></li>
<li><a href="../calisma-anlayisimiz.html" title="">Çalışma Anlayışımız</a></li>
</ul>
</li>

<li><a href="../web-tasarim.html" title="">HİZMETLER</a>
<ul>
<li><a href="../web-tasarim.html" title="">Web Tasarım</a></li>
<li><a href="../yazilim-gelistirme.html" title="">Yazılım Geliştirme</a></li>
<li><a href="../grafik-tasarim-kurumsal-kimlik.html" title="">Grafik Tasarım</a></li>
<li><a href="../arama-motoru-optimizasyonu.html" title="">Arama Motoru Optimizasyonu</a></li>
<li><a href="../sosyal-medya-danismanligi.html" title="">Sosyal Medya Danışmanlığı</a></li>
<li><a href="../teknoloji-danismanligi.html" title="">Teknoloji Danışmanlığı</a></li>
<li><a href="../veri-kurtarma-data-recovery.html" title="">Veri Kurtarma</a></li>
<li><a href="../hosting-alanadi-danismanlik.html" title="">Hosting &amp; Alan Adı Danışmanlığı</a></li>
</ul>
</li>

<li><a href="../cgn-cms.html" title="">ÜRÜNLER</a>
<ul>
<li><a href="../cgn-cms.html" title=""><span class="cgnfont">CGN</span> [cms]</a></li>
<li><a href="../studyzone.html" title="">STUDYZONE</a></li>
<li><a href="../cgn-crm-lite.html" title="">C - CRM_lite</a></li>
<li><a href="../e-ticaret.html" title="">E- ticaret çözümleri</a></li>
</ul>
</li>

<li><a href="../referanslar.html" title="">PORTFOLYO</a></li>

<li><a href="../blog" title="">BLOG</a></li>

<li><a href="../iletisim.html" title="">İLETİŞİM</a></li>

</ul>

</nav>
<!-- /NAVIGATION SECTION --> 
                    
<div class="clear"></div>
                
</div>
              
<div class="clear"></div>
            
</header>
<div class="clear"></div>
	    <!-- PAGE TITLE SECTION -->
            <section class="mainpage_title">
            
                <h1><span>Teklif Formu </span></h1>
                
            </section>
			<!-- PAGE TITLE SECTION --> 
        	<div class="container">
            <div class="clear"></div>
            
            <div class="fullwidth">

           	  <h1><center>Formunuz tarafımıza iletilmiştir!</center></h1>
           	  <h3><center>Ekibimiz en kısa sürede size geri dönüş yapacaktır.</center></h3>
           	  <center><img src="../images/onay.png" /></center>
           	  <?php 
           	  
           	  function yonlendir($sure,$sayfa){ 
  				$deger = "<meta http-equiv=\"refresh\" content=\"$sure;url=$sayfa\">\n"; 
  				return $deger; 
 				}
           	  echo yonlendir(3, "../index.php"); 
           	  
           	  ?>

<div class="clear"></div><hr>

                 <!-- START teklif formu - form icerigi -->

                <!-- End teklif formu - form icerigi -->
                
<div class="clear"></div><hr>             


<div class="clear"></div>     
</div>
<!-- MAIN CONTENT SECTION -->
</div> 
     
</section>
<div class="clear"></div>
<!-- MAIN SECTION -->

</div>
<!-- CONTAINER -->

</div>
<!-- HEADER AND MAIN SECTION -->

<!-- FOOTER WIDGET SECTION -->
<section class="footerwidget_area">

<div class="footer_widget_container">

<!-- WIDGET -->
<div class="widget">
<h3>Ekstra içerik</h3>
<ul>
<li><a href="../updating.html" title="">Yardım Merkezi</a></li>
<li><a href="../updating.html" title="">Jargon Sözlüğü</a></li>
<li><a href="../acik-pozisyonlar.html" title="">Açık Pozisyonlar</a></li>
<li><a href="http://cgnyazilim.com/blog/" title=""><span class="cgnfont">CGN</span> AKADEMİ</a></li>
<li><a href="../updating.html" title="">Ücretsiz Uygulamalar</a></li>
</ul>
</div>
<!-- /WIDGET -->
        
<!-- WIDGET -->
<div class="widget">

<h3>Bizden kareler</h3>
<style type="text/css"> 
.flickr_badge_image {margin:0px;display:inline;}
.flickr_badge_image img {border: 1px solid #666666 !important; padding:3px; margin:6px;}
#flickr_badge_wrapper {width:310px;text-align:left}
</style><div id="flickr_badge_wrapper"><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&display=latest&size=s&layout=x&source=user&user=94405112@N08"></script></div>
</div>
<!--/ WIDGET -->
<!-- WIDGET -->
<div class="widget">

<h3><span class="cgnfont">CGN</span> duyuruları</h3>
<marquee behavior="slide" direction="down" scrollamount="2" height="200" width="320">
<p><span class="cgnfont">CGN</span> Yazılım ve Bilişim Hizmetleri ofisinde kendini web alanında geliştirmek isteyen öğrenci arkadaşlar arıyoruz.</p>
<br />
<p>İçerik Yönetim Sistemimiz olan <span class="cgnfont">CGN</span> CMS V2.0 yenilenen arayüzü ve özellikleri ile yayında.<a href=""> Detaylar</a>.</p>
<br />
<p>E-Öğrenme platformumuz olan Studyzone'un ilk versiyonu yayında.<a href=""> Detaylar</a>.</p>
</marquee>



</div>
<!-- /WIDGET -->
        
	</div>

</section>
<!-- FOOTER WIDGET SECTION -->
<div class="clear"></div>
<!-- FOOTER SECTION -->
<footer class="footer">


</footer>
<!-- FOOTER SECTION -->

<!-- BACK TO TOP BUTTON -->
<div class="backtotop"><a title="yukarı">yukarı</a></div>
<!-- BACK TO TOP BUTTON -->



</body>
</html>