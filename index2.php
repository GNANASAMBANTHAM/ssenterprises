
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- title -->
	<title>SS Enterprises</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

<?php
	session_start();
	if(!ISSET($_SESSION['id'])){
		header('location:index2.php');
	}
?>
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="#product">Products</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="index.php">Logout</a></li>
                                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a></li>
								<li class="current-list-item"><a href=""><i style='font-size:20px' class='fas'>&#xf2bd;</i>&nbsp;&nbsp;
								<?php
									require'connection.php';
									$query = mysqli_query($conn, "SELECT * FROM `logind` WHERE `id`='$_SESSION[id]'");
									$fetch = mysqli_fetch_array($query);
									echo "".$fetch['username'];
								?></a>
								</li>	 
									
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">" Empowering Solutions Empowering Success "</p>
							<h1>Siva Shakthi Enterprises</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end features list section -->
	<!-- products -->
	<a id="product"></a>
	<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            
                            <li>Cotton Waste</li>
                            <li>Rayon Waste</li>
                            <li>Vest Waste</li>
							<li>Cotton Yarn</li>
                        </ul>
                    </div>
                </div>
            </div>

    <div class="container">
		<div id="message">
		</div>
		<div class="row mt-2 pb-3">
		<?php
				include 'connection.php';
				$stmt = $conn->prepare('SELECT * FROM product');
				$stmt->execute();
				$result = $stmt->get_result();
				while ($row = $result->fetch_assoc()):
			?>
		<div class="col-sm-6 col-md-4 col-lg-3 mb-2">
			<div class="card-deck">
			<div class="card p-2 mb-2">
			
				<img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
			
				<div class="card-body p-1">
				<h4 class="card-title text-center" style="color:#f28123"><?= $row['product_name'] ?></h4>
				<br>
				<h5 class="card-text text-center"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>
				<br>
				</div>
				<div class="card-footer p-1">
				<form action="" class="form-submit">
					<div class="row p-2">
					<div class="col-md-6 py-1 pl-4">
						<b>KG: </b>
					</div>
					<div class="col-md-6">
						<input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
					</div>
					</div>
					<input type="hidden" class="pid" value="<?= $row['id'] ?>">
					<input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
					<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
					<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
					<input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
					<a href="cart.php" class="cart-btn addItemBtn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					<br>
					<br>
					
				</form>
				</div>
			</div>
			</div>
		</div>
		<?php endwhile; ?>
		</div>
  	</div>
	<!-- contact form -->
	<a id="contact"></a>
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-50 ">	
						<div class="contact-form-wrap">
								<div class="container">
									<div class="row">
										<div class="col-lg-10 col-md-12">
											<div class="abt-text">
											<p class="top-sub">Since Year 1997</p>
												<h2>We are <span class="orange-text">SS Enterprises</span></h2>
												<p>Exporting our goods to multi area </p>
												<p>Like Manglore , Mumbai , Delhi ....</p>
												<a href="about.php" class="boxed-btn mt-4">know more</a>
												<br>
										<br>
										<br><br>
											</div>
										</div>
										
										<div class="contact-form-box">
											<h4>Shop Address</h4>
											<p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
										</div>
										<div class="contact-form-box">
											<h4> Shop Hours</h4>
											<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
										</div>
										<div class="contact-form-box">
											<h4> Contact</h4>
											<p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
										</div>
									</div>
								</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- end contact form -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; SKTstudio 	&nbsp; All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

    <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();
      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

</body>
</html>