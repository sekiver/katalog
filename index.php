<?php include "header.php"; ?>
	<div id="page">	
		<?php include "menu.php"; ?>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(assets/images/img_bg_1.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span class="price">$800</span>
										<h2>Alato Cabinet</h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove.</p>
										<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase
												Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(assets/images/img_bg_2.jpg);">
						<div class="container">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span class="price">$530</span>
										<h2>The Haluz Rocking Chair</h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove.</p>
										<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase
												Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(assets/images/img_bg_3.jpg);">
						<div class="container">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span class="price">$750</span>
										<h2>Alato Cabinet</h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove.</p>
										<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase
												Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(assets/images/img_bg_4.jpg);">
						<div class="container">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span class="price">$540</span>
										<h2>The WW Chair</h2>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and
											Consonantia, there live the blind texts. Separated they live in
											Bookmarksgrove.</p>
										<p><a href="single.html" class="btn btn-primary btn-outline btn-lg">Purchase
												Now</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="fh5co-services" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-credit-card"></i>
							</span>
							<h3>Credit Card</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<h3>Save Money</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center">
						<div class="feature-center animate-box" data-animate-effect="fadeIn">
							<span class="icon">
								<i class="icon-paper-plane"></i>
							</span>
							<h3>Free Delivery</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
								there live the blind texts. Separated they live in Bookmarksgrove</p>
							<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Product -->
		<div id="fh5co-product">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Cool Stuff</span>
						<h2>Our Products</h2>
						<p>Ini adalah list product random</p>
					</div>
				</div>
				<div class="row">
					<?php 
						// Get Data Product
						$sql = "SELECT * FROM wec_product ORDER BY RAND() LIMIT 0,6";
						$data = $db->select($sql);

						// Tampilkan Product
						foreach($data as $rsProduct){
						$imgProduct = $rsProduct["foto"]=="" ? "assets/images/no-images.png" : "assets/uploads/product/".$rsProduct["foto"];
					?>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(<?php echo $imgProduct; ?>);">
							<!-- Menampilkan DIskon -->
							<?php 
								if($rsProduct["diskon"]>0):
							?>
							<span class="sale">Diskon <?= $rsProduct["diskon"]." %"; ?></span>
							<?php 
								endif;
							?>
							<!-- End Menampilkan Diskon -->
								<div class="inner">
									<p>
										<a href="single-product.php?id=<?= $rsProduct["id_product"] ?>" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single-product.php?id=<?= $rsProduct["id_product"] ?>" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single-product.php?id=<?= $rsProduct["id_product"] ?>"><?= $rsProduct["nm_product"] ?></a></h3>
								<span class="price">Rp <?= number_format($rsProduct["harga"]) ?></span>
							</div>
						</div>
					</div>	
					<?php 
						}
					?>				
				</div>				
			</div>
		</div>
		<!-- End Product -->

		<div id="fh5co-testimonial" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Testimony</span>
						<h2>Happy Clients</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row animate-box">
							<div class="owl-carousel owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="assets/images/person1.jpg" alt="user">
										</figure>
										<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>&ldquo;Far far away, behind the word mountains, far from the countries
												Vokalia and Consonantia, there live the blind texts. Separated they live
												in Bookmarksgrove right at the coast of the Semantics, a large language
												ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="assets/images/person2.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the
												Semantics, a large language ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="assets/images/person3.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the
												blind texts. Separated they live in Bookmarksgrove right at the coast of
												the Semantics, a large language ocean.&rdquo;</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Statistik -->
		<div id="fh5co-counter" class="fh5co-bg fh5co-counter"
			style="background-image:url(assets/images/img_bg_5.jpg);">
			<div class="container">
				<div class="row">
					<div class="display-t">
						<div class="display-tc">
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-eye"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000"
										data-refresh-interval="50">1</span>
									<span class="counter-label">Creativity Fuel</span>

								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-shopping-cart"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="450" data-speed="5000"
										data-refresh-interval="50">1</span>
									<span class="counter-label">Happy Clients</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-shop"></i>
									</span>
									<span class="counter js-counter" data-from="0" data-to="700" data-speed="5000"
										data-refresh-interval="50">1</span>
									<span class="counter-label">All Products</span>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 animate-box">
								<div class="feature-center">
									<span class="icon">
										<i class="icon-clock"></i>
									</span>

									<span class="counter js-counter" data-from="0" data-to="5605" data-speed="5000"
										data-refresh-interval="50">1</span>
									<span class="counter-label">Hours Spent</span>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Statistik -->

<?php include "footer.php"; ?>		