<html>
  <head>
    <title>Go-Online</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.7.1/full/ckeditor.js"></script>
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
  <header style="background-color: #609966;">
			<!-- TOP HEADER -->
			<div style="background-color: #006410;" id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="<?php echo base_url(); ?>"><i class="fa fa-globe"></i> Go-Online</a></li>
						<!-- <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li> -->
					</ul>
					<ul class="header-links pull-right">   
			<?php if($this->session->userdata('login')!=true): ?>
						<li><a href="#" id="loginLink"><i class="fa fa-user"></i> Log in</a></li>
						<li><a href="<?php echo base_url(); ?>users/register"><i class= "fa fa-user-o"></i> Register</a></li> 
			<?php endif; ?>				
          	<?php if($this->session->userdata('login')==true): ?>
						<li><a href="<?php echo base_url(); ?>users/dashboard"><?php echo $this->session->userdata('username'); ?></a></li>
						<li><a href="<?php echo base_url(); ?>users/logout"><i class= "fa fa-user-o"></i>Logout</a></li>
         	<?php endif; ?>

					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div style="background-color: #609966;" id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo base_url(); ?>" class="logo">
									<img src="<?php echo base_url(); ?>assets/img/go_online_logo2.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="<?php echo site_url('Pages/search'); ?>" method="get">
									<input class="input" type="text" name="search" placeholder="Search here">
									<button type="submit" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url(); ?>assets/img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="<?php echo base_url(); ?>assets/img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

  <div class="container">

  <!-- Flash Messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('post_updated')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

     <?php if($this->session->flashdata('category_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>


<script>
$(document).ready(function() {
  $('#loginLink').click(function(e) {
    e.preventDefault(); // Menghentikan aksi default link

    // Tampilkan popup login menggunakan SweetAlert
    Swal.fire({
      title: 'Log In',
      html: '<input type="text" id="username" class="swal2-input" placeholder="Username">' +
            '<input type="password" id="password" class="swal2-input" placeholder="Password">',
      showCancelButton: true,
      confirmButtonText: 'Log In',
      preConfirm: function() {
        const username = Swal.getPopup().querySelector('#username').value;
        const password = Swal.getPopup().querySelector('#password').value;
        return { username: username, password: password };
      }
    }).then(function(result) {
      if (result.isConfirmed) {
        // Mengirim data login ke server menggunakan AJAX
        $.ajax({
          url: '<?php echo base_url(); ?>users/login', // Ganti URL sesuai dengan endpoint yang ditentukan di kontroler
          method: 'POST',
          data: {
            username: result.value.username,
            password: result.value.password
          },
          success: function(response) {
            // Handle response from server as needed
            console.log(response);
            
            // Tampilkan pesan sukses menggunakan SweetAlert2
            Swal.fire({
              icon: 'success',
              title: 'Login Successful',
              text: 'You are now logged in.',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              window.location.href = 'index.php';
            });
          },
          error: function(xhr, status, error) {
            console.log(xhr.responseText);
			Swal.fire({
              icon: 'failed',
              title: 'Login Successful',
              text: 'You are now logged in.',
              showConfirmButton: false,
              timer: 1500
            }).then(function() {
              window.location.href = 'index.php';
            });
          }
        });
      }
    });
  });
});



</script>