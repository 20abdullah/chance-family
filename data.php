
<!DOCTYPE HTML>
<html>
<head>
<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="search-engien/search.css">
	<link rel="stylesheet" href="/card/style-card.css">
	
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="loding-svg/loading-home.html" class="logo"><strong style="background-color:transparent ;"><img
						style="width: 6em;height: 4em;" src="images/Chance.png"></strong></a>
			<div class="search__container">
				<form class="search-form" method="POST" action="data.php">
					<input class="search__input" type="text" placeholder="Search" name="search">
					<button type="submit"name="submit-search"><i class="fa-solid fa-magnifying-glass" 
							style="font-size: 1.8em ; width: 20px;color: rgba(0, 0, 0, 0.795);"></i></button>
				</form>
			</div>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="loding-svg/loading-home.html">Home</a></li>
				<li><a href="loding-svg/loading-material.html">material</a></li>
				<li><a href="loding-svg/loading-min game.html">Min-Game</a></li>
				<li><a href="loding-svg/loading-Upcoming Events.html">Upcoming Events</a></li>
				<li><a href="loding-svg/loading-about us.html">about us</a></li>
			</ul>
			<!-- <ul class="actions stacked">
					<li><a href="#" class="button primary fit">go to home</a></li>
				</ul> -->
		</nav>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>Data</h1>
					</header>
					<section class="data">
						<?php include ('contion.php');
If (isset($_POST['submit-search'])) {

$search = mysqli_real_escape_string($conn, $_POST['search']);

$sql = "SELECT * FROM `chance-base` WHERE title LIKE '%$search%' OR `description` LIKE '%$search%' OR `link-preview` LIKE '%$search%'  OR `link-download` LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

$queryResu1t = mysqli_num_rows($result);



?>
						<?php if ($queryResu1t > 0) {
							while ($row = mysqli_fetch_assoc($result)){
						?>
						<div class="data-1">
							<div class="embed">
							<embed src="<?php echo $row['link-preview']; ?>" loading="lazy">
														</div>
								<div class="icon-data">
								<a class="title" href="<?php echo $row['link-preview']; ?>"><?php echo $row['title']; ?></a>
							<div class="icon-data-1">
							<a href="<?php echo $row['link-preview']; ?>" target="--blank"><i class="fa-solid fa-eye" style="font-size: 0.8em;"></i></a>
							<a type="buttom" href="<?php echo $row['link-download']; ?>" download="" class="donwload"><i class="fa-solid fa-download"></i></a>
							</div>
						</div>
						</div>
						<?php }}}?>
					</section>
					<!-- Content -->

					<div class="inner">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field half">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" class="primary" /></li>
									<li><input type="reset" value="Clear" /></li>
								</ul>
							</form>
						</section>
						<section class="split">
							<section>
								<div class="contact-method">
									<span class="icon solid alt fa-envelope"></span>
									<h3>Email</h3>
									<a href="#"></a>
								</div>
							</section>
							<section>
								<div class="contact-method">
									<span class="icon solid alt fa-phone"></span>
									<h3>Phone</h3>
									<span></span>
								</div>
							</section>
							<section>
								<div class="contact-method">
									<span class="icon solid alt fa-home"></span>
									<h3>Address</h3>
									<span><br />
										<br />
									</span>
								</div>
							</section>
						</section>
					</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a>
						</li>
					</ul>
					<ul class="copyright">
						<li>&copy; chance</li>
					</ul>
				</div>
			</footer>

		</div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="/assets/js/pop.js"></script>

</body>

</html>