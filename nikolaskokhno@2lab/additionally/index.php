<?php
include 'header.php';
include 'procedure/select_procedure.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web-shop NewGeneration</title>
  </head>
  <body>
    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Web</span>-Shop</h1>
									<h2>New Generation</h2>
									<p>Welcome to web-shop "NewGeneration"! Only the freshest and newest games on our site at the best prices. </p>
									<button type="button" class="btn btn-default get">List Game</button>
								</div>
								<div class="col-sm-6">
									<img src="../img/img1.jpg" class="first-img img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="../img/img1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="../img/img1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

  <section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Cenre</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											Action
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											RPG
										</a>
									</h4>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											Arcade
										</a>
									</h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Simulators</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Strategies</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Adventure</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Puzzle</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Logical</a></h4>
								</div>
							</div>
						</div>

            <div class="brands_products"><!--brands_products-->
							<h2>Publisher</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Ubisoft</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Nintendo</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Electronic Arts</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Sony Computer</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Microsoft</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->


						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

					</div>
				</div>

        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">best news game</h2>
          </div>
        <?php

          if (mysqli_num_rows($procedureSelectGame) > 0) {
            do {
              echo '

          <div class="col-sm-4">
            <div class="product-image-wrapper">
              <div class="single-products">
                  <div class="productinfo text-center">
                    <img src="'.$selectGameArray["img_icon"].'" alt="" height="249px" />
                    <h2>'.$selectGameArray["price"].'руб.</h2>
                    <p>'.$selectGameArray["title_game"].'</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  </div>
                  <div class="product-overlay">
                    <div class="overlay-content">
                      <h2>'.$selectGameArray["price"].'руб.</h2>
                      <p>'.$selectGameArray["title_game"].'</p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                  </div>
              </div>
              <div class="choose">
                <ul class="nav nav-pills nav-justified">
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to favotite</a></li>
                  <li><a href="#"><i class="fa fa-plus-square"></i>Add to cart</a></li>
                </ul>
              </div>
            </div>
          </div>
              ';
            } while ($selectGameArray = mysqli_fetch_array($procedureSelectGame));
          }

        ?>
      </div>

        </section>
  </body>
</html>
<?php include 'footer.php'; ?>
