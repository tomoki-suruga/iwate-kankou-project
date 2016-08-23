
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

	});
