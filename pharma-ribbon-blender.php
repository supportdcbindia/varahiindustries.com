<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Pharma Ribbon Blender</h2>
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
                        $data = glob("./assets/images/products/blender/pharma-ribbon-blender/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);
                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Pharma Ribbon Blender Image">
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
                    <h2>Pharma Ribbon Blender</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Pharma Ribbon Blender</strong> is engineered for contamination-free,
                            uniform mixing of powders, granules, and minor liquid additives in pharmaceutical production.
                            It delivers high precision, hygiene, and repeatable results—ideal for API powders, excipients,
                            nutraceuticals, and other pharma formulations.</p>
                        <p>Designed for GMP environments with validated cleaning and closed-system operation for dust control.</p>
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
                <p>Double helical ribbon agitator moves material in opposite directions for rapid, uniform blending.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-left-right-to-line"></i></div>
                    <strong>Axial &amp; Radial Flow</strong>
                </div>
                <p>Ensures homogeneity even with small percentages of additives.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                    <strong>Liquid Spray (Optional)</strong>
                </div>
                <p>For wetting or coating powders during granulation/blending.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-download"></i></div>
                    <strong>Bottom Discharge</strong>
                </div>
                <p>Quick, complete discharge of blended pharmaceutical powders.</p>
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
                            <td>PRB-500</td>
                            <td>5 – 7.5</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>PRB-1000</td>
                            <td>7.5 – 10</td>
                            <td>1,000</td>
                        </tr>
                        <tr>
                            <td>PRB-2000</td>
                            <td>10 – 15</td>
                            <td>2,000</td>
                        </tr>
                        <tr>
                            <td>PRB-5000</td>
                            <td>20 – 25</td>
                            <td>5,000</td>
                        </tr>
                        <tr>
                            <td>PRB-10000</td>
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
                        <div class="content">U-shaped trough with double helical ribbon agitator</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Counter-current movement for fast, uniform blending</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">SS 316 / SS 304 construction for contamination-free processing</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Optional liquid spray system for coating/humidification</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Closed system design for minimal dust &amp; controlled environment</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Motorized agitator with VFD for variable speed</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Easy to clean, dismantle, and validate (GMP)</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-certificate"></i></div>
                        <div class="content">GMP-compliant: smooth surfaces for easy cleaning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                        <div class="content">Precision agitator for uniform mixing, minimal segregation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Fully enclosed design to prevent contamination &amp; dust</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Heavy-duty bearings &amp; seals for vibration-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Options: VFD, liquid spray, jacketed body, top/bottom discharge</div>
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
                        <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <div class="content">High mixing uniformity with precise dosage control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-ban"></i></div>
                        <div class="content">Minimal risk of cross-contamination</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-volume-low"></i></div>
                        <div class="content">Energy-efficient, low-noise operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy to clean and validate for GMP</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Suitable for R&amp;D and large-scale production</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>APIs &amp; Excipients</h3>
                            <p>Uniform blending for dosage forms</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                        <div>
                            <h3>Herbal &amp; Ayurvedic</h3>
                            <p>Fine powders &amp; blends</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-capsules"></i></div>
                        <div>
                            <h3>Nutraceuticals</h3>
                            <p>Supplements &amp; premixes</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-vial"></i></div>
                        <div>
                            <h3>Granules &amp; Minerals</h3>
                            <p>Vitamins, minerals, trace mixes</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-tablets"></i></div>
                        <div>
                            <h3>Tablet/Capsule Feed</h3>
                            <p>Consistent blend uniformity</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-regular fa-hospital"></i></div>
                        <div>
                            <h3>Clinical &amp; Commercial</h3>
                            <p>GMP-ready batch processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
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
                <div class="content">24/7 technical support</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-file-shield"></i></div>
                <div class="content">AMC &amp; maintenance services</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>