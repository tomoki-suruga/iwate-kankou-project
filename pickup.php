
<?php
$db = mysqli_connect('localhost','root','root','tomonavi') or
die(mysql_connect_error());
mysqli_set_charset($db,'utf8');
	if(empty($_REQUEST['id'])){
		header('Location: index.php');
		exit();
		}
	$sql = sprintf('SELECT * FROM event WHERE id=%d',
		mysqli_real_escape_string($db,$_REQUEST['id'])
	);
	
	$posts = mysqli_query($db,$sql) or die(mysqli_error($db));

	$recodSet = mysqli_query($db,'SELECT * FROM event ORDER BY id DESC');
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


	
<div class="wrap"><div class="shousai-all">
	<div class="shousai">
		<p class="shousai-top">EVENTの詳細</p>
		<div class="shousai-content">
		<?php if($post = mysqli_fetch_assoc($posts)):?> 
			<div class="shousai-content-title">
				<h2><?php echo htmlspecialchars($post['name'],ENT_QUOTES,'UTF-8');?></h2>
				<p class="si"> <?php echo htmlspecialchars($post['add_si'],ENT_QUOTES,'UTF-8');?> </p>
				<p class="ki-wa-do"> <?php echo htmlspecialchars($post['keyword'],ENT_QUOTES,'UTF-8');?> </p>
			</div>
			<img src="img/<?php echo htmlspecialchars($post['picture'],ENT_QUOTES,'UTF-8');?>">
			<p><?php echo htmlspecialchars($post['text'],ENT_QUOTES,'UTF-8');?></p>
			<div class="information">
				<p>INFORMATION</p>
				<div class="table">
				<table>
					
					<tr class="table-top">
						<td>住所</td><td><?php echo htmlspecialchars($post['address'],ENT_QUOTES,'UTF-8');?></td>
					</tr>
					<tr>
						<td>電話番号</td><td><?php echo htmlspecialchars($post['tel'],ENT_QUOTES,'UTF-8');?></td>
					</tr>
					<tr>
						<td>ホームページ</td><td><?php echo htmlspecialchars($post['hp'],ENT_QUOTES,'UTF-8');?></td>
					</tr>
			</table>
			<?php echo htmlspecialchars($post['map'],ENT_QUOTES,'UTF-8');?>
		</div>
			</div>
	<?php endif;?>
		</div>
		<div class="shousai-more">
			<p class="shousai-more-p">関連スポット</p>
			<ul><?php while($table = mysqli_fetch_assoc($recodSet)){?>
				<li class="<?php echo htmlspecialchars($table['class'],ENT_QUOTES,'UTF-8');?>">

				<a href="spot=?<?php echo htmlspecialchars($table['id'],ENT_QUOTES,'UTF-8');?>">
					<img src="img/<?php echo htmlspecialchars($table['picture'],ENT_QUOTES,'UTF-8');?>">
					<p class="cat-title"><?php echo htmlspecialchars($table['name'],ENT_QUOTES,'UTF-8');?></p>
					<p class="cat-text"><?php echo htmlspecialchars($table['text'],ENT_QUOTES,'UTF-8');?></p>
					<p class="spot-more"><span>more</span></p>
				</a>

			</li>
			<?php }?>
			</ul>
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
</div>
<footer>

</footer>

</body>
</html>


