<?php
session_start();
include 'header.php';
$result = mysqli_query($link,"SELECT id, title_game, price from product");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>List Produt</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td>Title game</td>
        <td>Price</td>
        <td>buy</td>
      </tr>

      <?php while($row=mysqli_fetch_array($result)){ ?>
        <tr>
          <td><?php echo $row["title_game"] ?></td>
          <td><?php echo $row["price"] ?></td>
          <td><a href="?id=<?php echo $row["id"] ?>" class="btn btn-success btn-sm">Add to cart</a></td>
        </tr>
      <?php } ?>
    </table>
    <?php
      if (empty($_SESSION['cart']))
        $_SESSION['cart'] = array();
        if (isset($_GET['id']))
          array_push($_SESSION['cart'], $_GET['id']);


    ?>
    <a href="cart.php" class="btn btn-info">Cart</a>
  </body>
</html>

<?php include 'footer.php'; ?>
