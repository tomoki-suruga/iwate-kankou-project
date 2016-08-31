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
			<h2>自然</h2>
			<p>緑豊かな大地、綺麗な海、広い空。<br>
			大自然がが織りなす感動！<br>
			岩手に来たら見逃せない絶景スポット</p>

			<div class="special-cate">
				<ul>
					<li><a href="#ryusendou">龍泉洞<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#geibikei">厳美渓<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#joudohama">浄土ヶ浜<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
				</ul>
			</div>
		</div>
	</div>
			<img id="ryusendou" class="special-img" src="img/Aonoizumi_gyokusendou_cave_okinawa.jpg">
			<div class="special-con">
				<div>
					<h3>龍泉洞</h3>
					<p class="special-con-p">盛岡市の北東部に位置する岩泉町。
全国的にも大変有名な、「龍泉洞」という鍾乳洞があります。

世界でも有数の透明度を誇る、地底湖の幻想的な美しさは圧巻！
国の天然記念物にも指定されています。</p>
<img  class="special-img" src="img/141099186295782402226_DSC_4978.jpg">

				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="geibikei" src="img/117192.jpg">
			<div class="special-con">
				<div>
					<h3>厳美渓</h3>
					<p class="special-con-p">岩手県一関市にある「厳美渓」は、奇岩やエメラルドグリーンの流れが美しい景勝地です。
栗駒山を水源とする渓谷で、「国の名勝天然記念物」に指定されています。

名物は、「郭公だんご」！
対岸の東屋から、ロープを伝ってお団子が下りてくることから、「空飛ぶ団子」と言われています。
楽しみにしている観光客も多いアクティビティです。。</p>
<img class="special-img" src="img/03209ab2040005413_3.jpg">

				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="joudohama" class="special-img" src="img/aflo_ZKUA006953.jpg">
			<div class="special-con">
				<div>
					<h3>浄土ヶ浜</h3>
					<p class="special-con-p">宮古市の有名な景勝地「浄土ヶ浜」。
白い岩でできた海岸線の美しさは、霊鏡和尚の「さながら極楽浄土のごとし」の言葉そのもの。

夏には、海水浴客で賑わっています。
遊覧船にのって、浄土ヶ浜近辺の三陸海岸を周遊するコースもおすすめです！</p>
<img class="special-img" src="img/d6d8a443d4bfcae165441678639f3484.jpg">

				
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


