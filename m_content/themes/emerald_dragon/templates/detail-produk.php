<!-- SECTION HEADLINE -->

<?php if ( have_products() ) : $products = product_loop($url->segment(2),''); foreach( $products as $product ) : 
  
    $gambar = pecah(',',$product->image);
?>
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2><?= $product->name; ?></h2>
        <p>Home<span class="separator">/</span><?= $product->category_name;?><span class="separator">/</span><span class="current-section"><?= $product->name; ?></span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->

   


<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- SIDEBAR -->
			<div class="sidebar right">
				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item">
					<p class="price large"><span>$</span><?= $product->price; ?>.00</p>
					<hr class="line-separator">
					<form id="aux_form" name="aux_form"></form>

					
					<a href="#" class="button mid dark spaced"><span class="primary">Purchase Now!</span></a>
					<a href="#" class="button mid primary spaced">Add to Cart</a>
<!--					<a href="#" class="button mid secondary wicon half"><span class="icon-heart"></span>652</a>-->
					<div class="clearfix"></div>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-bio">
					<h4>Product Author</h4>
					<hr class="line-separator">
					<!-- USER AVATAR -->
					<a href="user-profile.html" class="user-avatar-wrap medium">
						<figure class="user-avatar medium">
							<img src="<?php echo get_theme_url($theme); ?>images/avatars/avatar_09.jpg" alt="">
						</figure>
					</a>
					<!-- /USER AVATAR -->
					<p class="text-header"><?= $product->first_name ;?></p>
					<p class="text-oneline"><?= $product->company; ?><br><?= $product->country;?></p>
					<!-- SHARE LINKS -->
					<ul class="share-links">
						<li><a href="#" class="fb"></a></li>
						<li><a href="#" class="twt"></a></li>
						<li><a href="#" class="db"></a></li>
					</ul>
					<!-- /SHARE LINKS -->
					<a href="#" class="button mid dark spaced">Go to <span class="primary">Profile Page</span></a>
					<a href="#" class="button mid dark-light">Send a Private Message</a>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item product-info">
					<h4>Product Information</h4>
					<hr class="line-separator">
					<!-- INFORMATION LAYOUT -->
					<div class="information-layout">
						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Sales:</p>
							<p>22</p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Upload Date:</p>
							<p><?= $product->date_added; ?></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Files Included:</p>
							<p>PSD, AI<br>JPEG, PNG</p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Requirements:</p>
							<p>CS6 or Lower</p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="text-header">Dimensions:</p>
							<p>4500x2800 Px</p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->

						<!-- INFORMATION LAYOUT ITEM -->
						<div class="information-layout-item">
							<p class="tags primary"><a href="#">photoshop</a>, <a href="#">flat</a>, <a href="#">icon</a>, <a href="#">devices</a>, <a href="#">mobile</a>, <a href="#">vector</a>, <a href="#">coffee</a>, <a href="#">scene</a>, <a href="#">hero</a>, <a href="#">image</a>, <a href="#">maker</a>, <a href="#">set</a>, <a href="#">tablet</a>, <a href="#">laptop</a>, <a href="#">mockup</a></p>
						</div>
						<!-- /INFORMATION LAYOUT ITEM -->
					</div>
					<!-- INFORMATION LAYOUT -->
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-reputation full">
					<h4>Author's Reputation</h4>
					<hr class="line-separator">
					<!-- PIE CHART -->
					<div class="pie-chart pie-chart1">
						<p class="text-header percent">86<span>%</span></p>
						<p class="text-header percent-info">Recommended</p>
						<!-- RATING -->
						<ul class="rating">
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
							<li class="rating-item empty">
								<!-- SVG STAR -->
								<svg class="svg-star">
									<use xlink:href="#svg-star"></use>
								</svg>
								<!-- /SVG STAR -->
							</li>
						</ul>
						<!-- /RATING -->
					</div>
					<!-- /PIE CHART -->
					<a href="#" class="button mid dark-light">Read all the Customer Reviews</a>
				</div>
				<!-- /SIDEBAR ITEM -->

				<!-- SIDEBAR ITEM -->
				<div class="sidebar-item author-items">
					<h4>More Author's Items</h4>
					<!-- PRODUCT LIST -->
					<div class="product-list grid column4-wrap">
						<!-- PRODUCT ITEM -->
						<div class="product-item column">
							<!-- PIN -->
							<span class="pin featured">Featured</span>
							<!-- /PIN -->

							<!-- PRODUCT PREVIEW ACTIONS -->
							<div class="product-preview-actions">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image">
									<img src="<?php echo get_theme_url($theme); ?>images/items/flat_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="item-v1.html">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="item-v1.html">
											<p>Go to Item</p>
										</a>
									</div>
									<!-- /PREVIEW ACTION -->

									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="#">
											<div class="circle tiny secondary">
												<span class="icon-heart"></span>
											</div>
										</a>
										<a href="#">
											<p>Favourites +</p>
										</a>
									</div>
									<!-- /PREVIEW ACTION -->
								</div>
								<!-- /PREVIEW ACTIONS -->
							</div>
							<!-- /PRODUCT PREVIEW ACTIONS -->

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Flatland - Hero Image Composer</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Hero Images</p>
								</a>
								<p class="price"><span>$</span>12</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo get_theme_url($theme); ?>images/avatars/avatar_09.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Odin_Design</p>
								</a>
								<ul class="rating tooltip" title="Author's Reputation">
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
							</div>
							<!-- /USER RATING -->
						</div>
						<!-- /PRODUCT ITEM -->

						<!-- PRODUCT ITEM -->
						<div class="product-item column">
							<!-- PRODUCT PREVIEW ACTIONS -->
							<div class="product-preview-actions">
								<!-- PRODUCT PREVIEW IMAGE -->
								<figure class="product-preview-image">
									<img src="<?php echo get_theme_url($theme); ?>images/items/pixel_m.jpg" alt="product-image">
								</figure>
								<!-- /PRODUCT PREVIEW IMAGE -->

								<!-- PREVIEW ACTIONS -->
								<div class="preview-actions">
									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="item-v1.html">
											<div class="circle tiny primary">
												<span class="icon-tag"></span>
											</div>
										</a>
										<a href="item-v1.html">
											<p>Go to Item</p>
										</a>
									</div>
									<!-- /PREVIEW ACTION -->

									<!-- PREVIEW ACTION -->
									<div class="preview-action">
										<a href="#">
											<div class="circle tiny secondary">
												<span class="icon-heart"></span>
											</div>
										</a>
										<a href="#">
											<p>Favourites +</p>
										</a>
									</div>
									<!-- /PREVIEW ACTION -->
								</div>
								<!-- /PREVIEW ACTIONS -->
							</div>
							<!-- /PRODUCT PREVIEW ACTIONS -->

							<!-- PRODUCT INFO -->
							<div class="product-info">
								<a href="item-v1.html">
									<p class="text-header">Pixel Diamond Gaming Shop</p>
								</a>
								<p class="product-description">Lorem ipsum dolor sit urarde...</p>
								<a href="shop-gridview-v1.html">
									<p class="category primary">Shopify</p>
								</a>
								<p class="price"><span>$</span>86</p>
							</div>
							<!-- /PRODUCT INFO -->
							<hr class="line-separator">

							<!-- USER RATING -->
							<div class="user-rating">
								<a href="author-profile.html">
									<figure class="user-avatar small">
										<img src="<?php echo get_theme_url($theme); ?>images/avatars/avatar_06.jpg" alt="user-avatar">
									</figure>
								</a>
								<a href="author-profile.html">
									<p class="text-header tiny">Sarah-Imaginarium</p>
								</a>
								<ul class="rating tooltip" title="Author's Reputation">
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
									<li class="rating-item empty">
										<!-- SVG STAR -->
										<svg class="svg-star">
											<use xlink:href="#svg-star"></use>
										</svg>
										<!-- /SVG STAR -->
									</li>
								</ul>
							</div>
							<!-- /USER RATING -->
						</div>
						<!-- /PRODUCT ITEM -->
					</div>
					<!-- /PRODUCT LIST -->
					<div class="clearfix"></div>
				</div>
				<!-- /SIDEBAR ITEM -->
			</div>
			<!-- /SIDEBAR -->

			<!-- CONTENT -->
			<div class="content left">
				<!-- POST -->
				<article class="post">
					<!-- POST IMAGE -->
					<div class="post-image">
						<figure class="product-preview-image large liquid">
							<img src="<?php echo UPLOADURL."".$gambar[0];?>" alt="">
						</figure>
						<!-- SLIDE CONTROLS -->
						<div class="slide-control-wrap">
							<div class="slide-control rounded left">
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</div>

							<div class="slide-control rounded right">
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</div>
						</div>
						<!-- /SLIDE CONTROLS -->
