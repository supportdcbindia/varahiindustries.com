<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Jaw Crusher</h2>
        </div>
    </div>
</div>

<div class="productDetails">
    <div class="container">
        <div class="row g-4">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/jaw-crusher/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true; foreach ($images as $p) { ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="productImage">
                                <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                    <img src="<?php echo $p; ?>" alt="Jaw Crusher Image">
                                </a>
                            </div>
                        </div>
                        <?php $first = false; } ?>
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
                        <?php $index = 0; foreach ($images as $p) { ?>
                        <button type="button" data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $index; ?>"
                                class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-label="Slide <?php echo $index + 1; ?>">
                            <img src="<?php echo $p; ?>" alt="thumb <?php echo $index + 1; ?>">
                        </button>
                        <?php $index++; } ?>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <div class="sectionHeader">
                        <h2>Jaw Crusher</h2>
                    </div>

                    <div class="desc">
                        <p><strong>Varahi Industries</strong> is a leading manufacturer and exporter of high-performance
                           Jaw Crushers in India. Engineered for primary and secondary crushing, our machines deliver
                           reliable output with minimal maintenance across mining, construction, chemical, and industrial
                           applications.</p>
                        <p>The crusher works on the <em>compression principle</em>: material is compressed between a fixed
                           jaw plate and a moving swing jaw driven by an eccentric mechanism. The crushed product exits
                           from the bottom outlet, ensuring uniform size and optimized throughput.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Working Principle -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Working Principle</h2>
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                            <strong>Feeding:</strong>
                        </div>
                        <p>Material enters the crushing chamber from the top feed opening.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-arrows-to-dot"></i></div>
                            <strong>Compression:</strong>
                        </div>
                        <p>The swing jaw moves against the fixed jaw, applying compressive force to break the material.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-wave-square"></i></div>
                            <strong>Eccentric Motion:</strong>
                        </div>
                        <p>Toggle and eccentric shaft translate rotational motion into powerful crushing strokes.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
                            <strong>Discharge:</strong>
                        </div>
                        <p>Crushed material exits through the adjustable bottom outlet for uniform sizing.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr><th colspan="5">Technical Specifications</th></tr>
                        <tr>
                            <th>Model</th>
                            <th>Feed Size (mm)</th>
                            <th>Output Size (mm)</th>
                            <th>Capacity (TPH)</th>
                            <th>Motor Power (HP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>VJC-8x4</td><td>Up to 75</td><td>10–25</td><td>1–3</td><td>5</td></tr>
                        <tr><td>VJC-12x7</td><td>Up to 100</td><td>10–30</td><td>3–6</td><td>7.5</td></tr>
                        <tr><td>VJC-16x9</td><td>Up to 125</td><td>10–40</td><td>5–12</td><td>10–12.5</td></tr>
                        <tr><td>VJC-20x12</td><td>Up to 150</td><td>10–50</td><td>8–20</td><td>15–20</td></tr>
                        <tr><td>VJC-24x15</td><td>Up to 175</td><td>10–75</td><td>15–30</td><td>25–30</td></tr>
                    </tbody>
                </table>
                <p><em>Capacities are approximate and vary with material hardness, feed size, and operating conditions.</em></p>
            </div>
        </div>
    </div>
</div>

<!-- Design & Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
                <h2>Design &amp; Features</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background:#555;color:#fff;">
                            <tr>
                                <th>Feature</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Robust Construction</td>
                                <td>Heavy-duty fabricated body from MS or cast steel</td>
                            </tr>
                            <tr>
                                <td>Efficient Crushing</td>
                                <td>Deep chamber with optimized nip angle for high reduction ratio</td>
                            </tr>
                            <tr>
                                <td>Toggle Mechanism</td>
                                <td>Single-toggle design for reliability and fewer moving parts</td>
                            </tr>
                            <tr>
                                <td>Jaw Plates</td>
                                <td>Replaceable manganese steel plates for long service life</td>
                            </tr>
                            <tr>
                                <td>Flywheels</td>
                                <td>Balanced flywheels for smooth operation and high inertia</td>
                            </tr>
                            <tr>
                                <td>Bearings</td>
                                <td>Heavy-duty, dust-proof bearings for continuous duty</td>
                            </tr>
                            <tr>
                                <td>Adjustment</td>
                                <td>Manual or hydraulic setting adjustment (CSS)</td>
                            </tr>
                            <tr>
                                <td>Mounting</td>
                                <td>Skid-mounted or wheel-mounted options for portability</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
</div>

<!-- Applications -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
                <h2>Applications</h2>
                <div class="grid">
                    <div class="card"><div class="icon"><i class="fa-solid fa-gem"></i></div><div><h3>Mining &amp; Mineral Processing</h3><p>Primary &amp; secondary crushing</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-city"></i></div><div><h3>Construction Materials</h3><p>Aggregates, building stone</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-fire-burner"></i></div><div><h3>Ceramics &amp; Refractories</h3><p>Raw material size reduction</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-flask"></i></div><div><h3>Chemicals &amp; Fertilizers</h3><p>Crushing of salts &amp; chemicals</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-mountain"></i></div><div><h3>Coal, Lime &amp; Rock</h3><p>Robust handling of tough feed</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-recycle"></i></div><div><h3>Recycling</h3><p>Concrete, asphalt &amp; demolition waste</p></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Support -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sectionHeader">
                    <h2>After-Sales Support</h2>
                </div>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-boxes-packing"></i></div><div class="content">Spare parts availability</div></li>
                    <li><div class="icon"><i class="fa-solid fa-file-shield"></i></div><div class="content">Maintenance &amp; service contracts</div></li>
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">On-site installation &amp; commissioning</div></li>
                    <li><div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div><div class="content">Operator training</div></li>
                    <li><div class="icon"><i class="fa-solid fa-headset"></i></div><div class="content">Quick-response technical support</div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
