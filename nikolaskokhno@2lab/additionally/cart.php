<?php
session_start();
include 'header.php';

if (isset($_GET['remove']))
  foreach ($_SESSION['cart'] as $key => $val) {
    if ($val == $_GET['remove']) {
      unset($_SESSION['cart'][$key]);
    }
  }
elseif (isset($_GET['remove_all'])) {
  unset($_SESSION['cart']);
}

if (!isset($_SESSION['cart']) or $_SESSION['cart'] == null) {
  echo "no exit product in cart";
  echo '<br /><a href="listProduct.php" class="btn btn-info">List game</a>';
}else {
  $in = implode(',', array_unique($_SESSION['cart']));
  require '../php-server/connect_database.php';

  $query = mysqli_query($link,"SELECT id, title_game, price, img_icon, publisher FROM product WHERE id IN ($in)");
  $fullprice = 0;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cart</title>
  </head>
  <body>
    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Cenre</td>
							<td class="quantity">Publisher</td>
							<td class="price">Price</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
              <?php while ($row = mysqli_fetch_array($query)) { ?>
                <?php $fullprice += $row['price'] ?>
                    <tr>
                      <td class="cart_product">
                        <img src="<?php echo $row['img_icon']; ?>" height="110px"/>
                      </td>
                      <td class="cart_description">
                        <?php echo $row['title_game']; ?>
                      </td>
                      <td class="cart_price">
                        <?php echo $row['price']; ?>
                      </td>
                      <td class="cart_price">
                        <?php echo $row['publisher']; ?>
                      </td>
                      <td class="cart_delete">
                        <a class="cart_quantity_delete" href="?remove=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
            <?php } ?>
              <tr>
                <td class="text-right"><h3>Total:</h3></td>
                <td><h3><?php echo $fullprice; ?></h3></td>
              </tr>
              <tr>
                <td><a href="?remove_all" class="btn btn-danger">Delete all</a></td>
                <td><a href="listProduct.php" class="btn btn-success">List Product</a></td>
              </tr>
					</tbody>
				</table>
			</div>
		</div>
  <?php } ?>
	</section>
  </body>
</html>

<?php include 'footer.php'; ?>
