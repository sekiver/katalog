<?php include "header.php"; ?>
	
	<div id="page">
	<?php include "menu.php"; ?>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(assets/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Product</h1>
							<h2>Free html5 templates by <a href="https://themewagon.com/theme_tag/free/" target="_blank">Themewagon</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Cool Stuff</span>
					<h2>Products.</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<?php 
					// Get Data Product ALL
					$sql = "SELECT * FROM wec_product LIMIT 0,9";

					// Filter berdasarkan id_cat
					if(isset($_GET["cat"])){
						$sql = "SELECT * FROM wec_product WHERE id_cat=".$_GET["cat"]." LIMIT 0,9";
					}

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
<?php include "footer.php"; ?>

