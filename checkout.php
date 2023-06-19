<?php
	require 'connection.php';
	$grand_total = 0;
	$allItems = '';
	$items = [];
	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

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
	<style>
		body{
			height: auto;
		}
		.top-header-area {
			position: absolute;
			z-index: 999;
			width: 100%;
			padding: 25px 0;
			background-color: #051922;
			}
	</style>
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
								<li class="current-list-item"><a href="index.php">Home</a></li>
								<li><a href="#product">Products</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="index.php">Logout</a></li>
								<li><a href=""><i style='font-size:20px' class='fas'>&#xf2bd;</i>&nbsp;&nbsp;
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
	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8" id="order">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        <form action="" method="post" id="placeOrder">
									<input type="hidden" name="products" value="<?= $allItems; ?>">
          							<input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
						        		<p><input type="text" name="name" placeholder="Name" required></p>
						        		<p><input type="email" name="email" placeholder="Email"required></p>
										<p><input type="tel" name="phone" placeholder="Phone"required></p>
						        		<p><textarea name="address" id="address" cols="30" rows="10" placeholder="Address"required ></textarea></p>
										<div class="form-group">
											<input type="submit" name="submit" value="Place Order">
										</div>
								</form>
					
						        </div>
						      </div>
						    </div>
						  </div>
						  <br><br>
						</div>
					</div>
				</div>
				

				<div class="col-lg-4">
					<div class="order-details-wrap">
					<h6 class="lead"><b>Product(s) : 
					</b><br><br><?= $allItems; ?></h6>
					<h6 class="lead"><b>Delivery Charge : </b>Free</h6>
					<h5><b>Total Amount Payable : 
					</b><?= number_format($grand_total,2) ?>/-</h5>
						<!-- <a href="#" class="boxed-btn">Place Order</a> -->
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->
	
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

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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