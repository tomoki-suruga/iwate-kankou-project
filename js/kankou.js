
$(function(){
var navWidth = $(".navi-nav").width();
var windowHight = $(window).height();
	if($(window).width()>768){
	 		$(".navi-ul-ul").addClass("active");
	 	}else{
	 		var navWidth = $(".navi-nav").width();
			var windowHight = $(window).height();
	 		$(".navi-nav").css("position","fixed").css("right",-navWidth );
	 			if($(".navi-nav").height() < windowHight){$(".navi-nav").css("height",windowHight);}
	 		}

	 		$(".active").hide();
			$("#dropdown li").hover(function(){
				$(".active:not(:animated)",this).stop().slideDown("fast");
			},
			function(){
				$(".active",this).stop().slideUp("fast");
			});
 
		$(window).resize(function(){
			$(".wrap").css({'position':'static'});
			if($(window).width()>768){
				$(".navi-ul-ul").addClass("active");
				$(".active").hide();
				$(".navi-nav").css("position","");
				$(".navi-nav").css("height","");
				
		}else{$(".navi-ul-ul").show();
			var navWidth = $(".navi-nav").width();
			var windowHight = $(window).height();
			if($(".navi-nav").height() < windowHight){$(".navi-nav").css("height",windowHight);}
			$(".navi-nav").css("position","fixed").css("right",-navWidth)
			$(".navi-ul-ul").removeClass("active");
			}
		});

		$("#menubtn").click(function(){
			
			if($(".navi-nav").css("position")== "static" ){
				$(".navi-nav").css("position","fixed");
				$(".wrap").css({
					'position':'static'
				});
				//$(".navi").css("position","static");

		}else{
				 var navWidth = $(".navi-nav").width();
			var windowHight = $(window).height();
			$(".navi-nav").css("position","static")
			$(".wrap").css({
					'position':'fixed',
					'left':-navWidth 
				});
		}
		});

//ページ遷移時にたぶを開く
	var urlHash = location.hash;
     if(urlHash == '#-tabe') {
     	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".tabe").show();
        } else if(urlHash == '#-onsen') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".onsen").show();
        } else if(urlHash == '#-rekisi') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".rekisi").show();
        } else if(urlHash == '#-sizen') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".sizen").show();
        } else if(urlHash == '#-maturi') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".maturi").show();
        } else if(urlHash == '#-art') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".art").show();
        } else if(urlHash == '#-leisure') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".leisure").show();
        } else if(urlHash == '#-gourmet') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".gourmet").show();
        } else if(urlHash == '#-basu') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".basu").show();
        } else if(urlHash == '#-taiken') {
        	$(".category-a>p").hide();
	        $(".category-b>p").hide();
	        $(".category-a li").hide();
	        $(".category-b li").hide();
            $(".taiken").show();
        } else {
            $(".category-a li").show();
            $(".category-b li").show();
            $(".all").show();
        }
//カテゴリーページの絞り込み
	$(".category li span").click(function() {
        var tags = $(this).attr('id');
        $(".category li span").removeClass('select').css({"border-left":"",
			"border-top":"",
			"border-bottom":"",
			"border-right":"",
			"background":"",
			"box-shadow":""});
        $(this).addClass('select');
        $('.select').css({"border-left":"1px solid #ca6262",
			"border-top":"3px solid #ca6262",
			"border-bottom":"1px solid #ca6262",
			"border-right":"1px solid #ca6262",
			"background":"#ea8282",
			"box-shadow":"0px 1px 3px 0px #ca6262 inset"});
        $(".category-a>p").hide();
        $(".category-b>p").hide();
        $(".category-a li").hide();
        $(".category-b li").hide();
        if(tags == 'tabe') {
            $(".tabe").show();
        } else if(tags == 'onsen') {
            $(".onsen").show();
        } else if(tags == 'rekisi') {
            $(".rekisi").show();
        } else if(tags == 'sizen') {
            $(".sizen").show();
        } else if(tags == 'maturi') {
            $(".maturi").show();
        } else if(tags == 'art') {
            $(".art").show();
        } else if(tags == 'leisure') {
            $(".leisure").show();
        } else if(tags == 'gourmet') {
            $(".gourmet").show();
        } else if(tags == 'basu') {
            $(".basu").show();
        } else if(tags == 'taiken') {
            $(".taiken").show();
        } else {
            $(".category-a li").show();
            $(".category-b li").show();
            $(".all").show();
        }
    });

    //スクロールトップ
     $(".shousai-back").click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

	});
