<?php
session_start();
require "../system/connect.php";
?>
			<!-- content starts -->
			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Anasayfa</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>		
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> Bilgilendirme</h2>
						<div class="box-icon">							
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>							
						</div>
					</div>
					<div class="box-content">
						<h1 style="text-align:center">Hoş Geldiniz sayın yönetici</h1>
						<p style="font-size:20px;font-weight:bold;padding:10px">Siteyi yönetebilmek için sol taraftaki menüyü kullanabilirsiniz.</p>		
					</div>
				</div>
				
				<div class="sortable row-fluid" style="padding-left:250px">
				<a data-rel="tooltip" class="well span3 top-block" href="#">
					<span class="icon32 icon-red icon-user"></span>
					<div>Toplam Eklenen Haber</div>
					<div><?php 
					$admin_id=$_SESSION['adminid'];
					$sonuc=mysql_query("SELECT COUNT( * ) AS  'sayı' FROM `haberler` WHERE admin_id =$admin_id");
					$result=row($sonuc);
					echo $result['sayı'];
					?></div>					
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-star-on"></span>
					<div>Bugün Eklenen Haber</div>
					<div><?php 
					$admin_id=$_SESSION['adminid'];
					$tarih = date("m/d/Y");
					$sonuc=mysql_query("SELECT COUNT( * ) AS  'sayı' FROM `haberler` WHERE admin_id =$admin_id and ekleme_tarihi='$tarih'");
					$result=row($sonuc);
					echo $result['sayı'];
					?></div>					
				</a>

				<a data-rel="tooltip" class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>En Çok Okunan Haberlerim</div>
					<div>
					<?php 
					$admin_id=$_SESSION['adminid'];
					$tarih = date("m/d/Y");
					$sonuc=mysql_query("SELECT count(*) AS 'sayı' FROM  `haberler` WHERE admin_id =$admin_id order by haber_okunma desc LIMIT 10");
					$result=row($sonuc);
					echo $result['sayı'];
					?>					
					</div>					
				</a>			
			</div>
			</div>
			<!-- content ends -->