<!--						<a href="#" class="button mid primary">Go to Live Demo</a>-->
					</div>
					<!-- /POST IMAGE -->

					<!-- POST IMAGE SLIDES -->
					<div class="post-image-slides">
						<!-- IMAGE SLIDES WRAP -->
						<div class="image-slides-wrap full">
							<!-- IMAGE SLIDES -->
							<div class="image-slides" data-slide-visible-full="3" 
													  data-slide-visible-small="2"
													  data-slide-count="4">
								
								<?php
                                    foreach($gambar as $img):
                                ?>
								<!-- IMAGE SLIDE -->
								<div class="image-slide">
									<div class="overlay"></div>
									<figure class="product-preview-image thumbnail liquid">
										<img src="<?php echo UPLOADURL."".$img ?>" alt="">
									</figure>
								</div>
								<!-- /IMAGE SLIDE -->
                                <?php endforeach;?>

							</div>
							<!-- IMAGE SLIDES -->
						</div>
						<!-- IMAGE SLIDES WRAP -->
					</div>
					<!-- /POST IMAGE SLIDES -->

					<hr class="line-separator">

					<!-- POST CONTENT -->
					<div class="post-content">
						<!-- POST PARAGRAPH -->
						<?= $product->description ?>
						<div class="clearfix"></div>
					</div>
					<!-- /POST CONTENT -->

					<hr class="line-separator">

					<!-- SHARE -->
					<div class="share-links-wrap">
						<p class="text-header small">Share this:</p>
						<!-- SHARE LINKS -->
						<ul class="share-links hoverable">
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="twt"></a></li>
							<li><a href="#" class="db"></a></li>
							<li><a href="#" class="rss"></a></li>
							<li><a href="#" class="gplus"></a></li>
						</ul>
						<!-- /SHARE LINKS -->
					</div>
					<!-- /SHARE -->
				</article>
				<!-- /POST -->

			</div>
			<!-- CONTENT -->
		</div>
	</div>
	<!-- /SECTION -->

<?php endforeach; endif; ?>