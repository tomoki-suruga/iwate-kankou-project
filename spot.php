
<?php
$db = mysqli_connect('localhost','root','root','tomonavi') or
die(mysql_connect_error());
mysqli_set_charset($db,'utf8');
$recodSet = mysqli_query($db,'SELECT * FROM spot');
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
		<img src="img/spot_img.jpg">
		<div class="top-image-2-text">
		<p>SPOT</p>
		<p class="top-image-2-text-2">スポット情報</p>
		</div>
	</div>
	<!--<div class="jouken-kensaku">
		<ul>
			<li><a href="#">条件から検索</a>
				<div class="jouken">
					<form></form>
				</div>
			</li>
			<li><a href="#">MAPから検索</a>
				<div class="map-ken">
					<form></form>
				</div>

			</li>
		</ul>
	</div>-->
	<div class="category">
		<ul>
			<li>食べ物</li>
			<li>温泉、入浴施設</li>
			<li>歴史、文化</li>
			<li>自然</li>
			<li>全て</li>
		</ul>
	</div>
	<div class="wrap-event-1">
	<div class="category-a">
		<p>食べ物</p>
		<p>温泉、入浴施設</p>
		<p>歴史、文化</p>
		<p>自然</p>
		<p>全て</p>
		<ul>
			<?php while($date = mysqli_fetch_assoc($recodSet)){ ?>
			<li class="<?php echo $date['class'] ?>">
				
				<a href="spot=?<?php echo $date['id'] ?>">
					<img src="img/<?php echo $date['picture'] ?>"><p class="cat-title"><?php echo $date['name'] ?></p>
					<p class="cat-text"><?php echo $date['text'] ?></p>
					<p class="spot-more"><span>more</span></p>
				</a>

			</li>
		<?php	}?>
		</ul>
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

