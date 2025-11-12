<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Paddle Mixer</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/blender/paddle-mixer/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);
                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Paddle Mixer Image">
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
                    <h2>Paddle Mixer</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Paddle Mixer</strong> is a versatile and efficient solution for blending
                            powders, granules, and semi-solid materials. Engineered for chemicals, food, pharmaceuticals,
                            and minerals, it delivers uniform mixing with gentle handling—preventing degradation or segregation.</p>
                    </div>
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
                    <div class="icon"><i class="fa-solid fa-arrows-left-right"></i></div>
                    <strong>Counter-Rotating Paddles</strong>
                </div>
                <p>Paddles rotate in opposite directions to generate strong axial and radial movement.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                    <strong>Gentle Handling</strong>
                </div>
                <p>Achieves homogeneity without over-shearing sensitive products.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-temperature-half"></i></div>
                    <strong>Thermal Control (Optional)</strong>
                </div>
                <p>Jacketed design enables temperature-controlled mixing.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-download"></i></div>
                    <strong>Fast Discharge</strong>
                </div>
                <p>Bottom valve/flap provides complete and quick emptying.</p>
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
                            <td>PM-500</td>
                            <td>5 – 7.5</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>PM-1000</td>
                            <td>7.5 – 10</td>
                            <td>1,000</td>
                        </tr>
                        <tr>
                            <td>PM-2000</td>
                            <td>10 – 15</td>
                            <td>2,000</td>
                        </tr>
                        <tr>
                            <td>PM-5000</td>
                            <td>20 – 25</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>PM-10000</td>
                            <td>30 – 40</td>
                            <td>10,000</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Custom capacities available on request.</em></p>
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
                        <div class="content">U-shaped or rectangular trough with twin/multi-shaft paddles</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Counter-rotating paddles for axial &amp; radial mixing</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Handles dry, wet, or sticky materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">MS, SS 304, or SS 316 construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Optional jacketed body for heating/cooling</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Motorized shafts with gear reducer for consistent speed</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Easy to clean and maintain</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Heavy-duty fabricated body; bolted or welded troughs</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield"></i></div>
                        <div class="content">Hygienic &amp; safe: smooth surfaces, dust-proof covers</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Heavy-duty bearings &amp; seals for vibration-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Options: VFD, liquid injection, jacketed body, custom paddles</div>
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
                        <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                        <div class="content">Gentle yet thorough mixing of sensitive materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-equals"></i></div>
                        <div class="content">High batch-to-batch uniformity</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; low maintenance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
                        <div class="content">Suitable for R&amp;D and large-scale production</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Energy-efficient and low-noise</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Handles dry, semi-dry, and semi-solid materials</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemicals</h3>
                            <p>Powders &amp; granules</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                        <div>
                            <h3>Food</h3>
                            <p>Powders, dough &amp; spices</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>Fertilizers &amp; Feed</h3>
                            <p>Ingredients and premixes</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharmaceutical</h3>
                            <p>Powders &amp; semi-solids</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Pigments &amp; Minerals</h3>
                            <p>Dyes and mineral mixtures</p>
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
                        <div class="content">Installation &amp; commissioning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div class="content">Operator training &amp; validation support</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Spare parts supply</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-headset"></i></div>
                        <div class="content">24/7 technical assistance</div>
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