   	</div>
    <!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 col-xs-8">
							<div class="footer">
								<h3 class="footer-title">Detail</h3>
								<p>Copyright 2023 DKPP Bojonegoro</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Dinas Ketahanan Pangan dan Pertanian Jalan Raya Sukowati No. 412 Kapas, Bojonegoro</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>(0353) 881410</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>dinaspertanian@bojonegorokab.go.id</a></li>
								</ul>
							</div>
						</div>
							<div class="col-md-4 col-xs-8">
								<div class="footer">
									<h3 class="footer-title">Categories</h3>
									<?php foreach ($categories as $category): ?>
										<ul class="footer-links">
											<li<?php echo ($selectedCategory === $category->name) ? ' class="active"' : ''; ?>>
												<a href="<?php echo base_url('pages/view?category=' . urlencode($category->name)); ?>">
													<?php echo $category->name; ?>
												</a>
											</li>
										</ul>
									<?php endforeach; ?>
								</div>
							</div>
						
						<div class="clearfix visible-xs"></div>

						<div class="col-md-4 col-xs-8">
							<div class="footer">
								<h3 class="footer-title">Informasi</h3>
								<ul class="footer-links">
									<li><a href="#">Tentang</a></li>
									<li><a href="#">Kontak</a></li>
									<li><a href="#">Privasi dan Keamanan</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<!-- <div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Go Online - All Rights Reserved<i aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
							</span>

						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
   	<script>
        CKEDITOR.replace( 'editor1' );
    </script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery Plugins -->
    <script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

    

  </body>
</html>