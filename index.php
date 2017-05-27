<?php require 'header.php' ?>

	<body id="top-page" class="index">

<?php include 'nav.php' ?>

		<!-- Header -->
		<header>
				<div class="container">
						<div class="intro-text">
								<div class="intro-lead-in">Welcome To McCoy University!</div>
								<div class="intro-heading">It's Nice To Meet You</div>
						</div>
				</div>
		</header>

		<!-- BackToTop Button -->
				<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

			<div class="content">
<!-- Home Section -->
				<section id="home">
					<div class="container">
						<div class="row">
								<div class="col-lg-12 text-center">
								    <h2 class="section-heading">WHAT WE DO</h2>
										<h3 class="section-subheading-home text-muted">Bringing dogs and their owners closer together with a unique system of training.</h3>
								</div>
								<div class="col-md-8 col-lg-offset-2 text-center">
									<p class="text-muted paragraph-home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
								</div>
						</div>
						<div class="row">
								<div class="col-sm-3">
										<div class="home-photo">
											<img src="assets/img/hp-1.jpg" class="img-responsive img-circle" alt="">
										</div>
								</div>
								<div class="col-sm-3">
										<div class="home-photo">
											<img src="assets/img/hp-2.jpg" class="img-responsive img-circle" alt="">
										</div>
								</div>
								<div class="col-sm-3">
										<div class="home-photo">
											<img src="assets/img/hp-3.jpg" class="img-responsive img-circle" alt="">
										</div>
								</div>
								<div class="col-sm-3">
										<div class="home-photo">
											<img src="assets/img/hp-4.jpg" class="img-responsive img-circle" alt="">
										</div>
								</div>
						</div>
					</div>
				</section>
<!-- About Section -->
					<section id="about" class="bg-light-gray">
						<div class="container-fluid">
							<?php include 'about.php'; ?>
						</div>
					</section>
<!-- Services Section -->
					<section id="services">
						<div class="container clearfix">
							<?php include 'services.php'; ?>
						</div>
					</section>
<!-- Gallery Section -->
					<section id="gallery" class="bg-light-gray">
						<div class="container">
							<?php include 'gallery.php'; ?>
						</div>
					</section>
<!-- Contact Section -->
				<section id="contact">
					<div class="container clearfix">
						<?php include 'contact.php'; ?>
					</div>
				</section>

<!-- Footer Section -->
<div class="bg-light-gray">
	<?php require 'footer.php' ?>
</div>
