<?php
  session_start();
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

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="index.php">Home</a></li>
								<li><a href="#product">Products</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="index.php">Logout</a></li>
								<li class="current-list-item"><a href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a></li>
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
	<div class="container">
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
			echo $_SESSION['showAlert'];
			} else {
			echo 'none';
			} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong><?php if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			} unset($_SESSION['showAlert']); ?></strong>
        </div>
	  </div>
	</div>
	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
								<th>ID</th>
								<th>Image</th>
								<th>Product</th>
								<th>Price</th>
								<th>KG	</th>
								<th>Total Price</th>
								<th>
									<a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
								</th>
								</tr>
							</thead>
							<tbody>
							<?php
								require 'connection.php';
								$stmt = $conn->prepare('SELECT * FROM cart');
								$stmt->execute();
								$result = $stmt->get_result();
								$grand_total = 0;
								while ($row = $result->fetch_assoc()):
							?>
								<tr class="table-body-row">
								<td><?= $row['id'] ?></td>
								<input type="hidden" class="pid" value="<?= $row['id'] ?>">
								<td><img src="<?= $row['product_image'] ?>" width="50"></td>
								<td><?= $row['product_name'] ?></td>
								<td>
								<i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?>
								</td>
								<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
								<td>
								&nbsp;&nbsp;&nbsp;<input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
								</td>
								<td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
								<td>
								<a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
								</td>
								</tr>
								<?php $grand_total += $row['total_price']; ?>
              					<?php endwhile; ?>
								  <tr>
									<td colspan="3">
									<a href="index2.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
										Shopping</a>
									</td>
									<td colspan="2"><b>Grand Total</b></td>
									<td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
									<td>
									<a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
	
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
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
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