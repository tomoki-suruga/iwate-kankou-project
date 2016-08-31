<?php
require('dbconnect.php');
$recodSet = mysqli_query($db,'SELECT * FROM event');
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Travel　Iwate</title>
<meta name="viewport" content="width=device-width">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/sanitize.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/kankou.js"></script>
<script type="text/javascript">
	    //スクロールしてトップ
  $(function() {
      $(".special-cate li a").click(function(event){
       event.preventDefault();
      var url = this.href;
      var parts = url.split("#");
      var target = parts[1];
      var target_offset = $("#"+target).offset();
      var target_top = target_offset.top-100;
      $('html, body').animate({scrollTop:target_top}, 500);
      });
    });
</script>
</head>

<body>
<?php require('header.php');?>
<div class="wrap">

		<div class="navi">

		<div class="wid-1">		<button type="button" id="menubtn"><i class="fa fa-bars" aria-hidden="true"></i><p>menu</p></button>
		<a class="tomo" href="index.php"><h1>TOMOnavi</h1></a>

		</div>
		</div>

<div class="wrap">
	<div class="wrap-event">
	<div class="top-img-2">
		<div class="special-all">
		<div class="special-top">
			<h2>歴史</h2>
			<p>岩手には世界遺産の中尊寺金色堂をはじめ、<br>
			多くの歴史的な遺産も残されており、<br>
			昔ながらの歴史、文化を感じられるスポットがたくさんあります。</p>

			<div class="special-cate">
				<ul>
					<li><a href="#konjiki">中尊寺金色堂<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#miyazawakenji">宮沢賢治<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#denderano">デンデラ野<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
				</ul>
			</div>
		</div>
	</div>
			<img id="konjiki" class="special-img" src="img/09_IMG_9174.jpg">
			<div class="special-con">
				<div>
					<h3>中尊寺金色堂</h3>
					<p class="special-con-p">世界遺産にも認定されている中尊寺金色堂。始まりは850年、比叡山延暦寺の僧である慈覚大師円仁によって開かれました。その後、中尊寺は12世紀になると、奥州藤原氏の庇護を得て荘厳なものへと変化していきます。</p>
<img  class="special-img" src="img/ns121a.jpg">
<p class="special-con-v">出典：<a href="http://trip-lovers.com/tohoku/iwate/gurume-3/wanko">東北lovers</a></p>
					<p class="special-con-p">美しい金色堂はもちろんですが、四季折々に変化する中尊寺の姿には多くの人が魅了されています。人々に愛される理由が何となく伝わってきますね。。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="miyazawakenji" src="img/f0159856_125665.jpg">
			<div class="special-con">
				<div>
					<h3>宮沢賢治</h3>
					<p class="special-con-p">岩手県を代表する作家・詩人である宮沢賢治。熱狂的なファンも存在する賢治の世界に浸ることができるのが、この宮沢賢治イーハトーブ館です。イーハトーブは宮沢賢治の造語の一つで、理想郷という意味を持っています。</p>
<img class="special-img" src="img/t10.jpg">

					<p class="special-con-p">近くには宮沢賢治記念館もありますので、併せてそちらも来館してみると良いかもしれませんね。宮沢賢治の作品をあまり知らない方も、素敵な作品と出会えるかもしれませんよ。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="denderano" class="special-img" src="img/DSC02713.JPG">
			<div class="special-con">
				<div>
					<h3>デンデラ野</h3>
					<p class="special-con-p">岩手県と言えば遠野物語の存在を欠かすことはできません。有名な民俗学者である柳田國男が岩手県出身の佐々木喜善を語り手に、昔話や民話・説話を集めたものが「遠野物語」です。その佐々木喜善の生家があった場所でもあるのがデンデラ野です。</p>
<img class="special-img" src="img/DSC04520.jpg">
					<p class="special-con-p">このデンデラ野は、60歳を迎えた老人たちが捨てられた場所であるという伝説も残されています。働けなくなった老人たちは、この場所で共同生活を送ったそうですよ。今では遠野遺産に選ばれ、当時の暮らしを再現した小屋などが作られています。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
	</div>

<p><a href="#" class="shousai-back">ページのTOPに戻る</a></p>
	</div>
</div>

<footer>
<?php require('footer.php');?>
</footer>
</div>
</body>
</html>


