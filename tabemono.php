<?php
//$db = mysqli_connect('localhost','root','root','tomonavi') or
//die(mysql_connect_error());
//$recodSet = mysqli_query($db,'SELECT * FROM event');
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
	<div class="wrap1">

		<div class="navi-nav"><form action="#" methot="post">
			<input type="text" name="keyward" size="20" maxlength="20">
			<p><input type="submit" value="sarch" class="sousin"></p>
		</form>
			<nav>
				<ul id="dropdown" class="clearfix">
					<li><a href="#"><span class="navi-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</span><p class="navi-text">岩手を知る</p></a>
					<div class="navi-ul-ul">
						<ul>
							<li class="ul-text"><a href="#"><img src="img/1294.jpg"><p>岩手の魅力</p></a></li>
							<li class="ul-text"><a href="#"><img src="img/nan.jpg"><p>名産</p></a></li>
							<li class="ul-text"><a href="#"><img src="img/1a.jpg"><p>観光ガイド</p></a></li>
						</ul>
					</div>
					</li>

					<li><a href="#"><span class="navi-icon"><i class="fa fa-camera-retro" aria-hidden="true"></i>
					</span><p class="navi-text">岩手を楽しむ</p></a>
					<div class="navi-ul-ul">
						<ul>
							<li class="ul-text"><a href="#"><img src="img/Z-5.jpg"><p>特集</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/1a.jpg"><p>モデルコース</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/Y35.jpg"><p>温泉</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/t5.jpg"><p>食べ物</p></a></li>
						</ul>
					</div>
					</li>
					<li><a href="#"><span class="navi-icon"><i class="fa fa-search" aria-hidden="true"></i>
					</span><p class="navi-text">目的で探す</p></a>
					<div class="navi-ul-ul">
						<ul>

							<li class="ul-text"><a href="#"><img src="img/taue.jpg"><p>ツアー紹介</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/tanosimi.png"><p>スポット</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/431.jpg"><p>イベント</p></a></li>

						</ul>
					</div>

					</li>
					<li><a href="#"><span class="navi-icon"><i class="fa fa-car" aria-hidden="true"></i>
					</span><p class="navi-text">交通情報</p></a>
					<div class="navi-ul-ul">
						<ul>
							<li class="ul-text"><a href="#"><img src="img/500_10810709.jpg"><p>交通機関</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/map.jpg"><p>アクセスガイド</p></a></li>

							<li class="ul-text"><a href="#"><img src="img/4ff.jpg"><p>レンタカー</p></a></li>

						</ul>
					</div>

					</li>
					<li><a href="#"><span class="navi-icon"><i class="fa fa-folder-open" aria-hidden="true"></i>
					</span><p class="navi-text">その他ツール</p></a>
					<div class="navi-ul-ul">
						<ul>
							<li class="ul-text"><a href="#"><i class="fa fa-map-o" aria-hidden="true"></i><p>MAP&ROOT</p></a></li>
						</ul>
					</div>

					</li>
				</ul>
			</nav>

		</div>
	</div>
<div class="wrap">

		<div class="navi">

		<div class="wid-1">		<button type="button" id="menubtn"><i class="fa fa-bars" aria-hidden="true"></i><p>menu</p></button>
		<a class="tomo" href="#"><h1>TOMOnavi</h1></a>

		</div>
		</div>

<div class="wrap">
	<div class="wrap-event">
	<div class="top-img-2">
		<div class="special-all">
		<div class="special-top">
			<h2>特産物や郷土料理</h2>
			<p>岩手には何度も行きたくなる美味しさがいっぱい。<br>
				岩手でしか味わえないご当地ならでわの郷土料理。<br>
				広い大地を生かし、絶品の特産物<br>
				岩手の美味しさを堪能ください。</p>

			<div class="special-cate">
				<ul>
					<li><a href="#wanko">わんこそば<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#uni">雲丹・アワビ<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#re-men">盛岡冷麺<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
					<li><a href="#maesawa">前沢牛<br><i class="fa fa-chevron-down" aria-hidden="true"></i></a><li>
				</ul>
			</div>
		</div>
	</div>
			<img id="wanko" class="special-img" src="img/wanko.jpg">
			<div class="special-con">
				<div>
					<h3>わんこそば</h3>
					<p class="special-con-p">岩手伝統のエンターテイメントそばわんこそばとは岩手県（花巻、盛岡）に伝わる蕎麦（そば）の一つであります。
小さなお椀に少しだけ蕎麦を入れ、何度も何度もおかわりして食べ続けるという独特な “エンターテインメント蕎麦” であります。</p>
<img  class="special-img" src="img/wankosoba.jpg">
<p class="special-con-v">出典：<a href="http://trip-lovers.com/tohoku/iwate/gurume-3/wanko">東北lovers</a></p>
					<p class="special-con-p">「わんこ」とは方言で、おわんのことをいいます。  給仕さんの「それ、もう一杯」「ほら、じゃんじゃん」などのかけ声とともにおそばが次々とおわんに入れられます。  麺 そば屋によって多少の差がありますが、おおよそわんこ10杯がかけそば１杯分の目安です。 平均は女性の方で30～40杯、男性で50～60杯です。
