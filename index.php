<?php
	include 'core/core.inc.php';
?>
<!doctype html>
<html lang="en">
	<head>
		<title><?php echo include_title();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="<?php echo include_title();?>" />
		<meta name="description" content="An opensource livecoding.tv"/>

		<!--Stylesheets-->
		<link rel="stylesheet" type="text/css" href="styles/main.css" />
	</head>
	<body>
		<div class="container">
			<!--Start titleBar-->
			<div class="titleBar">
				<div class="left">
					<span class="logo"><a href="index.php"><img alt="<?php echo include_title();?> Logo" src="assets/pics/logo.png" /></a></span>
				</div>
			<!--navBar-->
				<ul class="navBar">
					<li><a href="index.php?page=live">Live Streams</a></li> |
					<li><a href="index.php?page=video">Videos</a></li> |
					<li><a href="index.php?page=playlists">Playlists</a></li>
				</ul>
			</div>
			<!--End navBar-->
			<div class="content">
				<?php
					if(isset($_GET['page'])){
						if($_GET['page'] == 'live'){
							include 'content/live.php';
						}else if($_GET['page'] == 'video'){
							include 'content/video.php';
						}else if($_GET['page'] == 'playlists'){
							include 'content/playlists.php';
						}else{
							include 'content/standard.php';
						}
					}else{
						include 'content/standard.php';
					}
				?>
			</div>
			<div class="footer">
				<p class="copyright">Copyright &copy; 2015 David Green. Published under GPL 2.0. Code can be found <a href="https://github.com/pbcub1/OpenCode">here</a>.</p>
				<ul class="nav">
					<li><a href="index.php?page=live">Live Streams</a></li>
					<li><a href="index.php?page=video">Videos</a></li>
					<li><a href="index.php?page=playlists">Playlists</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>
