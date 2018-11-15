<?php
      include 'header.php';
?>

<?php $procedureCartUser = mysqli_query($link, "CALL cartProductUser");
$cartProductUser = mysqli_fetch_array($procedureCartUser); ?>

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
						<?php
              if (mysqli_num_rows($procedureCartUser) > 0) {
                do {
                  echo '
                    <tr>
                      <td class="cart_product">
                        <a href=""><img src="'.$cartProductUser["img_icon"].'" alt="" height="110px" ></a>
                      </td>
                      <td class="cart_description">
                        <h4><a href="">'.$cartProductUser["title_game"].'</a></h4>
                      </td>
                      <td class="cart_price">
                        <p>'.$cartProductUser["genre"].'</p>
                      </td>
                      <td class="cart_price">
                        <p>'.$cartProductUser["publisher"].'</p>
                      </td>
                      <td class="cart_total">
                        <p class="cart_total_price">'.$cartProductUser["price"].'руб.</p>
                      </td>
                      <td class="cart_delete">
                        <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                      </td>
                    </tr>
                  ';
                } while ($cartProductUser = mysqli_fetch_array($procedureCartUser));
              }
            ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
  </body>
</html>

<?php include 'footer.php'; ?>