そばの専門店が提供するわんこそばです。一人ひとりに給仕さんがつき、目の前に食べたおわんが積み重なっていく様子は圧巻です。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="uni" src="img/amatyan.jpg">
			<div class="special-con">
				<div>
					<h3>雲丹・アワビ</h3>
					<p class="special-con-p">岩手は雲丹・アワビに収穫量が全国トップクラス。岩手の海女さんをモチーフにしたＮＨＫ連続テレビ小説「あまちゃん」も
社会現象を巻き起こし、あまちゃんがびっくりしたときにいう「じぇじぇじぇ！」は流行語大賞を取ったのも記憶に新しいですね。</p>
<img class="special-img" src="img/uni.jpg">

					<p class="special-con-p">あわびは夏から秋にかけて産卵され、海底へ着底します。餌となるわかめやこんぶの生息状況や漁場環境にもよりますが、岩手県で漁獲サイズと定められている9cmを超えるには4～5年という長期間を要します。
　岩手では貴重な資源であるあわびを保護するため、さまざまな策が講じられています。例えば、沿岸の各漁協による種苗放流、餌となるわかめ・こんぶの給餌。また、岩手県漁協調整規則により定められている、漁が可能な期間(11月～翌年2月の4ヶ月間)を超えての漁獲は行いません。それだけではなく、例年1月と2月を自主的な禁漁期間とし、資源の保護と造成に努めています。人々の努力により、岩手県のあわび漁獲量は日本一を誇っています。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="re-men" class="special-img" src="img/reimen.jpg">
			<div class="special-con">
				<div>
					<h3>盛岡冷麺</h3>
					<p class="special-con-p">盛岡冷麺（もりおかれいめん）は、岩手県盛岡市の名物麺料理で辛味のある冷麺です。わんこそば、じゃじゃ麺と並んで「盛岡の三大麺」と称されています。一般的に「冷麺」というとこれを指す事が多く、主に焼肉店での定番として供されることが多いです。</p>
<img class="special-img" src="img/reimennoshasin.jpg">
					<p class="special-con-p">冷麺は当初、コシの強い麺を食べ慣れない盛岡の人たちから「ゴムのようでかみ切れない」と酷評されました。しかし次第に、「あの食感や味が忘れられない」「一度食べたらクセになる」と何度も店に足を運ぶ人たちも出始めました。盛岡冷麺の麺は、コシが強く、表面はツルッと喉ごしが良いのが特徴です。
一方、牛骨に鶏ガラを加えてだしをとるスープは、和食のだしにはない、コクや旨みがたっぷり。しかも冷たいスープなので、麺のコシの強さをいっそう堪能することができます。。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
			<img id="maesawa" src="img/maesawagyu.jpg">
			<div class="special-con">
				<div>
					<h3>前沢牛</h3>
					<p class="special-con-p">前沢牛は、日本三大和牛にも数えられる牛肉です。肉の芸術品にも例えられる極上の肉質は、前沢産の良質な稲わらや水のきれいな大地で育った干草、穀類を飼料として与えるとともに、ストレスをかけない環境づくりや１頭１頭愛情豊かに飼育することによって生み出されています</p>
		<img class="special-img" src="img/maesawano.jpg">

					<p class="special-con-p">前沢牛は、上質できめ細やかな霜降りで、肉質が抜群に良く、包丁を入れたときの肉のしっとり感がなんともいえない手ごたえなんです。
また、ロースに指を乗せると自然と沈んでいきます。これは脂の質がすばらしい証拠で、食したときに肉が溶けるようにやわらかく感じます。
前沢牛は香りもすばらしい。下味をして焼くと、上等なバターの香りがたちあがります。この瞬間は料理人として幸せを感じますね。
生産者の皆さんが丹精込めて育て上げた前沢牛、できるだけシンプルな味付けで素材そのものの風味を味わっていただきたいですね。</p>
				
				<p class="itiran"><a href="#">spot 一覧　<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>

				</div>
			</div>
	</div>


	</div>
</div>
	<div class="site-map">
	</div>
	<div class="copy-right">
		<a class="site-map-iwa" href="http://www.pref.iwate.jp/index.html"><img src="img/tlogo.gif"></a>
		<ul>
			<li><a href="#">お問い合わせ</a></li>
			<li><a href="#">TOMOnaviについて</a></li>
			<li><a href="#">サイトマップ</a></li>
			<li><a href="#">利用規約</a></li>
			<li><a href="#">プライバシーポリシー</a></li>
		</ul>
		<p class="copy">Copyright© 2016 TOMOnavi .</p>
	</div>

</div>

</div>
<footer>

</footer>

</body>
</html>


