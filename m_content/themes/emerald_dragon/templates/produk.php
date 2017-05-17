
<!-- SECTION HEADLINE -->
<div class="section-headline-wrap">
    <div class="section-headline">
        <h2><?= ucfirst($url->segment(1)) ?></h2>
        <p>Home<span class="separator">/</span><span class="current-section"><?= ucfirst($url->segment(1)) ?></span></p>
    </div>
</div>
<!-- /SECTION HEADLINE -->
<!-- SIDEBAR NAV -->
<div class="sidebar-nav-wrap">
    <div class="sidebar-nav">
        <!-- SIDEBAR MENU -->
        <ul class="sidebar-menu">
            <!-- SIDEBAR MENU ITEM -->
            <li class="sidebar-menu-item">
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                <a href="#">Filter Products</a>

                <!-- SIDEBAR MENU DROPDOWN -->
                <div class="sidebar-menu-dropdown">
                    <form id="shop_search_form" name="shop_search_form">
                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter1" name="filter1" checked>
                        <label for="filter1">
                            <span class="checkbox primary"><span></span></span>
                            Cartoon Characters
                            <span class="quantity">350</span>
                        </label>
                        <!-- /CHECKBOX -->

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter2" name="filter2" checked>
                        <label for="filter2">
                            <span class="checkbox primary"><span></span></span>
                            Flat Vector
                            <span class="quantity">68</span>
                        </label>
                        <!-- /CHECKBOX -->

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter3" name="filter3" checked>
                        <label for="filter3">
                            <span class="checkbox primary"><span></span></span>
                            People
                            <span class="quantity">350</span>
                        </label>
                        <!-- /CHECKBOX -->

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter4" name="filter4">
                        <label for="filter4">
                            <span class="checkbox primary"><span></span></span>
                            Animals
                            <span class="quantity">68</span>
                        </label>
                        <!-- /CHECKBOX -->

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter5" name="filter5">
                        <label for="filter5">
                            <span class="checkbox primary"><span></span></span>
                            Objects
                            <span class="quantity">350</span>
                        </label>
                        <!-- /CHECKBOX -->

                        <!-- CHECKBOX -->
                        <input type="checkbox" id="filter6" name="filter6" checked>
                        <label for="filter6">
                            <span class="checkbox primary"><span></span></span>
                            Backgrounds
                            <span class="quantity">68</span>
                        </label>
                        <!-- /CHECKBOX -->
                    </form>
                </div>
                <!-- /SIDEBAR MENU DROPDOWN -->
            </li>
            <!-- /SIDEBAR MENU ITEM -->

            <!-- SIDEBAR MENU ITEM -->
            <li class="sidebar-menu-item">
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                <a href="#">File Type</a>

                <!-- SIDEBAR MENU DROPDOWN -->
                <div class="sidebar-menu-dropdown">
                    <!-- CHECKBOX -->
                    <input type="checkbox" id="ft1" name="ft1" form="shop_search_form">
                    <label for="ft1">
                        <span class="checkbox primary"><span></span></span>
                        Photoshop PSD
                        <span class="quantity">72</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="ft2" name="ft2" form="shop_search_form" checked>
                    <label for="ft2">
                        <span class="checkbox primary"><span></span></span>
                        Illustrator AI
                        <span class="quantity">254</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="ft3" name="ft3" form="shop_search_form" checked>
                    <label for="ft3">
                        <span class="checkbox primary"><span></span></span>
                        EPS
                        <span class="quantity">138</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="ft4" name="ft4" form="shop_search_form" checked>
                    <label for="ft4">
                        <span class="checkbox primary"><span></span></span>
                        SVG
                        <span class="quantity">96</span>
                    </label>
                    <!-- /CHECKBOX -->

                    <!-- CHECKBOX -->
                    <input type="checkbox" id="ft5" name="ft5" form="shop_search_form">
                    <label for="ft5">
                        <span class="checkbox primary"><span></span></span>
                        InDesign INDD
                        <span class="quantity">102</span>
                    </label>
                    <!-- /CHECKBOX -->
                </div>
                <!-- /SIDEBAR MENU DROPDOWN -->
            </li>
            <!-- /SIDEBAR MENU ITEM -->

            <!-- SIDEBAR MENU ITEM -->
            <li class="sidebar-menu-item">
                <!-- SVG ARROW -->
                <svg class="svg-arrow">
                    <use xlink:href="#svg-arrow"></use>
                </svg>
                <!-- /SVG ARROW -->
                <a href="#">Price Range</a>

                <!-- SIDEBAR MENU DROPDOWN -->
                <div class="sidebar-menu-dropdown big">
                    <input type="hidden" class="price-range-slider" value="500" form="shop_search_form">
                </div>
                <!-- /SIDEBAR MENU DROPDOWN -->
            </li>
            <!-- /SIDEBAR MENU ITEM -->
        </ul>
        <!-- /SIDEBAR MENU -->

        <!-- SIDEBAR FILTERS -->
        <div class="sidebar-filters">
            <form id="shop_filter_form" name="shop_filter_form">
                <label for="price_filter" class="select-block">
                    <select name="price_filter" id="price_filter">
                        <option value="0">Price (High to Low)</option>
                        <option value="1">Price (Low to High)</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
                <label for="itemspp_filter" class="select-block">
                    <select name="itemspp_filter" id="itemspp_filter">
                        <option value="0">12 Items Per Page</option>
                        <option value="1">6 Items Per Page</option>
                    </select>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
                    <!-- /SVG ARROW -->
                </label>
            </form>

            <!-- VIEW SELECTORS -->
            <div class="view-selectors">
                <a href="shop-gridview-v2.html" class="view-selector grid active"></a>
                <a href="shop-listview-v2.html" class="view-selector list"></a>
            </div>
            <!-- /VIEW SELECTORS -->

            <button form="shop_search_form" class="button dark-light">Update your Search</button>
        </div>
        <!-- /SIDEBAR FILTERS -->
    </div>
</div>
<!-- /SIDEBAR NAV -->


<!-- SECTION -->
	<div class="section-wrap">
		<div class="section">
			<!-- PRODUCT SHOWCASE -->
			<div class="product-showcase">
				<!-- PRODUCT LIST -->
				<div class="product-list grid column4-wrap" id="new">
					

				</div>
				<!-- /PRODUCT LIST -->
			</div>
			<!-- /PRODUCT SHOWCASE -->

			<div class="clearfix"></div>

			<!-- PAGER -->
			<div class="pager primary pager-produk" id="pprimary">
<!--
				<div class="pager-item"><p>1</p></div>
				<div class="pager-item active"><p>2</p></div>
				<div class="pager-item"><p>3</p></div>
				<div class="pager-item"><p>...</p></div>
				<div class="pager-item"><p>17</p></div>
-->
			</div>
			<!-- /PAGER -->
		</div>
	</div>
	<!-- /SECTION -->
