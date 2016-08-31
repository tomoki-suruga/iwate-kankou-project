
<?php
require('dbconnect.php');
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
			<li><span id="tabe">食べ物</span></li>
			<li><span id="onsen">温泉</span></li>
			<li><span id="rekisi">歴史、文化</span></li>
			<li><span id="sizen">自然</span></li>
			<li><span id="all">全て</span></li>
		</ul>
	</div>
	<div class="wrap-event-1">
	<div class="category-a">
		<p class="tabe tabu">食べ物</p>
		<p class="onsen tabu">温泉、入浴施設</p>
		<p class="rekisi tabu">歴史、文化</p>
		<p class="sizen tabu">自然</p>
		<p class="all">全て</p>
		<ul>
			<?php while($date = mysqli_fetch_assoc($recodSet)){ ?>
			<li class="<?php echo $date['class'] ?>">
				
				<a target="_blank" href="spot-detail.php?id=<?php echo $date['id'] ?>">
					<img src="img/<?php echo $date['picture'] ?>"><p class="cat-title"><?php echo $date['name'] ?></p>
					<p class="cat-text"><?php echo $date['text'] ?></p>
					<p class="spot-more"><span>more</span></p>
				</a>

			</li>
		<?php	}?>
		</ul>
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


