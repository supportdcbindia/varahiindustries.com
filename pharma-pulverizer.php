<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Pharma Pulverizer</h2>
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
                        $data = glob("./assets/images/products/pulverizer/pharma-pulverizer/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true; foreach ($images as $p) { ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="productImage">
                                <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                    <img src="<?php echo $p; ?>" alt="Pharma Pulverizer Image">
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
                        <h2>Pharma Pulverizer</h2>
                    </div>

                    <div class="desc">
                        <p><strong>Varahi Industries</strong> offers high-precision Pharma Pulverizers engineered for
                           GMP-compliant, contamination-free powder production. Robust construction, advanced rotor–hammer
                           technology, and efficient airflow systems deliver uniform particle size, high productivity, and
                           minimal dust generation.</p>
                        <p>Fully customizable to pharma requirements, our systems provide precise control over fineness and
                           output. We also provide end-to-end support—from installation and operator training to maintenance
                           and spare parts—for long-term, reliable performance.</p>
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
        <div class="row">
            <div class="col-12">
                <h2>Working Principle</h2>
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                            <strong>Feeding:</strong>
                        </div>
                        <p>Raw material is metered into the grinding chamber via an automatic rotary feeder.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-hammer"></i></div>
                            <strong>Pulverization:</strong>
                        </div>
                        <p>Rotating hammers/blades impact the product against liners to produce fine powder.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-filter"></i></div>
                            <strong>Classification:</strong>
                        </div>
                        <p>Oversize is returned for re-pulverization via an adjustable whizzer or perforated liner until the target fineness is achieved.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                            <strong>Collection:</strong>
                        </div>
                        <p>Airflow/blower conveys the powder to a cyclone collector for hygienic, low-dust operation.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th colspan="5">Range &amp; Specifications</th>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>RPM (Machine)</th>
                            <th>Fineness (Mesh Size)</th>
                            <th>Output Range (Kg/Hr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>PFP-12</td><td>7.5</td><td>2800–3500</td><td>80–200</td><td>50–60</td></tr>
                        <tr><td>PFP-16</td><td>10</td><td>2800–3500</td><td>80–200</td><td>80–100</td></tr>
                        <tr><td>PFP-20</td><td>10–15</td><td>2200</td><td>60–200</td><td>80–300</td></tr>
                        <tr><td>PFP-25</td><td>20–30</td><td>2000</td><td>60–200</td><td>150–450</td></tr>
                        <tr><td>PFP-32</td><td>50–60</td><td>1800</td><td>60–200</td><td>400–900</td></tr>
                        <tr><td>PFP-42</td><td>80–100</td><td>1800</td><td>60–200</td><td>600–1500</td></tr>
                    </tbody>
                </table>
                <p><em>All specifications are nominal and may vary with material properties and operating conditions.</em></p>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <h2>Key Components</h2>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-industry"></i></div><div class="content"><strong>Main Body:</strong> SS/GMP-compliant construction with replaceable liners.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-gauge"></i></div><div class="content"><strong>Feeder:</strong> Variable-speed rotary feeder for precise dosing.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-rotate"></i></div><div class="content"><strong>Rotor &amp; Hammers:</strong> High-strength rotor with hinged hammers.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-filter-circle-xmark"></i></div><div class="content"><strong>Whizzer:</strong> Adjustable blades to control particle size.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content"><strong>Blower:</strong> Heavy-duty, hygienic blower for smooth conveyance.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-cloud"></i></div><div class="content"><strong>Cyclone Collector:</strong> Efficient powder–air separation for minimal contamination.</div></li>
                </ul>
            </div>

            <div class="col-lg-6">
                <h2>Benefits</h2>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">High-precision pulverization for pharma-grade powders</div></li>
                    <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Uniform particle size distribution</div></li>
                    <li><div class="icon"><i class="fa-solid fa-shield-heart"></i></div><div class="content">Minimal contamination &amp; dust-free operation</div></li>
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">Easy cleaning &amp; maintenance (GMP design)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-sliders"></i></div><div class="content">Adjustable fineness for diverse formulations</div></li>
                    <li><div class="icon"><i class="fa-solid fa-chart-line"></i></div><div class="content">High productivity with controlled output</div></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <h2>Applications</h2>
                <div class="grid">
                    <div class="card"><div class="icon"><i class="fa-solid fa-pills"></i></div><div><h3>Pharmaceuticals</h3><p>APIs, excipients, ready-to-compress blends</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Nutraceuticals &amp; Herbal</h3><p>Plant extracts &amp; herbal powders</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-flask"></i></div><div><h3>Fine Chemicals &amp; Additives</h3><p>Food additives &amp; specialty ingredients</p></div></div>
                </div>
            </div>

            <div class="col-lg-6">
                <h2>After-Sales Support</h2>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">Installation &amp; commissioning</div></li>
                    <li><div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div><div class="content">Operator training</div></li>
                    <li><div class="icon"><i class="fa-solid fa-boxes-packing"></i></div><div class="content">Spare parts availability</div></li>
                    <li><div class="icon"><i class="fa-solid fa-headset"></i></div><div class="content">24/7 technical support &amp; maintenance</div></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
