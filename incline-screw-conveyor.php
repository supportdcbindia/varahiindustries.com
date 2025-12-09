<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Incline Screw Conveyor</h2>
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
                        $data = glob("./assets/images/products/screw-conveyor-feeder/incline-screw-conveyor/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Incline Screw Conveyor Image">
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
                    <h2>Incline Screw Conveyor</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Incline Screw Conveyor</strong> transports bulk materials
                            at an angle for reliable lifting of powders, granules, and particulates from one level
                            to another. A rotating helical flight inside a <em>U-trough</em> or enclosed
                            <em>O-tube</em> maintains smooth, consistent flow even on upward inclines.
                        </p>
                        <p>The screw is mounted on a central shaft and powered by a gearbox–motor set. For precise
                            throughput control, an optional VFD adjusts speed based on material characteristics and
                            process requirements—delivering a low-maintenance, energy-efficient solution for continuous duty.</p>
                    </div>
<?php
                        include("inq-btn.php");
                    ?>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div><strong>Infeed</strong>
                </div>
                <p>Material enters the lower inlet and settles in the trough/tube.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div><strong>Helical Lift</strong>
                </div>
                <p>Rotating screw flights generate axial movement and frictional lift to convey material uphill.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-gauge-high"></i></div><strong>Rate Control</strong>
                </div>
                <p>Gearbox–motor RPM (VFD optional) regulates capacity for different products and angles.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-square-arrow-up-right"></i></div><strong>Discharge</strong>
                </div>
                <p>Product discharges at the elevated outlet into downstream equipment or storage.</p>
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
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Central shaft with precision-formed helical flights; constant or variable pitch.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content"><strong>U-trough</strong> (easy access) or <strong>O-tube</strong> (dust-tight) configurations.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-circle-nodes"></i></div>
                        <div class="content">Heavy-duty end bearings, intermediate hangers for long runs, and effective seals.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Gearbox–motor with guards; inspection doors and clean-out ports.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Materials of construction: MS, SS 304/316 per hygiene/corrosion needs.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Options &amp; Controls</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-wave-square"></i></div>
                        <div class="content">VFD for variable speed and gentle handling of fragile products.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter"></i></div>
                        <div class="content">Dust-tight covers, venting, and wear liners for abrasive materials.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <div class="content">Level sensors, interlocks, and synchronization with upstream equipment.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy-clean design with removable covers and quick-release sections.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Benefits -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="secTitle">
                    <h2>Key Benefits</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Reliable uphill conveying with compact footprint.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Energy-efficient, low-maintenance operation for continuous duty.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Consistent, controllable throughput with VFD speed tuning.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Dust-tight options enhance plant hygiene and safety.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Applications -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>Psyllium Processing</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-vial"></i></div>
                        <div>
                            <h3>Chemicals &amp; Dyes</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Ceramics</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharmaceuticals</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>Food Processing</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-onion"></i></div>
                        <div>
                            <h3>Onion &amp; Garlic Powder</h3>
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
                            <h3>Spice Processing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>