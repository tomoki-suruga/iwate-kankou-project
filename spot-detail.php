
<?php
$db = mysqli_connect('localhost','root','','tomonavi') or
die(mysql_connect_error());
mysqli_set_charset($db,'utf8');
	if(empty($_REQUEST['id'])){
		header('Location: index.php');
		exit();
		}
	$sql = sprintf('SELECT * FROM spot WHERE id=%d',
		mysqli_real_escape_string($db,$_REQUEST['id'])
	);
	
	$posts = mysqli_query($db,$sql) or die(mysqli_error($db));

	$recodSet = mysqli_query($db,'SELECT * FROM spot ORDER BY id DESC LIMIT 2');
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
		<a class="tomo" href="#"><h1>TOMOnavi</h1></a>

		</div>
		</div>


	
<div class="wrap"><div class="shousai-all">
	<div class="shousai">
		<p class="shousai-top">SPOTの詳細</p>
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
				<dl>
						<dt>住所</dt><dd><?php echo htmlspecialchars($post['address'],ENT_QUOTES,'UTF-8');?></dd>
						<dt>電話番号</dt><dd><?php echo htmlspecialchars($post['tel'],ENT_QUOTES,'UTF-8');?></dd>
						<dt>ホームページ</dt><dd><?php echo htmlspecialchars($post['hp'],ENT_QUOTES,'UTF-8');?></dd>
			</dl>
			
		</div>
			</div>
			<?php echo($post['map']);?>
	<?php endif;?>
		</div>
		<div class="shousai-more">
			<p class="shousai-more-p">関連スポット</p>
			<ul><?php while($table = mysqli_fetch_assoc($recodSet)){?>
				<li class="<?php echo htmlspecialchars($table['class'],ENT_QUOTES,'UTF-8');?>">

				<a href="spot-detail.php?id=<?php echo htmlspecialchars($table['id'],ENT_QUOTES,'UTF-8');?>">
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
<p><a href="spot.php" class="shousai-back">SPOT一覧に戻る</a></p>

	</div>

</div>

<footer>
<?php require('footer.php');?>
</footer>
</div>
</body>
</html>


