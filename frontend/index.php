	<?php
	require_once('../admin/connection.php');
	$frontend_part = new Connection();
	$frontend_part->connect();
	?>


	<!DOCTYPE HTML>
	<html>
	<head>
		<title>News Mag</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/news.slider.css">
		<link rel="stylesheet" type="text/css" href="assets/css/site.css">
		<link rel="stylesheet" type="text/css" href="assets/css/entertainment.css">
		<link rel="stylesheet" type="text/css" href="dist/css/slider-pro.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="libs/fancybox/jquery.fancybox.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/examples.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!-- <link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/owl.theme.default.css"> -->
			<style>
				.footer_part{
					/*background-color:red;*/
					padding: 30px 10px ;

				}
				.footer_part h1{
					border-bottom: 0;
					font-family: "Raleway", Helvetica, sans-serif;
					font-size:1.6em;
					font-weight:800;
					color: #000;
					letter-spacing: 0.25em;
					text-transform: uppercase;
				}
				.footer_part p{
					border-bottom: 0;
					margin: 0 0 5px 0;
					font-family: "Raleway", Helvetica, sans-serif;
					font-size:0.9em;
					font-weight:400;
					color: #000;
					letter-spacing: 0.25em;
					text-transform: uppercase;
				}

			</style>
		</head>
		<body>
			<!-- #3c3b3b -->
			<!-- 2ebaae -->
			<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Header -->
				<header id="header">
					<h1><a href="#">NEWSMAG</a></h1>
					<nav class="links">
						<ul>
							<li><a href="#">Worldnews</a></li>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Tech</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Movies</a></li>
							<li><a href="#">Entertainment</a></li>
							<li><a href="#">Culture</a></li>
							<li><a href="#">Books</a></li>
						</ul>
					</nav>
					<nav class="main">
						<ul>
							<li class="search">
								<a class="fa-search" href="#search">Search</a>
								<form id="search" method="get" action="search.php">
									<input type="text" name="searchText" placeholder="Search" />
								</form>
							</li>
							<li class="menu">
								<a class="fa-bars" href="#menu">Menu</a>
							</li>
						</ul>
					</nav>
				</header>


				<!-- Menu -->
				<section id="menu">

					<!-- Search -->
					<section>
						<form class="search" method="get" action="#">
							<input type="text" name="query" placeholder="Search" />
						</form>
					</section>

					<!-- Links -->
					<section>
						<ul class="links">
							<li>
								<a href="#">
									<h3>Worldnews</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Sport</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Tech</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Business</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Movies</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Entertainment</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h3>Culture</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
							<li style="padding-bottom: 15px;">
								<a href="#">
									<h3>Books</h3>
									<p>Lorem ipsum dolor amet</p>
								</a>
							</li>
						</ul>
					</section>

				</section>

							<!-- <div class="container">
								<div class="row">
									<div class="col-md-4" style="background: red; z-index: 100;"> -->

									<!-- </div>
									<div class="col-md-4" style="background: green; z-index: 100;">jlahsdjk</div>
								</div>
							</div> -->

							<!-- Main -->
							<div id="main">
								<section>
									<!-- carousel -->
									<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
										<div class="carousel-inner">
											<?php
											$carousel_part =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='carousels' ORDER BY `id` DESC");

											while($slider = $carousel_part->fetch(PDO::FETCH_ASSOC)){
												$c=1;
												$carousel_id = $slider['id'];

												?>
												<div class="item active" style="background-image: url(../admin/assets/img/<?php echo $slider['media']?>)">
													<div class="caption">
														<h1 class="animated fadeInLeftBig"><?php echo substr($slider['title'],0,15);?></h1>
														<p class="animated fadeInRightBig yo"><?php echo substr($slider['description'],0,20);?></p>
														<a data-scroll class="btn btn-start animated fadeInUpBig" href="../admin/single.php?id=<?php echo $slider['id']; ?>">Read more</a>
													</div>
												</div>
												<?php
												$c++;
												if($c==2){
													break;
												}
											}
											?>
											<?php
											$carousel_parts =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='carousels' AND id!=$carousel_id ORDER BY `id` DESC");
											$v=1;

											while($sliders = $carousel_parts->fetch(PDO::FETCH_ASSOC)){?>
											<div class="item" style="background-image: url(../admin/assets/img/<?php echo $sliders['media']?>)">
												<div class="caption">
													<h1 class="animated fadeInLeftBig"><?php echo substr($sliders['title'],0,15);?></h1>
													<p class="animated fadeInRightBig yo"><?php echo substr($sliders['description'],0,20);?></p>
													<a data-scroll class="btn btn-start animated fadeInUpBig" href="../admin/single.php?id=<?php echo $sliders['id']; ?>">Read more</a>
												</div>
											</div>
											<?php
											$v++;
											if($v==4){
												break;
											}

										}
										?>
									</div>
									<a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
									<a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
								</div><!--/carousel-slider-->
							</section>

							<!-- Post -->
							<?php
							$myquery=$frontend_part::$con->query("SELECT * FROM news WHERE `category`='topnews' ORDER BY `id` DESC");
							$x=1;
							while($row = $myquery->fetch(PDO::FETCH_ASSOC)){

									 // if($row['category'] == ){

								?>
								<article class="post">
									<header>
										<div class="title">
											<h2><a href="../admin/single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a></h2>
											<p><?php echo substr($row['title'],0,80);?></p>
										</div>
										<div class="meta">
											<time class="published" datetime="2015-11-01">November 1, 2015</time>
											<a href="#" class="author"><span class="name">ajay kawan</span><img src="images/avatar.jpg" alt="" /></a>
										</div>
									</header>
									<a href="../admin/single.php?id=<?php echo $row['id']; ?>" class="image featured"><img src="../admin/assets/img/<?php echo $row['media'];?>" alt="" /></a>
									<p><?php echo substr($row['description'],0,750);?></p>
									<footer>
										<ul class="actions">
											<li><a href="../admin/single.php?id=<?php echo $row['id']; ?>" class="button big">Continue Reading</a></li>
										</ul>
										<ul class="stats">
											<li><a href="#">General</a></li>
											<li><a href="#" class="icon fa-heart">28</a></li>
											<li><a href="#" class="icon fa-comment">128</a></li>
										</ul>
									</footer>
								</article>
								<?php
								$x++;
									// }
								if($x==4){
									break;
								}
							}


							?>


							<!-- kkk -->
							<div class="border">
								<div class="accordian">

									<ul>
										<?php
										$style=$frontend_part::$con->query('SELECT * FROM news WHERE `category`=`category` ORDER BY `id` DESC');
										$y=1;
										while($data = $style->fetch(PDO::FETCH_ASSOC)){
											if($data['category'] == 'style'){
												?>
												<li>
													<div class="image_title">
														<a href="../admin/single.php?id=<?php echo $data['id']; ?>">The Sherrif's </a>
														<p>The Sherrif's department has put out an APB on these trucks. You know, this is the kind of thing that only happens in small towns.</p>
													</div>
													<a href="../admin/single.php?id=<?php echo $data['id']; ?>">
														<img src="../admin/assets/img/<?php echo $data['media'];?>"/>
													</a>
												</li>
												<?php
												$y++;
											}
											if($y==6){
												break;
											}
										}
										?>
									</ul>
								</div>

							</div>

							<section id="#">
								<header>
									<h2 style="float: left;">BUSINESS</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>

							<div class="row">
								<div class="col-md-8">
									<?php
									$Business=$frontend_part::$con->query("SELECT * FROM news WHERE `category`='busniess' ORDER BY `id` DESC");
									$n=1;
									while($datas = $Business->fetch(PDO::FETCH_ASSOC)){
										$b_id=$datas['id'];
										?>
										<article class="post">
											<header>
												<div class="title">
													<h2><a href="../admin/single.php?id=<?php echo $datas['id']; ?>"><?php echo substr($datas['title'],0,45); ?></a></h2>
													<p><?php echo substr($datas['description'],0,70); ?></p>
												</div>
											</header>
											<a href="../admin/single.php?id=<?php echo $datas['id']; ?>" class="image featured"><img src="../admin/assets/img/<?php echo $datas['media'];?>" alt="" /></a>
											<p><?php echo substr($datas['description'],0,250); ?>...</p>
											<footer>
												<ul class="actions">
													<li><a href="../admin/single.php?id=<?php echo $datas['id']; ?>" class="button big">Continue Reading</a></li>
												</ul>
												<ul class="stats">
													<li><a href="#">General</a></li>
													<li><a href="#" class="icon fa-heart">28</a></li>
													<li><a href="#" class="icon fa-comment">128</a></li>
												</ul>

											</footer>
										</article>
										<?php
										$n++;
										if ($n==2) {
											break;
										}
									}
									?>
								</div>
								<div class="col-md-4">
									<?php
									$Businessu=$frontend_part::$con->query("SELECT * FROM news WHERE `category`='busniess' AND id!='".$b_id."' ORDER BY `id` DESC");
									$p=1;
									while($datau = $Businessu->fetch(PDO::FETCH_ASSOC)){
										$bs_id=$datau['id'];

										?>
										<article class="mini-post">
											<header>
												<h2><a href="../admin/single.php?id=<?php echo $datau['id']; ?>"><?php echo substr($datau['title'],0,17); ?></a></h2>
												<p class="published long"><?php echo substr($datau['description'],0,50); ?>....</p>
											</header>

											<a href="../admin/single.php?id=<?php echo $datau['id']; ?>" class="image"><img src="../admin/assets/img/<?php echo $datau['media'];?>" alt="" /></a>
										</article>
										<?php
										$p++;
										if ($p==3) {
											break;
										}
									}
									?>

									<?php
									$Businessus=$frontend_part::$con->query("SELECT * FROM news WHERE `category`='busniess' AND id!='".$bs_id."' ORDER BY `id` DESC");
									$o=1;
									while($data = $Businessus->fetch(PDO::FETCH_ASSOC)){


										?>

										<article class="mini-post">
											<header >
												<h2><a href="../admin/single.php?id=<?php echo $data['id']; ?>"><?php echo substr($data['title'],0,10); ?></a></h2>
												<p class="published long"><?php echo substr($data['description'],0,50); ?>....</p>
											</header>
										</article>
										<?php
										$o++;
										if ($o==2) {
											break;
										}
									}
									?>
								</div>
							</div>
							<!-- sport -->
							<section id="#">
								<header>
									<h2 style="float: left;">SPORTS</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>
							<!-- travel -->
							<div class="row">
								<div class="col-md-12">
									<?php
									$sport=$frontend_part::$con->query('SELECT * FROM news WHERE `category`=`category` ORDER BY `id` DESC');
									$x=1;
									while($sportval = $sport->fetch(PDO::FETCH_ASSOC)){
										if($sportval['category'] == 'sport'){
											?>
											<div class="col-md-4">
												<article class="mini-post">
													<header>
														<h2><a href="../admin/single.php?id=<?php echo $sportval['id']; ?>"><?php echo substr($sportval['title'],0,25);?></a></h2>
														<p class="published long"><?php echo substr($sportval['description'],0,70);?>....</p>
													</header>

													<a href="../admin/single.php?id=<?php echo $sportval['id']; ?>" class="image"><img src="../admin/assets/img/<?php echo $sportval['media'];?>" alt="" /></a>
												</article>
											</div>
											<?php
											$x++;
										}
										if($x==7){
											break;
										}
									}
									?>
								</div>

							</div> <!-- end of travel -->

							<!-- Fashion -->
							<section id="#" cla>
								<header>
									<h2 style="float: left;">FASHION</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>

							<div class="row">
								<div class="col-md-6">
									<?php
									$fashion =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='fashion' ORDER BY `id` DESC LIMIT 2");
	                            //  $fashionincr = 1;
									while($fashionblog = $fashion->fetch(PDO::FETCH_ASSOC)){
	                            //  $firstid = $fashionblog['id'];
										?>
										<article class="post">
											<a href="../admin/single.php?id=<?php echo $fashionblog['id']; ?>" class="image featured"><img src="../admin/assets/img/<?php echo $fashionblog['media'];?>" alt="" /></a>
											<p<?php echo substr($fashionblog['description'],0,300);?>....</p>
											<footer>
												<ul class="actions" style="height: 0px; padding: 30px 0px">
													<li><a href="../admin/single.php?id=<?php echo $fashionblog['id']; ?>" class="button big">Continue Reading</a></li>
												</ul>
											</footer>
										</article>
										<?php
									// $fashionincr++;
									// if($fashionincr==3){
									// 	break;
									// }
									}
									?>
									<!-- <article class="post">
										<a href="#" class="image featured"><img src="http://4.bp.blogspot.com/-G8KpjvsQrUI/VZDtBxP9xxI/AAAAAAAAKq8/Fbfs8Kxrw_M/s1600/fasion_autumn-fire_101K.jpg" alt="" /></a>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
										<footer>
											<ul class="actions">
												<li><a href="#" class="button big">Continue Reading</a></li>
											</ul>
										</footer>
									</article> -->
									<?php
									$fashionsec =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='fashion'  ORDER BY `id` DESC LIMIT 1 OFFSET 2");
									while($fashionblogsec = $fashionsec->fetch(PDO::FETCH_ASSOC)){

										?>
										<article class="mini-post">
											<header>
												<h2><a href="../admin/single.php?id=<?php echo $fashionblogsec['id']; ?>"><?php echo $fashionblogsec['title'];?></a></h2>
												<p class="published"><?php echo substr($fashionblogsec['description'],0,100);?>....</p>
											</header>

											<a href="../admin/single.php?id=<?php echo $fashionblogsec['id']; ?>" class="image"><img src="../admin/assets/img/<?php echo $fashionblogsec['media'];?>" alt="" /></a>
										</article>
										<?php
									// $fashionincrs++;
									// if($fashionincrs==2){
									// 	break;
									// }
									}
									?>
								</div>
								<div class="col-md-6">
									<?php
									$fashionthi =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='fashion' ORDER BY `id` DESC LIMIT 2 OFFSET 3");
									while($fashionblogthi = $fashionthi->fetch(PDO::FETCH_ASSOC)){
										?>
										<article class="mini-post">
											<header>
												<h2><a href="../admin/single.php?id=<?php echo $fashionblogthi['id']; ?>"><?php echo $fashionblogthi['title'];?></a></h2>
												<p class="published"><?php echo substr($fashionblogthi['description'],0,100);?>....</p>
											</header>

											<a href="../admin/single.php?id=<?php echo $fashionblogthi['id']; ?>" class="image"><img src="../admin/assets/img/<?php echo $fashionblogthi['media'];?>" alt="" /></a>
										</article>
										<?php
									}
									?>
									<?php
									$fashionfou =$frontend_part::$con->query("SELECT * FROM news WHERE `category`='fashion' ORDER BY `id` DESC LIMIT 1 OFFSET 5");
									while($fashionblogfour = $fashionfou->fetch(PDO::FETCH_ASSOC)){
										?>
										<article class="post">
											<a href="../admin/single.php?id=<?php echo $fashionblogfour['id']; ?>" class="image featured"><img src="../admin/assets/img/<?php echo $fashionblogfour['media'];?>" alt="" /></a>
											<p<?php echo substr($fashionblogfour['description'],0,300);?>....</p>
											<footer>
												<ul class="actions" style="height: 0px; padding: 30px 0px">
													<li><a href="../admin/single.php?id=<?php echo $fashionblogfour['id']; ?>" class="button big">Continue Reading</a></li>
												</ul>
											</footer>
										</article>
										<?php
									}
									?>


								</div>
							</div>

							<!-- entertainment -->
							<section id="#">
								<header>
									<h2 style="float: left;">ENTERTAINMENT</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>
							<div class="clearfix"></div>

							<div class="row" style="margin-bottom: 50px;">
								<div class="col-md-6">
									<div class="news-holder cf">

										<ul class="news-headlines">
											<?php
											$entertainment = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='enter' ORDER BY `id` DESC");
											$list = 1;
											while($listdata = $entertainment->fetch(PDO::FETCH_ASSOC)){
												$listids = $listdata['id'];


												?>
												<li class="selected"><?php echo $listdata['title'];?></li>
												<?php
												$list++;
												if($list==2){
													break;
												}
											}
											?>


											<?php
											$entertainments = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='enter' AND `id`!='".$listids."' ORDER BY `id` DESC");
											$list2 = 1;
											while($listdatas = $entertainments->fetch(PDO::FETCH_ASSOC)){
												$listid2 = $listdatas['id'];


												?>
												<li><?php echo $listdatas['title'];?></li>

												<?php
												$list2++;
												if($list2==6){
													break;
												}
											}

											?>
											<!-- li.highlight gets inserted here -->
										</ul>

										<div class="news-preview">
											<?php
											$entertainment_contain = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='enter' ORDER BY `id` DESC");
											$containlist = 1;
											while($containdata = $entertainment_contain->fetch(PDO::FETCH_ASSOC)){



												?>

												<div class="news-content top-content">
													<img src="../admin/assets/img/<?php echo $containdata['media'];?>">
													<p><a href="../admin/single.php?id=<?php echo $containdata['id']; ?>"><?php echo $containdata['title'];?></a></p>

													<p><?php echo $containdata['description'];?></p>
												</div><!-- .news-content -->
												<?php
												$containlist++;
												if($containlist==7){
													break;
												}
											}
											?>

										</div><!-- .news-preview -->

									</div><!-- .news-holder -->
								</div>
								<div class="col-md-6">
									<div class="panel panel-default">
										<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-12">
													<ul class="demo2">
														<?php
														$entertainment_contain_list = $frontend_part::$con->query("SELECT * FROM news WHERE `user`='enter' ORDER BY `id` DESC");
														$contain_list = 1;
														while($containdata_list = $entertainment_contain_list->fetch(PDO::FETCH_ASSOC)){



															?>
															<li class="news-item"><h3><?php echo $containdata_list['title'];?></h3><?php echo $containdata_list['description'];?><a href="../admin/single.php?id=<?php echo $containdata_list['id']; ?>">Read more...</a></li>
															<?php
															$contain_list++;
															if($contain_list==5){
																break;
															}
														}
														?>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- movie -->
							<section id="#">
								<header>
									<h2 style="float: left;">MOVIES</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>
							<div class="row" style="margin-bottom: 50px; ">
								<div class="col-md-12">
									<div id="myCarousel" class="carousel slide" data-ride="carousel">

										<!-- Wrapper for slides -->
										<div class="carousel-inner">

											<?php
											$movie = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='movie' ORDER BY `id` DESC");
											$movie_list = 1;
											while($moviedata = $movie->fetch(PDO::FETCH_ASSOC)){



												?>
												<div class="item">
													<img src="../admin/assets/img/<?php echo $moviedata['media'];?>">
													<div class="carousel-caption">
														<h4><a href="../admin/single.php?id=<?php echo $moviedata['id']; ?>"><?php echo $moviedata['title'];?></a></h4>
														<p><?php echo substr($moviedata['description'],0,200);?>....</p>
													</div>
												</div><!-- End Item -->

												<?php
												$movie_list++;
												if($movie_list==6){
													break;
												}
											}
											?>


										</div><!-- End Carousel Inner -->


										<ul class="list-group col-sm-4">
											<?php
											$movie_list = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='movie' ORDER BY `id` DESC");
											$movie_lists =1;
											$cnt = 0;
											while($moviedatas = $movie_list->fetch(PDO::FETCH_ASSOC)){
												$cnt+=1;


												?>
												<li data-target="#myCarousel" data-slide-to="<?php echo ($cnt-1); ?>" class="list-group-item"><h4><?php echo $moviedatas['title'];?></h4></li>
												<?php
												$movie_lists++;
												if($movie_lists==6){
													break;
												}
											}
											?>
										</ul>

										<!-- Controls -->
										<div class="carousel-controls">
											<a class="left carousel-control" href="#myCarousel" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>
											</a>
											<a class="right carousel-control" href="#myCarousel" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>
											</a>
										</div>

									</div>
								</div>
							</div>


							<!-- sport -->
							<section id="#">
								<header>
									<h2 style="float: left;">Books</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>
							<!-- travel -->
							<div class="row">
								<div class="col-md-12">
									<?php
									$book=$frontend_part::$con->query('SELECT * FROM news WHERE `category`=`category` ORDER BY `id` DESC');
									$bo=1;
									while($bookval = $book->fetch(PDO::FETCH_ASSOC)){
										if($bookval['category'] == 'book'){
											?>
											<div class="col-md-4">
												<article class="mini-post">
													<header>
														<h2><a href="../admin/single.php?id=<?php echo $bookval['id']; ?>"><?php echo substr($bookval['title'],0,25);?></a></h2>
														<p class="published long"><?php echo substr($bookval['description'],0,70);?>....</p>
													</header>

													<a href="../admin/single.php?id=<?php echo $bookval['id']; ?>" class="image"><img src="../admin/assets/img/<?php echo $bookval['media'];?>" alt="" /></a>
												</article>
											</div>
											<?php
											$bo++;
										}
										if($bo==7){
											break;
										}
									}
									?>
								</div>

							</div> <!-- end of travel -->

							<!-- new slider -->
							<section id="#">
								<header>
									<h2 style="float: left;">CULTURE</h2>
									<h2 style="float: right;">View more <i class="fa fa-arrow-right" aria-hidden="true"></i></h2>
								</header>
							</section>
							<div class="clearfix"></div>
							<div class="row">
								<div class="col-md-12">
									<div id="example4" class="slider-pro">
										<div class="sp-slides">
											<div class="sp-slide">
												<div class="sp-layer sp-static" data-horizontal="30" data-vertical="30">
													<a class="sp-video" href="//www.youtube.com/watch?v=oaDkph9yQBs&controls=0">
														<img src="http://bqworks.com/slider-pro/images/nasa_video_poster.jpg" width="610" height="345"/>
													</a>
												</div>

												<div class="sp-layer sp-static texts" data-position="topRight" data-horizontal="30" data-vertical="30" data-width="240">
													<h3>Lorem ipsum dolor sit amet</h3>
													<p>consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam.</p>
												</div>
											</div>

											<div class="sp-slide">
												<div class="sp-layer sp-static" data-horizontal="30" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image1_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image1_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Lorem ipsum</h3>
													<p>Dolor sit amet, consectetur adipiscing</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="260" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image2_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image2_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Do eiusmod</h3>
													<p>Tempor incididunt ut labore et dolore magna</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="490" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image3_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image3_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Ut enim</h3>
													<p>Ad minim veniam, quis nostrud exercitation</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="720" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image4_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image4_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Ullamco oris</h3>
													<p>Nisi ut aliquip ex ea commodo consequat</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="30" data-vertical="300" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image5_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image5_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Duis aute</h3>
													<p>Irure dolor in reprehenderit</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="260" data-vertical="300" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image6_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image6_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Esse cillum</h3>
													<p>Dolore eu fugiat nulla pariatur excepteur</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="490" data-vertical="300" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image7_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image7_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Sint occaecat</h3>
													<p>Cupidatat non proident, sunt in culpa</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="720" data-vertical="300" data-width="200">
													<div class="sp-image-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image8_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image8_thumbnail.jpg"/>
														</a>
													</div>
													<h3>Deserunt</h3>
													<p>Mollit anim id est laborum sed ut</p>
												</div>
											</div>

											<div class="sp-slide">
												<img class="sp-image" src="../src/css/images/blank.gif"
												data-src="http://bqworks.com/slider-pro/images/image3_medium.jpg"
												data-retina="http://bqworks.com/slider-pro/images/image3_large.jpg"/>

												<div class="sp-layer sp-static sp-image-text texts" data-horizontal="30" data-vertical="30" data-width="350">
													<h3>Lorem ipsum dolor sit amet</h3>
													<p>consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
												</div>
											</div>

											<div class="sp-slide">
												<div class="sp-layer sp-static texts" data-position="topLeft" data-horizontal="30" data-vertical="30" data-width="430">
													<h3>Lorem ipsum dolor sit amet</h3>
													<p>consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
												</div>

												<div class="sp-layer sp-static" data-horizontal="500" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image1_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image1_thumbnail.jpg"/>
														</a>
													</div>
												</div>

												<div class="sp-layer sp-static" data-horizontal="730" data-vertical="30" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image2_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image2_thumbnail.jpg"/>
														</a>
													</div>
												</div>

												<div class="sp-layer sp-static" data-horizontal="500" data-vertical="190" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image3_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image3_thumbnail.jpg"/>
														</a>
													</div>
												</div>

												<div class="sp-layer sp-static" data-horizontal="730" data-vertical="190" data-width="200">
													<div class="sp-thumbnail-container">
														<a class="sp-lightbox" href="http://bqworks.com/slider-pro/images/image4_large.jpg">
															<img src="http://bqworks.com/slider-pro/images/image4_thumbnail.jpg"/>
														</a>
													</div>
												</div>
											</div>

											<div class="sp-slide">
												<div class="sp-layer sp-static">
													<a class="sp-video" href="//www.youtube.com/watch?v=oaDkph9yQBs">
														<img src="http://bqworks.com/slider-pro/images/nasa_video_poster_big.jpg" width="960" height="526"/>
													</a>
												</div>
											</div>

											<div class="sp-slide">
												<div class="sp-layer sp-static texts" data-horizontal="30" data-vertical="30" data-width="900">
													<h3>Lorem ipsum dolor sit amet</h3>
													<p>consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>





							<!-- Pagination  -->
							<!-- <ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul> -->

						</div> <!-- end -->

						<!-- Sidebar -->
						<section id="sidebar">
							<article class="mini-post">
								<header>
									<h3><a href="#">LOREM IPSUM DOLOR AMET</a></h3>
									<time class="published" datetime="2015-10-20">October 20, 2015</time>
									<a href="#" class="author fb"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
								</header>
								<a href="#" class="image"><img src="images/fb.jpg" alt="" /></a>
							</article>
							<!--  EMAIL NEWSLETTER -->
							<article class="mini-post">
								<header>
									<h2><a href="#">EMAIL NEWSLETTER</a></h2>
									<p class="published">Subscribe to receive inspiration, ideas, and news in your inbox</p>
								</header>
								<header>
									<div class="form-group">
										<div class="input-group">
											<input class="form-control" type="text" name="search" placeholder="Search"  required/>
											<span class="input-group-btn">
												<button class="btn btn-success" type="submit" style="height: 39px;"><span style="margin-left:10px; font-size: 10px;font-weight: bold;">Subscribe</span></button>
											</span>
										</span>
									</div>
								</div>
							</header>
						</article>

						<!-- advertisement -->
						<article class="mini-post" style="background: transparent; border:none;">
							<?php
							$add = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='advertisement' ORDER BY `id` DESC LIMIT 1");
							while($adddata = $add->fetch(PDO::FETCH_ASSOC)){
								?>
								<a href="#" class="image"><img src="../admin/assets/img/<?php echo $adddata['media'];?>" alt="" /></a>
								<?php
							}
							?>
						</article>

						<!-- social link -->
						<article class="mini-post">

							<div class='social-links'>
								<a class='fa fa-dribbble social_links' href='#' title='dribbble'></a>
								<a class='fa fa-flickr social_links' href='#' title='flickr'></a>
								<a class='fa fa-dropbox social_links' href='#' title='dropbox'></a>
								<a class='fa fa-github social_links' href='#' title='github'></a>
								<a class='fa fa-twitter social_links' href='#' title='twitter'></a>
								<a class='fa fa-tumblr social_links' href='#' title='tumblr'></a>
								<a class='fa fa-pinterest social_links' href='#' title='pinterest'></a>
								<a class='fa fa-instagram social_links' href='#' title='instagram'></a>
								<a class='fa fa-skype social_links' href='#' title='skype'></a>
							</div>
							<header>
								<h2><a href="#">Social links</a></h2>
								<p class="published">Subscribe to receive inspiration, ideas, and news in your inbox</p>
							</header>
						</article>

						<!-- hot news -->
						<article class="mini-post">
							<div id="slider">
								<ul>
									<?php
									$hotnews = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='hotnews' ORDER BY `id` DESC LIMIT 4");
									while($hotnewsdata = $hotnews->fetch(PDO::FETCH_ASSOC)){
										?>
										<li>
											<div class="slider-container">
												<h4><a href="../admin/single.php?id=<?php echo $hotnewsdata['id']; ?>"><?php echo substr($hotnewsdata['title'],0,25);?></a></h4>
												<p><?php echo substr($hotnewsdata['description'],0,350);?>....</p>
											</div>
										</li>
										<?php
									}
									?>
								</ul>
							</div>
							<header><h2><a href="#">Hot news</a></h2></header>


						</article>
						<!-- advertisement2 -->
						<article class="mini-post" style="background: transparent; border:none;">
							<?php
							$addsec = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='advertisement' ORDER BY `id` DESC LIMIT 1 OFFSET 1");
							while($adddatasec = $addsec->fetch(PDO::FETCH_ASSOC)){
								?>
								<a href="#" class="image"><img src="../admin/assets/img/<?php echo $adddatasec['media'];?>" alt="" /></a>
								<?php
							}
							?>
						</article>

						<!-- Accordian -->
						<article class="mini-post" >
							<dl class="accordion">

								<dt><a href="">Recent <i class="fa fa-level-down" aria-hidden="true"></i></a></dt>
								<dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>
							</dt>

							<dt><a href="">Popular <i class="fa fa-level-down" aria-hidden="true"></i></a></dt>
							<dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</dd>


							<dt><a href="">Year popular <i class="fa fa-level-down" aria-hidden="true"></i></a></dt>
							<dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>

						</dl>
						<header><h2><a href="#">You may also like</a></h2></header>
					</article>


					<!-- Intro -->
					<section id="#">
						<header>
							<h2> WEEK TRENDING</h2>
							<p>LOREM IPSUM DOLOR AMET NULLAM CONSEQUA</a></p>
						</header>
					</section>

					<!-- Mini Posts -->
					<section>
						<div class="mini-posts">
							<?php
							$trending = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='trending' ORDER BY `id` DESC LIMIT 3");
							while($trendingdata = $trending->fetch(PDO::FETCH_ASSOC)){
								?>
								<!-- Mini Post -->
								<article class="mini-post">
									<header>
										<h2><a href="../admin/single.php?id=<?php echo $trendingdata['id']; ?>"><?php echo substr($trendingdata['title'],0,20);?></a></h2>
										<p class="published"><?php echo substr($trendingdata['description'],0,80);?></p>
									</header>

									<a href="#" class="image"><img src="../admin/assets/img/<?php echo $trendingdata['media'];?>" alt="" /></a>
								</article>
								<?php
							} ?>
						</div>
					</section>

					<!-- Posts List -->

					<!-- Intro -->
					<section id="#">
						<header>
							<h2> POPURAL TRENDING</h2>
							<p>LOREM IPSUM DOLOR AMET NULLAM CONSEQUA</a></p>
						</header>
					</section>
					<ul class="posts">
						<?php
						$populartrending = $frontend_part::$con->query("SELECT * FROM news WHERE `category`='populartrending' ORDER BY `id` DESC LIMIT 5");
						while($populartrendingdata = $populartrending->fetch(PDO::FETCH_ASSOC)){
							?>
							<li>
								<article>
									<header>
										<h3><a href="../admin/single.php?id=<?php echo $populartrendingdata['id']; ?>"><?php echo substr($populartrendingdata['title'],0,20);?></a></h3>
										<time class="published" datetime="2015-10-20">October 20, 2015</time>
									</header>
									<a href="../admin/single.php?id=<?php echo $populartrendingdata['id'];?>" class="image"><img src="../admin/assets/img/<?php echo $populartrendingdata['media'];?>" alt="" /></a>
								</article>
							</li>
							<?php
						} ?>
					</ul>




				</section>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer_part">
							<h1 class="text-center"><a href="#">NEWSMAG</a></h1>
							<p class="text-center">Copyright © 2017 NM. The Newsmag is not responsible for the content of external sites</p>
							<p class="text-center">Social links</p>
							<h2 class="text-center"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></h2>


						</div>


						<!-- </div> -->

						<!-- Scripts -->
						<!-- jQuery library -->
						<script src="assets/js/jquery.min.js"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <script src="assets/js/skel.min.js"></script>
						<script src="assets/js/util.js"></script>
						<script src="assets/js/main.js"></script>
						<script type="text/javascript" src="assets/js/news.slider.js"></script>
						<script type="text/javascript" src="assets/js/newsbox.js"></script>
						<script type="text/javascript" src="dist/js/jquery.sliderPro.min.js"></script>
						<script type="text/javascript" src="libs/fancybox/jquery.fancybox.pack.js"></script>
						<script type="text/javascript" src="assets/js/newslider.js"></script>
	          <!--   <script type="text/javascript">
	            	$document.ready(function(){
	            		$('#search').keyup(function(){
	            			var name = $(this).val();
	            			$.post('get_search.php',{name:name},function(){
	            				$('div#back_result').html(data);

	            			});

	            		});
	            	});
	            </script> -->
	            <script type="text/javascript">
	            	$('.list-group .list-group:nth-child(1)').addClass('active')
	            </script>
	            <script type="text/javascript">
	            	$('.carousel-inner .item:nth-child(1)').addClass('active');
	            </script>


	            <script type="text/javascript">
	            	$(function () {
	            		$(".demo1").bootstrapNews({
	            			newsPerPage: 3,
	            			autoplay: true,
	            			pauseOnHover:true,
	            			direction: 'up',
	            			newsTickerInterval: 4000,
	            			onToDo: function () {
	                //console.log(this);
	            }
	        });

	            		$(".demo2").bootstrapNews({
	            			newsPerPage: 4,
	            			autoplay: true,
	            			pauseOnHover: true,
	            			navigation: false,
	            			direction: 'down',
	            			newsTickerInterval: 2500,
	            			onToDo: function () {
	                //console.log(this);
	            }
	        });

	            		$("#demo3").bootstrapNews({
	            			newsPerPage: 3,
	            			autoplay: false,

	            			onToDo: function () {
	                //console.log(this);
	            }
	        });
	            	});
	            </script>
	        </script>
	        <script type="text/javascript">
	        	(function($) {

	        		var allPanels = $('.accordion > dd').hide();

	        		$('.accordion > dt > a').click(function() {
	        			allPanels.slideUp();
	        			$(this).parent().next().slideDown();
	        			return false;
	        		});

	        	})(jQuery);
	        </script>
	        <script type="text/javascript">
	        	$('.left-control').click(function() {
	        		$('#home-slider').carousel('prev');
	        	});

	        	$('.right-control').click(function() {
	        		$('#home-slider').carousel('next');
	        	});
	        </script>

	        <script type="text/javascript">
	        	$( document ).ready(function( $ ) {
	        		$( '#example4' ).sliderPro({
	        			width: 960,
	        			height: 450,
	        			autoHeight: true,
	        			fade: true,
	        			updateHash: true
	        		});

			// instantiate fancybox when a link is clicked
			$( '#example4 .sp-lightbox' ).on( 'click', function( event ) {
				event.preventDefault();

				// check if the clicked link is also used in swiping the slider
				// by checking if the link has the 'sp-swiping' class attached.
				// if the slider is not being swiped, open the lightbox programmatically,
				// at the correct index
				if ( $( '#example4' ).hasClass( 'sp-swiping' ) === false ) {
					$.fancybox.open( this );
				}
			});
		});
	</script>

	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example1' ).sliderPro({
				width: 960,
				height: 500,
				arrows: true,
				buttons: false,
				waitForLayers: true,
				thumbnailWidth: 200,
				thumbnailHeight: 100,
				thumbnailPointer: true,
				autoplay: false,
				autoScaleLayers: false,
				breakpoints: {
					500: {
						thumbnailWidth: 120,
						thumbnailHeight: 50
					}
				}
			});
		});
	</script>
	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example5' ).sliderPro({
				width: 670,
				height: 500,
				orientation: 'vertical',
				loop: false,
				arrows: true,
				buttons: false,
				thumbnailsPosition: 'right',
				thumbnailPointer: true,
				thumbnailWidth: 290,
				breakpoints: {
					800: {
						thumbnailsPosition: 'bottom',
						thumbnailWidth: 270,
						thumbnailHeight: 100
					},
					500: {
						thumbnailsPosition: 'bottom',
						thumbnailWidth: 120,
						thumbnailHeight: 50
					}
				}
			});
		});
	</script>
</body>
</html>
