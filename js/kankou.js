
$(function(){

	 	if($(window).width()>768){
	 		$(".navi-ul-ul").addClass("active");
	 	}else{$(".navi-nav").hide();}

	 		$(".active").hide();
			$("#dropdown li").hover(function(){
				$(".active:not(:animated)",this).stop().slideDown("fast");
			},
			function(){
				$(".active",this).stop().slideUp("fast");
			});

		$(window).resize(function(){
			if($(window).width()>768){
				$(".navi-ul-ul").addClass("active");
				$(".active").hide();
				$(".navi-nav").show();
		}else{$(".navi-ul-ul").show();
			$(".navi-nav").hide();
			$(".navi-ul-ul").removeClass("active");
			}
		});

		$("#menubtn").click(function(){
			
			if($(".navi-nav").css("display")=="none"){
				$(".navi-nav").show();
			var wid=$(".navi-nav").width();
			var hi=$(".navi-nav").height();
				$(".wrap").css({
					'position':'absolute',
					'left':-wid,
					'height':hi,
					'overflow':'hidden'
				});
				//$(".navi").css("position","static");

		}else{
			$(".navi-nav").hide();
			$(".wrap").css({
					'position':'static',
					'left':'0px',
					'height':'auto',
					'overflow':'auto'
				});
		}
	});

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

	});
