﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<meta name="robots" content="noindex, nofollow">
<link rel="stylesheet" href="css/register.css" />
			
</head>
<body>
  
<!-- multistep form -->
<form id="msform" action="" method="post">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Hesap Oluştur</li>
		<li>Sosyal Profil</li>
		<li>Üye Bilgileri</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Yeni hesap oluşturma</h2>
		<h3 class="fs-subtitle">Adım-1</h3>
		<input type="text" name="email" placeholder="Email" />
		<input type="password" name="pass" placeholder="Şifre" />
		<input type="password" name="cpass" placeholder="Şifre Tekrar" />
		<input type="button" name="next" class="next action-button" value="İleri" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Sosyal Profil</h2>
		<h3 class="fs-subtitle">Adım-2</h3>
		<input type="text" name="twitter" placeholder="Twitter" />
		<input type="text" name="facebook" placeholder="Facebook" />
		<input type="text" name="gplus" placeholder="Google Plus" />
		<input type="button" name="previous" class="previous action-button" value="Geri" />
		<input type="button" name="next" class="next action-button" value="İleri" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Üye Bilgileri</h2>
		<h3 class="fs-subtitle">Adım-3</h3>
		<input type="text" name="fname" placeholder="Adınız" />
		<input type="text" name="lname" placeholder="Soyadınız" />
		<input type="text" name="phone" placeholder="Telefon" />
		<textarea name="address" placeholder="Adresiniz"></textarea>
		<input type="button" name="previous" class="previous action-button" value="Geri" />
		<input type="submit" name="submit" class="submit action-button" value="Onayla" onclick="window.location ='register.php'" />
	</fieldset>
</form>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- jQuery easing plugin -->
<script src="jquery.easing-1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>


</body>
</html>
