<?php
$connectFile = "system/connect.php";
if(file_exists($connectFile)){
require $connectFile;
}
else{
die("<h1>Bağlantı dosyanız yok</h1>");
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onload="MM_preloadImages('images/icons/geri1.png','images/icons/ileri1.png')">
<div id="genel_alan">
    
		<div id="ust_alan">	
        	<div id="logo_alan">LOGO ALANI</div>
            <div id="sosyalmedya_alan">
				<ul class="social_bookmarks mrgn-t-5 mrgn-r-5">
							<?php
							$gall=mysql_query("select * from Sosyal_Medya WHERE Sm_Durum=1 ");
							if(mysql_num_rows($gall)==0){			
							}else{
							while($full=mysql_fetch_array($gall)){
							?>
								<li class='<?php echo $full['Sm_Adi'];?>'><a href='<?php echo $full['Sm_Linki'];?>' target="_blank"><?php echo $full['Sm_Adi'];?></a></li>								
							<?php }}?>

                 </ul>               
            </div>
            <div id="uye_alan">
            	<ul>
            	<li><a href="register.php"><img src="images/icons/uye_ol.png" />Üye Ol</a></li>
                <li><a href="login.php"><img src="images/icons/uye_giris.png" />Üye Giriş</a></li>
                </ul>
            </div>
            <div id="arama_alan">
            <form class="navbar-search" action="">
                      <input type="text" class="search-query span2" placeholder="Search">
                      
                    </form>
                    <a href="#"> <img src="images/icons/ara.png" /></a>
            </div>        
        </div>
        
        <div id="nav_alan">
        	<ul>
        		<li><a href="index.php" data-clone="Ekonomi">Ekonomi</a></li>
       			<li><a href="index.php" data-clone="Spor">Spor</a></li>
        		<li><a href="index.php" data-clone="Magazin">Magazin</a></li>
        		<li><a href="index.php" data-clone="Gündem">Gündem</a></li>
        		<li><a href="index.php" data-clone="Teknoloji">Teknoloji</a></li>
                <li><a href="index.php" data-clone="Kültür">Kültür</a></li>
                <li><a href="index.php" data-clone="Sanat">Sanat</a></li>
                <li><a href="index.php" data-clone="Sağlık">Sağlık</a></li>
                <li><a href="index.php" data-clone="Eğitim">Eğitim</a></li>
    		</ul>
        </div>
        
  <div id="usthaber_alan">
        	<ul>
			<?php
			$gall=mysql_query("select * from haberler WHERE haber_yer =0 order by haber_id desc limit 4");
			if(mysql_num_rows($gall)==0){			
			}else{
			while($full=mysql_fetch_array($gall)){
			?>
            	<li><a href="haber_detay.php?haber_id=<?php echo $full['haber_id']?>"><img src="images/slider/<?php echo $full['haber_resim']?>" /><h3><?php  echo $full['haber_baslik']?></h3></a></li>
			<?php }}?>
            </ul>
  </div>
        
        
		<div id="slider">
        	<ul class="slider">
			<?php
			$gall=mysql_query("select * from haberler WHERE haber_yer =1 order by haber_id desc limit 10");
			if(mysql_num_rows($gall)==0){			
			}else{
			while($full=mysql_fetch_array($gall)){
			?>
            	<li><a href="haber_detay.php?haber_id=<?php echo $full['haber_id']?>"><img src="images/slider/<?php echo $full['haber_resim']?>" /><h3 class="mansetTitle"><?php  echo $full['haber_baslik']?></h3></a> </li>
            <?php }}?>
            </ul>
            
             <div class="sayfa">
             <?php
			 $i=0;
			$gall=mysql_query("select * from haberler WHERE haber_yer =1 order by haber_id desc limit 10");
			if(mysql_num_rows($gall)==0){			
			}else{
			while($full=mysql_fetch_array($gall)){
			$i=$i+1;
			?>
             	<a href="haber_detay.php?haber_id=<?php echo $full['haber_id']?>"><?php echo $i?></a>           
          	<?php }}?>
            </div>
          
          
              <div class="sayfa_buton">
              <a href="#" id="onceki"><</a>
              <a href="#" id="sonraki">></a>              
              </div>
              
                         
  </div>
		
        
        
  <div class="news-holder">  
    <ul class="news-headlines">
      <li class="selected">Haber1 başlığı</li>
      <li>Haber2 başlığı</li>
      <li>Haber3 Başlık</li>
      <li>Haber4 Başlık</li>
      <li class="highlight"></li>
    </ul>
    
    <div class="news-preview">   
      <div class="news-content top-content">
        <a href="#">
        <img src="http://cdn.impressivewebs.com/news1.jpg">
        <h4>Haber1 başlığı</h4>
        <p>Kısa Açıklama1</p>
        </a>
      </div><!-- .content-1 -->
      
      <div class="news-content">
        <a href="#">
        <img src="http://cdn.impressivewebs.com/news2.jpg">
        <h4>Haber2 başlığı</h4>
        <p>Kısa Açıklama2</p>
        </a>
      </div><!-- .content-2 -->
      
      <div class="news-content">
        <a href="#">
        <img src="http://cdn.impressivewebs.com/news3.jpg">
        <h4>Haber3 başlığı</h4>
        <p>Kısa Açıklama3</p>
        </a>
      </div><!-- .content-3 -->
      
      <div class="news-content">
        <a href="#">
        <img src="http://cdn.impressivewebs.com/news4.jpg">
        <h4>Haber4 başlığı</h4>
        <p>Kısa Açıklama4</p>
        </a>
      </div><!-- .content-4 -->
    </div><!-- .news-preview -->   
</div><!-- .news-holder -->


<div id="orta_alan">
	<div class="ortaic_alanlar">
			<h2>En Çok Okunan Haberler</h2>
        	<ul class="orta_haberler">
            	<li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
			    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           </ul>
	</div>
    <div class="ortaic_alanlar">
			<h2>Spor Haberleri</h2>
        	<ul class="orta_haberler">
            	<li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
			    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           </ul>
	</div>
    <div class="ortaic_alanlar">
			<h2>Gündem Haberler</h2>
        	<ul class="orta_haberler">
            	<li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
			    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           	    <li><a href="#"><img src="images/1656321_10152040052758387_1487758418_n.jpg" /><h3>Haber başlığı buraya gelecek</h3></a></li>
           </ul>
	</div>
    <div id="geri">
      <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image52','','images/icons/geri1.png',1)"><img src="images/icons/geri.PNG" name="Image52" width="44" height="98" border="0" id="Image52" /></a>     
       </div>
    
<div id="alt_slider">
            <div class="alt_slider">
              <ul>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
               <li><a href="#"><img src="images/slider/resim1.jpg" alt=""  /></a></li>
             </ul>
           </div>
       </div>
              
       <div id="ileri">
         <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image53','','images/icons/ileri1.png',1)"><img src="images/icons/ileri.PNG" name="Image53" width="42" height="97" border="0" id="Image53" /></a>       
         </div>
    
</div>

<div id="footer" style="clear:both; width:990px; height:50px; background-color:#333333; margin-top:200px">
<p style="color:#FFFFFF; font-weight:bold; text-align:center;padding-top:20px">© Copyright 2014 - ÖZGÜR KAN - Tüm Hakları Saklıdır</p>
</div>
	





</div>
</body>
</html>
