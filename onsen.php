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
      var target_top = target_offset.top-150;
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
			<h2>温泉</h2>
			<p>岩手は広大な自然と山々に囲まれた地形ゆえに<br>
				たくさんの温泉がいたるところにあります。<br>
				季節によってさまざまな楽しみかたもでき、シチュエーションもさまざま<br>
				岩手の温泉をゆっくりお楽しみください。</p>

			<div class="special-cate">
				<ul>
					<li><a href="#haru">春<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#natu">夏<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#aki">秋<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#huyu">冬<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#sityue-shon">シチュエーション<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
				</ul>
			</div>
		</div>
	</div>
			<img id="kisetu" class="special-img" src="img/onsen-10.jpg">
			<div class="special-con">
				<div>
					<p class="special-con-p">温泉は季節によっていろんな顔を見せてくれます。<br>
					四季折々の風情を感じながらお湯につかるのは最高です。</p>
					</div>
					<div>
					<h3 id="haru">春の温泉</h3>
<img class="special-img onsenno" src="img/haru.jpg">
					<p class="special-con-p">暖かな陽気になってきた3月以降も温泉旅行がオススメです。<br>露天風呂に浸かろうにも寒すぎる、ということもありませんし、<br>暖かな春の陽射しを感じながら温泉街を散策するにも最適です。</p>
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
				</div>
				<div>
				<h3 id="natu">夏の温泉</h3>
<img class="special-img onsenno" src="img/natu.jpg">
					<p class="special-con-p">温泉は寒い冬が最適なシーズンだと思っている方も多いのですが、<br>実は夏こそ温泉なんです！夏なら脱衣も少なくて済みますし、<br>湯気で浴室風情が台無しになることもありません。<br>さらには、夏こそ楽しめる温度の低めな温泉など</p>			
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
				</div>
				<div>
				<h3 id="aki">秋の温泉</h3>
<img class="special-img onsenno" src="img/aki.jpg">
					<p class="special-con-p">真っ赤に色づく紅葉を眺めながら温泉に浸かる、なんて秋の旅ならではの楽しみ方。<br>
この秋は赤や黄色に色づく美しい紅葉。<br>そして、秋ならではの旬の食材も味わってください。</p>
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>
				</div>
				<div>
				<h3 id="huyu">冬の温泉</h3>
<img class="special-img onsenno" src="img/huyu.jpg">
					<p class="special-con-p">冬といえば、温泉！
					温泉のいいところを楽しみ尽くせる季節ですね。<br>
					雪を見ながらの温泉なんてまさに最高！<br>
					体も心もポッカポカになっちゃて下さい！！
					</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="sityue-shon" src="img/on-10.jpg">
			<div class="special-con">
				<div>
					<h3>シチュエーション</h3>
					
<iframe class="iframe-img onsenno" src="https://www.youtube.com/embed/u1Ubc0K5tHU" frameborder="0" allowfullscreen></iframe>
<p class="special-con-p">
	これは岩手の観光PRように作られた動画です。<br>
	実際にこのような山奥でしか味わえない秘湯のようなところも数多く、<br>
	温泉ファンなら胸が高鳴ること間違いなし！<br>
</p>
<img class="special-img onsenno" src="img/daionsen.jpg">

					<p class="special-con-p">こちらは台温泉郷と言って古い建物や民家が<br>そのまま温泉宿をしたようなところがいっぱい！<br>そこだけ時間が止まったようなを感じ懐かしくも<br>暖かい気持ちにさせてくれるところです。</p>
				
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


