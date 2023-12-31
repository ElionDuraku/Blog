<?php require_once "\Admin\Autoloader.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="language" content="English">
  	<meta name="description" content="It is a website about education">
  	<meta name="keywords" content="blog,cms blog">
  	<link rel="stylesheet" href="admin/font-awesome-4.5.0/css/font-awesome.css">	
  	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
  	<link rel="stylesheet" href="admin/css/style.css">
  	<title>Blog</title>
</head>
<body>
	<!-- START HERE -->
	<nav class="navbar navbar-expand-sm bg-warning navbar-dark fixed-top">
		<div class="container">
		<a href="index.html" class="navbar-brand">Blog</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="mainNav">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="index.html" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
				<a href="about.html" class="nav-link">About</a>
			</li>
			<li class="nav-item">
				<a href="contact.html" class="nav-link">Contact</a>
			</li>
			</ul>

		</div>
		</div>
	</nav>
	<!-- SLIDER WITH CAPTIONS -->
	<section class="container mt-5">
		<section class="row">
			<section class="col-md-12 slider-images">
			<div id="slider" class="carousel slide mt-3  mb-1" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider" class="active" data-slide-to="0"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
				</ol>	
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="img-fluid" src="admin/images/slideshow/01.jpg" alt="First Slide">
					<div class="carousel-caption">
						<h3>Titulli</h3>
						<p>Pershkrimi i imazhit</p>
					</div>
					</div>
					<div class="carousel-item">
					<img class="img-fluid"src="admin/images/slideshow/02.jpg" alt="Second Slide">
					<div class="carousel-caption">
						<h3>Titulli2</h3>
						<p>Pershkrimi i imazhit 2</p>
					</div>
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="admin/images/slideshow/03.jpg" alt="Third Slide">
						<div class="carousel-caption">
							<h3>Titulli 3</h3>
							<p>Pershkrimi i imazhit 3</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="admin/images/slideshow/04.jpg" alt="Third Slide">
						<div class="carousel-caption">
							<h3>Titulli 4</h3>
							<p>Pershkrimi i imazhit 4</p>
						</div>
					</div>
				</div>
				<a href="#slider" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#slider" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			</section>
		</section>
	</section>
    <main class="container">
		<section class="row">
			<section class="col-md-8 bg- posts border-cover">
				<article class="media border-bottom border-white my-1">
					<a class="align-self-center" href="#">
						<img class="img-fluid justify-content-center img-post mr-3" 
						src="admin/images/post1.png" alt="post image"/>
					</a>
					<div class="media-body">
						<h4><a href="">Our post title here</a></h4>
						<h6>Mars 05, 2020, Nga <a href="#">Burim Avdiu</a></h6>
						<p>
							Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
						</p>
					</div>
				</article>
				<article class="media border-bottom border-white my-1">
					<a class="align-self-center" href="#">
						<img class="img-fluid justify-content-center img-post mr-3" 
						src="admin/images/post2.png" alt="post image"/>
					</a>
					<div class="media-body">
						<h4><a href="">Our post title here</a></h4>
						<h6>Mars 05, 2020, Nga <a href="#">Burim Avdiu</a></h6>
						<p>
							Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
						</p>
					</div>
				</article>
				<article class="media my-1">
					<a class="align-self-center" href="#">
						<img class="img-fluid justify-content-center img-post mr-3" 
						src="admin/images/post3.png" alt="post image"/>
					</a>
					<div class="media-body">
						<h4><a href="">Our post title here</a></h4>
						<h6>Mars 05, 2020, Nga <a href="#">Burim Avdiu</a></h6>
						<p>
							Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
						</p>
					</div>
				</article>
			</section>
			<aside class="col-md-4 sidebar">
				<article class="categories ml-1">
					<h4>Categories</h4>
					<div class="list-group list-unstyled mb-3">
						<?php
							$category = new \Admin\Lib\Category();
							$categories = $category->find_all();

							foreach ($categories as $c) {
								echo "<a class='list-group-item list-group-item-light' href='#'>{$c->getName()}</a></li>";
							}
						?>				
					</div>
				</div>
				<div class="samesidebar clear">
					<h4>Latest articles</h4>
					<div class="media border-bottom border-white">
						
						<a class="align-self-center" href="#">
							<img class="img-post-small mr-2" src="admin/images/post1.png" alt="post image"/></a>
						<div class="media-body">
							<h5><a href="#">Post title </a></h5>
							<p>Sidebar text will be go here.Sidebar text will be go here.</p>	
						</div>
	
					</div>
					<div class="media border-bottom border-white">
						
						<a class="align-self-center" href="#">
							<img class="img-post-small mr-2" src="admin/images/post2.png" alt="post image"/></a>
						<div class="media-body">
							<h5><a href="#">Post title </a></h5>
							<p>Sidebar text will be go here.Sidebar text will be go here.</p>	
						</div>
	
					</div>
					<div class="media">
						
						<a class="align-self-center" href="#">
							<img class="img-post-small mr-2" src="admin/images/post3.png" alt="post image"/></a>
						<div class="media-body">
							<h5><a href="#">Post title </a></h5>
							<p>Sidebar text will be go here.Sidebar text will be go here.</p>	
						</div>
					</div>	
				</div>
			</aside>	
		</section>
		
	</main>
	<section class="bg-warning container">
		<footer class="py-3 border-top border-white">	
			<p>&copy; Copyright by Probit Academy Training Center <a href="">Probit Academy</a>.</p>
		</footer>

	</section>
	<script src="admin/js/jquery-3.3.1.slim.min.js"></script>
	<script src="admin/js/popper.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
</body>
</html>