<?php 
require "system/connect.php";
$haber_id=$_GET["haber_id"];

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
										<li class='<?php echo $full['Sm_Adi'];?>'><a blank="_target" href='<?php echo $full['Sm_Linki'];?>' target="_blank"><?php echo $full['Sm_Adi'];?></a></li>								
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
        
	<div id="haber_detay">
        	<?php 
			$sorgu=mysql_query("SELECT * FROM  `haberler` WHERE haber_id =$haber_id");
			 while($satir = mysql_fetch_array($sorgu))
				{
			?>
			<h1 style="text-align:center;font-weight:bold"><?php print $satir["haber_baslik"];?></h1>		
			<img style="float:left; margin:0 30px 0 20px;width:200px; height:300px" src="images/slider/<?php print $satir["haber_resim"];?>" />
			<p style="font-size:15px; font-weight:bold; text-align:left"><?php print $satir["haber_detay"];?></p>
			<?php }?>			
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
	<div style="clear:both;"></div>
	<form method="post" action="">
	<div class="yorum">
				<h2 style="text-align:center">YORUMLAR</h2>
                <?php
					if($_POST){
					/*Verileri alalım*/
					$yorum_detay=$_POST['yorum_detay'];
					/*haber_id yukarda alındı*/
					$yorum_durum=0;
					date_default_timezone_set('Europe/Istanbul');
					$yorum_tarihi=date('Y-m-d H:i:s');
					$uye_adi="deneme üyesi";/*sessiondan alınacak*/
					if(empty($yorum_detay)){
					echo 'boş alan';
					?>
					<!--<script type="text/javascript">
					alert("Yorum alanı boş geçilemez");
					</script>-->
					<?php
					}else{
							$sql=mysql_query("INSERT INTO `yorumlar`(`yorum_detay`,`haber_id`,`yorum_durum`,`yorum_tarih`,`uye_adi`) 
											  VALUES 
															('$yorum_detay','$haber_id','$yorum_durum','$yorum_tarihi','$uye_adi')");
															if($sql){
															echo 'yorumunuz değerlendirildikten sonra eklenecektir';
															$yorum_detay=null;
															unset($yorum_detay);															
															//$yorum_detay='';
															//$yorum_detay="";
															//header("Location:haber_detay.php?haber_id=$haber_id");
															?>
															<SCRIPT LANGUAGE="JavaScript">
																var shant="haber_detay.php?haber_id=<?php echo $haber_id; ?>" // yönlenecek sayfa ya da site
																	function forPage() 
																	{
																	location.href=shant
																		} 
																		function go(){
																	setTimeout ("forPage()",0); // kaç saniye sonra yönleneceği. 
																	}
																	go();
																	</SCRIPT>
															<!--<script>document.location.href='haber_detay.php?haber_id=<?php echo $haber_id; ?>';</script>-->
															<?php
															}else{
															echo 'ekleme hatası';
															}
						  }
					}	 
					?>
					
					<?php
					$limit = 5;
						$page = @$_GET["page"];
						if(empty($page) or !is_numeric($page)) {
						$page = 1;
						}
							$count			 = mysql_num_rows(mysql_query("SELECT yorum_id FROM yorumlar where haber_id=$haber_id and yorum_durum=1"));
							$toplamsayfa	 = ceil($count / $limit);
							$baslangic		 = ($page-1)*$limit;
							
						$sorgu = "SELECT *,DATE_FORMAT(yorum_tarih, '%d-%m-%Y %H:%i') as yt FROM yorumlar where haber_id=$haber_id and yorum_durum=1 ORDER BY yorum_id desc LIMIT $baslangic,$limit";
						$yazdir_sorgu = mysql_query( $sorgu, $connx) or die(mysql_error() );
						while ($yazdir = mysql_fetch_array($yazdir_sorgu)){
						?>
				<div class="single-comment">
                    <div class="avatar"><a href="#"><img src="images/icons/uye_ol.png" /></a></div>
                    (<?php echo $yazdir['yt'];?>) <a href="#" class="link"><?php echo $yazdir['uye_adi'];?></a> 
                    <p><?php echo $yazdir['yorum_detay'];?> <!--<a href="#" class="reply-link">reply</a></p>  -->                 
					<!--<div class="single-comment subcomment">
                        <div class="avatar"><a href="#"><img src="images/manga1.png" /></a></div>
                        June 05, 2012 at 8:04 am, by <a href="#" class="link">mtanriverdi</a> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis massa in erat</p>
                    </div>
                    
                    <div class="single-comment subcomment">
                        <div class="avatar"><a href="#"><img src="images/manga1.png" /></a></div>
                        June 05, 2012 at 8:04 am, by <a href="#" class="link">mtanriverdi</a> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis massa in erat</p>
                    </div>
                    <a href="haber_detay.html?cevap=yanıtla" style="margin-left:600px; font-size:18px; color:#000">Yanıtla</a>
					-->
                </div>
						<?php } ?>
						
				

                
                
                <div class="min-h-10"></div>
                
                <div class="comment-form">
                   <!--<div class="row">

                        <div class="four columns">
                            <label for="text">Name</label>
                            <br />
                            <input type="text" />
                        </div>
                        <div class="four columns">
                            <label for="text">Mail</label>
                            <br />
                            <input type="text" />
                        </div>
                        <div class="four columns">
                            <label for="text">Web Site</label>
                            <br />
                            <input type="text" />
                        </div>
                    </div>-->
                    <div style="float:left;width:250px; height:20px"></div>					
					<?php
					if($count > $limit) : 
						  $x = 2; // akrif sayfadan önceki/sonraki sayfa gösterim sayisi 
						  $lastP = ceil($count/$limit); 
						  if($page > 1){
						  $onceki = $page-1;						  
						  echo "<a href=\"?haber_id=$haber_id && page=$onceki\">« Önceki Sayfa </a>"; 						  
						  }
						  // sayfa 1'i yazdir 
						  if($page==1) echo "<span class=\"sayfalama\">[1]</span>"; 
						  else echo "<a href=\"?haber_id=$haber_id && page=1\">[1]</a>"; 
						  // "..." veya direkt 2 
						  if($page-$x > 2) { 
							echo "..."; 
							$i = $page-$x; 
						  } else { 
							$i = 2; 
						  } 
						  // +/- $x sayfalari yazdir 
						  for($i; $i<=$page+$x; $i++) { 
							if($i==$page) echo "<span class=\"sayfalama\">[$i]</span>"; 
							else echo "<a href=\"?haber_id=$haber_id && page=$i\">[$i]</a>"; 
							if($i==$lastP) break; 
						  } 
						  // "..." veya son sayfa 
						  if($page+$x < $lastP-1) { 
							echo "..."; 
							echo "<a href=\"?page=$lastP\">[$lastP]</a>"; 
						  } elseif($page+$x == $lastP-1) { 
							echo "<a href=\"?page=$lastP\">[$lastP]</a>"; 
						  } 						  
						  if($page < $lastP){						  
						  $sonraki = $page+1;						  
						  echo "<a href=\"?haber_id=$haber_id & page=$sonraki\"> Sonraki Sayfa » </a>"; 						  
						  }
						  
						endif; 
					?>
					
					
					<div style="clear:both"></div>
					<div class="row" style="margin-left:150px">
                        <div class="eight columns">
                            <label for="text" style="margin-left:150px;font-size:20px; font-weight:bold">Yorumunuz</label>
                            <br />
                            <textarea style="height:100px" name="yorum_detay" id="yorum_detay"></textarea>
                        </div>
                        <div class="four columns">
                            <button  class="button blue nice small" style="margin-left:150px; margin-top:5px">Gönder</button>
                        </div>
                   </div>
                </div>
</div>
					
</form>

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
