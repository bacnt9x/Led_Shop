<!-- Category section -->
<section class="category-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 order-2 order-lg-1">
				<div class="filter-widget">
					<h2 class="fw-title">Danh Mục</h2>
					<ul class="category-menu">
						<?php foreach ($cate as $rowCate) { ?>
							<li>
								<a href="/shop/bshop/leds/categori/<?php echo $rowCate['id']; ?>">
									<?php echo $rowCate['name']; ?>
									<span>
									<?php $count = 0;
										foreach ($ledAll as $rowLed) {
											if($rowLed['categori_id'] == $rowCate['id']) {
												$count += 1;
											}   
										}
										echo $count;
									?>
									</span>
								</a>

							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
				<h2 class="fw-title">
					<?php if (isset($message)) {
						echo $message;
					} else {
						echo $cateMessage['name'];
					}
					?>
				</h2>

				<div class="row">
					<?php foreach ($led as $rowLed) { ?>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">

									<?php $arrImg = []; ?>
									<?php foreach ($img as $key => $rowImg) { ?>

										<?php if ($rowLed['id'] == $rowImg['led_id']) { ?>

											<?php $arrImg[] = $rowImg['name']; ?>

										<?php } ?>
									<?php } ?>

									<div class="carousel-inner-img">
										<a href="/shop/bshop/leds/product/<?php echo $rowLed['id']; ?>">
											<img src="/shop/bshop/views/layouts/img/product/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
										</a>
									</div>
									<div class="pi-links">
										<a href="/shop/bshop/leds/cart/<?php echo $rowLed['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
									<a href="/shop/bshop/leds/product/<?php echo $rowLed['id']; ?>">
										<p><?php echo $rowLed['name']; ?></p>
									</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Category section end -->

<!-- letest product section -->
<section class="top-letest-product-section">
	<div class="container">
		<div class="section-title">
			<h2>SẢN PHẨM MỚI NHẤT</h2>
		</div>
		<div class="product-slider owl-carousel">

			<?php foreach ($top as $rowTop) { ?>
				<?php $arrImg = []; ?>
				<?php foreach ($img as $key => $rowImg) { ?>

					<?php if ($rowTop['id'] == $rowImg['led_id']) { ?>

						<?php $arrImg[] = $rowImg['name']; ?>

					<?php } ?>
				<?php } ?>
				<div class="product-item">
					<div class="pi-pic">

						<div class="tag-new">New</div>
						<a href="/shop/bshop/leds/product/<?php echo $rowTop['id']; ?>">
							<img class="product-big-img" src="/shop/bshop/views/layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
						</a>

						<div class="pi-links">
							<a href="/shop/bshop/leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6><?php echo number_format($rowTop['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
						<a href="/shop/bshop/leds/product/<?php echo $rowTop['id']; ?>">
                            <p><?php echo $rowTop['name']; ?></p>
                        </a>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</section>
<!-- letest product section end -->