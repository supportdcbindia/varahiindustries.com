<?php include('header.php') ?>

<div class="breadCrumsWrapper" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Ribbon Blender</h2>
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
                        $data = glob("./assets/images/products/ribbon-blender/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Ribbon Blender Image">
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
                    <h2>Ribbon Blender</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries' Ribbon Blender</strong> is a high-performance mixer for homogeneous blending of dry powders, granules, and small liquid additions. Engineered for precision, it delivers uniform mixing in minimal time for pharmaceutical, chemical, agricultural, food, cosmetic, and mineral applications.</p>
                        <p>Available from <strong>500</strong> to <strong>20,000 liters</strong>, the range supports both batch production and bulk handling with low maintenance and dependable performance.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Working Principle -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Working Principle</h2>
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div><strong>Counter-Current Motion</strong>
                </div>
                <p>U-shaped trough houses a double helical ribbon: the outer ribbon moves material in one direction, the inner ribbon in the opposite—creating rapid axial and radial circulation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-gear"></i></div><strong>Driven Agitator</strong>
                </div>
                <p>Agitator shaft is powered by a motor with gear reducer to generate triple-action mixing (axial, radial, tangential) for high homogeneity, even with minor additives.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Technical Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:#fff;">
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>Useful Volume (Liters)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VRB-20000</td>
                            <td>60 - 75</td>
                            <td>20,000</td>
                        </tr>
                        <tr>
                            <td>VRB-15000</td>
                            <td>50 - 60</td>
                            <td>15,000</td>
                        </tr>
                        <tr>
                            <td>VRB-12500</td>
                            <td>40 - 50</td>
                            <td>12,500</td>
                        </tr>
                        <tr>
                            <td>VRB-10000</td>
                            <td>30 - 40</td>
                            <td>10,000</td>
                        </tr>
                        <tr>
                            <td>VRB-8000</td>
                            <td>30 - 40</td>
                            <td>8,000</td>
                        </tr>
                        <tr>
                            <td>VRB-6000</td>
                            <td>25 - 30</td>
                            <td>6,000</td>
                        </tr>
                        <tr>
                            <td>VRB-5000</td>
                            <td>20 - 25</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>VRB-4000</td>
                            <td>20 - 25</td>
                            <td>4,000</td>
                        </tr>
                        <tr>
                            <td>VRB-3000</td>
                            <td>15 - 20</td>
                            <td>3,000</td>
                        </tr>
                        <tr>
                            <td>VRB-2000</td>
                            <td>10 - 15</td>
                            <td>2,000</td>
                        </tr>
                        <tr>
                            <td>VRB-1500</td>
                            <td>10 - 12.5</td>
                            <td>1,500</td>
                        </tr>
                        <tr>
                            <td>VRB-1000</td>
                            <td>7.5 - 10</td>
                            <td>1,000</td>
                        </tr>
                        <tr>
                            <td>VRB-500</td>
                            <td>5 - 7.5</td>
                            <td>500</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-2">Custom capacities available on request.</p>
            </div>
        </div>
    </div>
</div>

<!-- Features & Design -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-feather-pointed"></i></div>
                        <div class="content">Gentle yet thorough mixing for powders, granules &amp; small liquid additions</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wrench"></i></div>
                        <div class="content">Customizable construction and options to suit applications</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Durable, low-maintenance, cost-effective design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-square"></i></div>
                        <div class="content">U-shaped trough with double helical ribbon agitator</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                        <div class="content">Triple-action mixing (axial, radial, tangential) for precision blending</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-box"></i></div>
                        <div class="content">Robust U-trough with bolted end plates; hygienic, easy-clean design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div class="content">Heavy-duty bearings for smooth, vibration-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield"></i></div>
                        <div class="content">Stuffing box with gland packing to prevent leakage</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Belt-pulley or geared motor drive options</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Optional Features -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="secTitle">
            <h2>Optional Features</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-water"></i></div>
                <div class="content">Fluid coupling for smooth starts under load</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                <div class="content">Liquid spray system for coating / humidifying powders</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-temperature-low"></i></div>
                <div class="content">Jacketed body for heating or cooling applications</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                <div class="content">Construction in SS / MS / polymer; interchangeable ribbons</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-ruler-combined"></i></div>
                <div class="content">Special sizes to suit layout; reverse/roaster type agitator</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                <div class="content">Control panel with VFD for variable speed</div>
            </li>
        </ul>
    </div>
</div>

<!-- Benefits -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Benefits</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">High mixing uniformity—even with minor ingredients</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Low maintenance; easy component access</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Fast discharge with optional bottom valve</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Easy cleaning with removable ribbons; silent operation</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Energy-efficient with optimal motor sizing</div>
            </li>
        </ul>
    </div>
</div>

<!-- Applications -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Applications</h2>
        </div>
        <div class="grid ThirdGrid">
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharmaceutical Powders</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask"></i></div>
                <div>
                    <h3>Chemical Compounds</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-palette"></i></div>
                <div>
                    <h3>Pigments &amp; Dyes</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-spa"></i></div>
                <div>
                    <h3>Pesticides &amp; Fertilizers</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                <div>
                    <h3>Food Powders &amp; Additives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                <div>
                    <h3>Mineral Powders</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-soap"></i></div>
                <div>
                    <h3>Detergents &amp; Soaps</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                <div>
                    <h3>Herbal &amp; Ayurvedic</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-regular fa-face-smile"></i></div>
                <div>
                    <h3>Cosmetic Powders</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- After Sales -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>After-Sales Service</h2>
        </div>
        <ul class="Featureslist ThirdGrid">
            <li>
                <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div class="content">Installation &amp; commissioning</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-clipboard-check"></i></div>
                <div class="content">Testing &amp; validation</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="content">Operator training</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-gear"></i></div>
                <div class="content">Spare parts availability</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">24/7 technical support</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-handshake-angle"></i></div>
                <div class="content">AMC &amp; maintenance services</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>