
// JavaScript Document
$(function(){
		 $(".sayfa a:first").addClass("aktif");
		 //$(".slider li").hide();
		 //$(".slider li:fist").show();
		 //$("ul.slider li:not(:first)").hide();
		 var toplamLi = $(".slider li").length;
		 var toplamGenislik=toplamLi*690;
		 $("ul.slider").css("width",toplamGenislik+"px");
		 var deger=0;

		 
		 $(".sayfa a").hover(function(){
									  var indis=$(this).index();
									 yeniDeger=indis*690;				
										   $("ul.slider").animate({marginLeft:"-" + yeniDeger + "px"},250);
									  $(".sayfa a").removeClass("aktif");
									  $(this).addClass("aktif");
									  deger=indis;
									  return false
									  });
		 
		 $("a#sonraki").click(function(){
									   $(".sayfa a").removeClass("aktif");
									   
									   if(deger < toplamLi-1){
										   deger++;									   
									 	   yeniDeger=deger*690;				
										   $("ul.slider").animate({marginLeft:"-" + yeniDeger + "px"},250);
									       $(".sayfa a:eq("+deger+")").addClass("aktif");
										   }
										   else{
											   deger=0;
											   $("ul.slider").animate({marginLeft:0 + "px"},250);
											   $(".sayfa a:eq("+deger+")").addClass("aktif");
											   }
									   return false								   
									});
		 
		 $("a#onceki").click(function(){
									   $(".sayfa a").removeClass("aktif");
									   
									   if(deger > 0){
										   deger--;									   
									 	   yeniDeger=deger*690;				
										   $("ul.slider").animate({marginLeft:"-" + yeniDeger + "px"},250);							       
									       $(".sayfa a:eq("+deger+")").addClass("aktif");
										   }
										   else{
											   deger=toplamLi-1;
											   yeniDeger=deger*690;				
										   $("ul.slider").animate({marginLeft:"-" + yeniDeger + "px"},250);
											   $(".sayfa a:eq("+deger+")").addClass("aktif");
											   }
									   return false								   
									});
		 
		 $.dondur=function(){
			 							 $(".sayfa a").removeClass("aktif");
									   
									   if(deger < toplamLi-1){
										   deger++;									   
									 	  	yeniDeger=deger*690;				
										   $("ul.slider").animate({marginLeft:"-" + yeniDeger + "px"},250);						       
									       $(".sayfa a:eq("+deger+")").addClass("aktif");
										   }
										   else{
											   deger=0;
											   $("ul.slider").animate({marginLeft:0 + "px"},250);
											   $(".sayfa a:eq("+deger+")").addClass("aktif");
											   }
									   return false					
			 }
			 var sliderDondur=setInterval('$.dondur()',5000);
			 $("#slider").hover(function(){
			clearInterval(sliderDondur);
			},function(){
			sliderDondur=setInterval("$.dondur()",5000);
			});
			 
			 
			 
			 /*******  Yan Slider **********/
			 "use strict";

  var          hl = $('.highlight'),
         newsList = $('.news-headlines'),
    newsListItems = $('.news-headlines li'),
    firstNewsItem = $('.news-headlines li:nth-child(1)'),
      newsPreview = $('.news-preview'),
          elCount = $('.news-headlines').children(':not(.highlight)').index(),
         vPadding = (parseInt(firstNewsItem.css('padding-top').replace('px', ''), 10)) +
                    (parseInt(firstNewsItem.css('padding-bottom').replace('px', ''), 10)),
          vMargin = (parseInt(firstNewsItem.css('margin-top').replace('px', ''), 10)) +
                    (parseInt(firstNewsItem.css('margin-bottom').replace('px', ''), 10)),
          myTimer = null,
         siblings = null,
      totalHeight = null,
          indexEl = 1,
                i = null;
  
  function doEqualHeight() {
    
    if (newsPreview.height() < newsList.height()) {
      newsPreview.height(newsList.height());
    } else if ((newsList.height() < newsPreview.height()) && (newsList.height() > parseInt(newsPreview.css('min-height').replace('px', ''), 10))) {
      newsPreview.height(newsList.height());
    }
    
  }
  
  function doTimedSwitch() {
  
    myTimer = setInterval(function () {
      if (($('.selected').prev().index() + 1) === elCount) {
        firstNewsItem.trigger('click');
      } else {
        $('.selected').next(':not(.highlight)').trigger('click');
      }
    }, 10000);
  
  }
  
  function doClickItem() {
  
    newsListItems.on('click', function () {
  
      newsListItems.removeClass('selected');
      $(this).addClass('selected');
  
      siblings = $(this).prevAll();
      totalHeight = 0;
  
      // this loop calculates the height of individual elements, including margins/padding
      for (i = 0; i < siblings.length; i += 1) {
          totalHeight += $(siblings[i]).height();
          totalHeight += vPadding;
          totalHeight += vMargin;
      }
  
      // this moves the highlight vertically the distance calculated in the previous loop
      // and also corrects the height of the highlight to match the current selection
      hl.css({
        top: totalHeight,
        height: $(this).height() + vPadding
      });
  
      indexEl = $(this).index() + 1;
  
      $('.news-content:nth-child(' + indexEl + ')').siblings().removeClass('top-content');
      $('.news-content:nth-child(' + indexEl + ')').addClass('top-content');
  
      clearInterval(myTimer);
      doTimedSwitch();
  
    });
  
  }
  
  function doWindowResize() {
  
    $(window).resize(function () {
  
      clearInterval(myTimer);
      setTimeout(function () {
        $('.selected').trigger('click');
      }, 1000 );
  
      doEqualHeight();
  
    }); 
  
  }
  
  doClickItem();
  doWindowResize();
  setTimeout(function () {
      doEqualHeight();
  }, 500);
  $('.selected').trigger('click');
  
  
  
  
  
  /*Alt Slider*/
  var sure=10000;//slider dönme süresi

var toplamLi = $(".alt_slider ul li").length;
var liWidth=170;
var toplamWidth = liWidth*toplamLi;
var liDeger=0;
$(".alt_slider ul").css("width",toplamWidth + "px");

$("#ileri").click(function(){
if(liDeger<toplamLi-5){
liDeger++;
yeniWidth=liWidth*liDeger;

$(".alt_slider ul ").animate({marginLeft:"-"+yeniWidth+"px"},500);
}else{
liDeger=0;
$(".alt_slider ul ").animate({marginLeft:"0"},500);
}
return false;
})



$("#geri").click(function(){
if(liDeger>0){
liDeger--;
yeniWidth=liWidth*liDeger;
$(".alt_slider ul").animate({marginLeft:"-"+yeniWidth+"px"},500);
}else{
liDeger=toplamLi-4;
$(".alt_slider ul").animate({marginLeft:"toplamWidth"},500);
}
return false;
})

/*Otomatik Dönme*/
$.alt_slider=function(){
if(liDeger<toplamLi-5){
liDeger++;
yeniWidth=liWidth*liDeger;
$(".alt_slider ul").animate({marginLeft:"-"+yeniWidth+"px"},500);
  }else{
liDeger=0;
$(".alt_slider ul").animate({marginLeft:"0"},500);
   }
}

var don=setInterval("$.alt_slider()",sure);

$("#alt_slider").hover(function(){
clearInterval(don);
},function(){
don=setInterval("$.alt_slider()",sure);
})
  
});
