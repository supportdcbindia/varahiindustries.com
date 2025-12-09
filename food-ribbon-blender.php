<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Food Ribbon Blender</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/blender/food-ribbon-blender/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) {
                        ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Food Ribbon Blender Image">
                                    </a>
                                </div>
                            </div>
                        <?php $first = false;
                        } ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-custom" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-custom" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <div class="carousel-indicators meartlab">
                        <?php $index = 0;
                        foreach ($images as $p) { ?>
                            <button type="button" data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $index; ?>"
                                class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-label="Slide <?php echo $index + 1; ?>">
                                <img src="<?php echo $p; ?>" alt="thumb <?php echo $index + 1; ?>">
                            </button>
                        <?php $index++;
                        } ?>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <h2>Food Ribbon Blender</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Food Ribbon Blender</strong> is engineered for uniform, efficient
                            mixing of food powders, ingredients, and additives. Built for the food processing industry,
                            it delivers high-quality blending while maintaining product safety, hygiene, and integrity.</p>
                        <p>With capacities ranging from small batches to large-scale production, it is ideal for flour,
                            spices, sugar mixes, baking powders, dairy powders, and more.</p>
                    </div>
<?php
                        include("inq-btn.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Working Principle</h2>
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div>
                    <strong>Counter-Current Mixing</strong>
                </div>
                <p>Double helical ribbons move product in opposite directions for fast, uniform mixing.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-left-right-to-line"></i></div>
                    <strong>Radial &amp; Axial Flow</strong>
                </div>
                <p>Combines radial and axial motion for even distribution of minor ingredients and additives.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                    <strong>Liquid Spray (Optional)</strong>
                </div>
                <p>Allows coating or moistening of powders during blending.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-download"></i></div>
                    <strong>Bottom Discharge</strong>
                </div>
                <p>Ensures quick and complete product removal.</p>
            </li>
        </ul>
    </div>
</section>

<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Technical Specifications (Indicative)</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>Useful Volume (Liters)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FRB-500</td>
                            <td>5 – 7.5</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>FRB-1000</td>
                            <td>7.5 – 10</td>
                            <td>1,000</td>
                        </tr>
                        <tr>
                            <td>FRB-2000</td>
                            <td>10 – 15</td>
                            <td>2,000</td>
                        </tr>
                        <tr>
                            <td>FRB-5000</td>
                            <td>20 – 25</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>FRB-10000</td>
                            <td>30 – 40</td>
                            <td>10,000</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Custom capacities are available on request.</em></p>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">U-shaped horizontal trough for uniform mixing</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Double helical ribbon agitator for counter-current movement</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Gentle mixing to avoid product degradation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Food-grade SS 304 / SS 316 construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Motorized agitator with variable speed control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Optional liquid spray for coating / humidifying</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Easy to clean and maintain for frequent changeovers</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                        <div class="content">Food-grade materials: SS 304 / SS 316</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                        <div class="content">Precision agitator with inner &amp; outer ribbons (triple-action)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sink"></i></div>
                        <div class="content">Hygienic design: wide opening lids, easy dismantle &amp; cleaning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cog"></i></div>
                        <div class="content">Heavy-duty bearings &amp; seals for smooth, vibration-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Options: VFD control, liquid spray, bottom discharge valve, special sizes</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Benefits</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-award"></i></div>
                        <div class="content">High mixing uniformity for food-grade quality</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div class="content">Minimal product degradation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; maintenance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Energy-efficient and low-noise operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Suitable for small and large batch production</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                        <div class="content">Optional coating / humidifying for special processing</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bread-slice"></i></div>
                        <div>
                            <h3>Flour, Sugar &amp; Spices</h3>
                            <p>Uniform blending of dry ingredients</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-mug-hot"></i></div>
                        <div>
                            <h3>Instant Mixes</h3>
                            <p>Beverages, baking, soups</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-cheese"></i></div>
                        <div>
                            <h3>Dairy Powders</h3>
                            <p>Milk-based &amp; nutritional powders</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Additives</h3>
                            <p>Functional &amp; processing aids</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-capsules"></i></div>
                        <div>
                            <h3>Supplements</h3>
                            <p>Nutraceuticals &amp; herbal blends</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>RTE &amp; Snack Mixes</h3>
                            <p>Seasonings &amp; premixes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="secTitle">
                    <h2>After-Sales Support</h2>
                </div>
                <ul class="Featureslist ThirdGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Installation and commissioning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div class="content">Operator training &amp; process guidance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Spare parts availability</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-headset"></i></div>
                        <div class="content">24/7 technical support</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-file-shield"></i></div>
                        <div class="content">AMC &amp; maintenance services</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>