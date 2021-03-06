
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
      var target_top = target_offset.top;
      $('html, body').animate({scrollTop:target_top}, 500);
      });
    });
</script>
</head>

<body>
<?php require('header.php');?>
<div class="wrap" id="top">

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
			<h2>工芸品</h2>
			<p>岩手にはたくさんの工芸品があります。<br>
				とても身近なものであったり、こだわりの強いとても高価なもの<br>
				『これ岩手の名産なんだー！』と知らず知らずに触れているかもしれません。<br>
				その中でも特に有名な二つを紹介します。</p>

			<div class="special-cate">
				<ul>
					<li><a href="#nan">南部鉄器<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#hid">秀衡塗<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
				</ul>
			</div>
		</div>
	</div>
			<img id="nan" class="special-img" src="img/nanbu-t.jpg">
			<div class="special-con">
				<div>
					<h3>南部鉄器</h3>
					<p class="special-con-p">「南部鉄器」は岩手県盛岡市と奥州市水沢区で生産されている鉄器の総称です。<br>
旧南部領の盛岡と旧伊達領の水沢では、それぞれに異なる鋳物の歴史を持ちます。<br>
両産地では日本各地から呼びよせられた、鋳物師（いもじ）や茶釜職人達によって、<br>
鉄瓶、鍋、釜以外にも、梵鐘や仏像から燈籠や大砲まで、様々な鋳物の製造が行われていました</p>
<iframe class="iframe-img" src="https://player.vimeo.com/video/72805097?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p class="special-con-v"><a href="https://vimeo.com/72805097">東北STANDARD 05 岩手県 南部鉄器</a> from <a href="https://vimeo.com/tohokustandard">東北STANDARD</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
<img src="img/nanbuteki.jpg">
					<p class="special-con-p">南部鉄器は17世紀中頃、南部藩が盛岡市に京都から釜師を招いて茶の湯釜を作らせたのが始まりと言われています。<br>盛岡には古くから砂鉄などの良質な鉄資源に恵まれたことで、その頃から鉄器が製造されてきました。<br>
現在では様々な鉄器が製造されていますが、伝統工芸品の指定を受けた岩手県の盛岡市、<br>水沢市で作られているものが南部鉄器と称されています。機能性があり重厚で伝統的なものから、<br>時代の流れを受けモダンでカラフルなデザインも多く作られ、南部鉄器の可能性をさらに広げています。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="hid" src="img/hidehira.jpg">
			<div class="special-con">
				<div>
					<h3>秀衡塗</h3>
					<p class="special-con-p">「秀衡塗」の呼び名は中尊寺（平泉町）や、その周辺に伝わる「秀衡椀」がもととなります。<br>
藤原秀衡の時代に金色堂造営のために、京都から招いた工人達によってつくられた、<br>
豪華絢爛の金色の椀が「秀衡椀」の起源であると伝えられています。<br>
源氏雲や吉祥などの紋様に、菱形の金箔が施されたものが伝統的な意匠で、黒・朱・金が基調となっています。</p>
<iframe class="iframe-img" src="https://player.vimeo.com/video/74604524?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p class="special-con-v"><a href="https://vimeo.com/74604524">東北STANDARD 06 岩手県 秀衡塗</a> from <a href="https://vimeo.com/tohokustandard">東北STANDARD</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
		<img src="img/hidehiranuri.jpg">

					<p class="special-con-p">遠く平安の末期、奥州平泉に絢爛たる文化をもたらした藤原秀衡が京より職人を招来し、<br>
この地方特産の良質な漆と金をふんだんに使い、「器」を 造らせたのが起源とされています。<br>秀衡塗は幾多の歴史の変遷・興亡の中にあって、この土地の工人達によって造り継がれてきました。<br>
ふっくらと手になじみ雅趣に富む形体は、現代の生活にも調和して使う人の心をなごませるものがあります。<br>
昭和60年、伝統工芸品の指定も受け、歴史と伝統の中にその「技」と「美」は今も脈々と受け継がれています。</p>
				
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


