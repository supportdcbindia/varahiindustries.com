<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Rotary Air Lock Valve</h2>
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
                        $data = glob("./assets/images/products/rotary-air-lock-valve/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Rotary Air Lock Valve Image">
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
                    <h2>Rotary Air Lock Valve</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Rotary Air Lock Valve</strong> is a precision-engineered solution for
                            controlling the flow of bulk materials between pneumatic conveying lines, gravity feeds, or
                            volumetric dosing points. It meters material consistently while maintaining differential air
                            pressure between connected equipment—minimizing leakage and maximizing system efficiency.</p>
                        <p>Essential in dust collection, cyclone discharge, bin/hopper unloading and feeder applications,
                            the valve ensures smooth, dust-free handling with reliable sealing performance.</p>
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
                    <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                    <strong>Inlet Charging</strong>
                </div>
                <p>Bulk material falls by gravity into the valve housing and fills rotor pockets.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                    <strong>Sealed Pocket Transfer</strong>
                </div>
                <p>A multi-vane rotor, driven via gearbox–motor, carries filled pockets from inlet to outlet while maintaining an air seal across the housing.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                    <strong>Discharge &amp; Metering</strong>
                </div>
                <p>Material discharges at the outlet; pocket volume and RPM define the volumetric feed rate for accurate, repeatable dosing.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                    <strong>Control</strong>
                </div>
                <p>Optional VFD enables speed modulation to match process requirements and downstream load.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Design & Construction -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Fabricated/cast housing with precision-bored body for tight clearances.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Helical or straight multi-vane rotor (closed or open end) for different products.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="content">End covers with stuffing box/mechanical seals to minimize air &amp; dust leakage.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Gearbox–motor drive with safety guards; optional chain/coupling arrangements.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div class="content">Materials: MS, SS 304/316, or special alloys as per application.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features &amp; Benefits</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <div class="content">Accurate volumetric metering for steady process control.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-lock"></i></div>
                        <div class="content">Excellent air sealing to maintain line pressure and reduce losses.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Dust-free operation; improved hygiene and safety.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Low maintenance with robust bearings and wear parts.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wave-square"></i></div>
                        <div class="content">VFD-ready for flexible throughput control and energy efficiency.</div>
                    </li>
                </ul>
            </div>
        </div>
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
                <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                <div>
                    <h3>Guar Gum &amp; Derivatives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                <div>
                    <h3>TKP &amp; CMTKP</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask"></i></div>
                <div>
                    <h3>CMC Powder &amp; Derivatives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-spa"></i></div>
                <div>
                    <h3>Psyllium Processing Units</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-vial"></i></div>
                <div>
                    <h3>Chemical Industries</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-palette"></i></div>
                <div>
                    <h3>Dyes &amp; Pigments</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                <div>
                    <h3>Ceramic Industries</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharmaceutical Industries</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                <div>
                    <h3>Food Processing Units</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-onion"></i></div>
                <div>
                    <h3>Onion &amp; Garlic Powder Plants</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-cubes"></i></div>
                <div>
                    <h3>Starch &amp; Derivatives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pepper-hot"></i></div>
                <div>
                    <h3>Spices Processing Plants</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-recycle"></i></div>
                <div>
                    <h3>Plastic Industries</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>