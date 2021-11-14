<?php include 'includes/header.php'; ?>
<div class="container">
	<!-- Page Banner -->
	<div class="jumbotron mt-4 mb-sm-4" style="margin-bottom: 0">
	  <h1 class="display-4">Let's Share - Shop</h1>
	  <p class="lead">India's Best Old Books Reselling Website</p>
	</div>

	<!-- Book Cards -->
	<?php  
		if (isset($_GET['item'])) {
			$sql = mysqli_query($conn, "SELECT * FROM products WHERE title LIKE '%".$_GET['item']."%'");
		}else{
			$sql = mysqli_query($conn, "SELECT * FROM products");
		}

		$books = mysqli_fetch_all($sql, MYSQLI_BOTH);
	?>
	
	<div class="book-card row">
		<?php if ($books): ?>
			<?php foreach ($books as $book): ?>
				<div class="col-md-4 mb-sm-4 mt-c-sm-3">
					<div class="card">
					  <img class="card-img-top" src="<?php echo $book['img'] ?>" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title"><?php echo $book['title'] ?></h4>
					    <p class="card-text"><?php echo $book['pdesc'] ?></p>
					    <form action="includes/cart.inc.php" method="POST">
					    	<input type="hidden" name="id" value="<?php echo $book['id'] ?>">
					    	<input type="hidden" name="name" value="<?php echo $book['title'] ?>">
					    	<input type="hidden" name="price" value="<?php echo $book['price'] ?>">
					    	<input type="hidden" name="qty" value="1">
					    	<button type="submit" name="addtoCart" class="btn btn-primary">
					    		<i class="fa fa-shopping-cart"></i> Add to Cart
					    	</button>
					    </form>
					  </div>
					</div>
				</div>
			<?php endforeach ?>
			<?php else: ?>
				<div class="p-5">
					<p class="text-center">No book found for your search</p>
				</div>
		<?php endif ?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>