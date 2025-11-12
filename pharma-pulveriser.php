<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Pharma Pulverizer</h2>
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
                        $data = glob("./assets/images/products/pulverizer/pharma-pulverizer/*.*"); // <-- put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Pharma Pulverizer Image">
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
                    <h2>Pharma Pulverizer</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries</strong> is a trusted name in pharmaceutical processing equipment, offering high-precision Pharma Pulverizers engineered for <strong>GMP-compliant</strong>, contamination-free powder production of APIs, excipients, and herbal products.</p>
                        <p>With robust construction, advanced rotor–hammer technology, and efficient airflow systems, these pulverizers deliver uniform particle size, high productivity, and minimal dust generation. Systems are fully customizable to meet specific pharma requirements for fineness and output. End-to-end support—from installation and training to maintenance and spares—ensures long-term, reliable performance.</p>
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
                    <div class="icon"><i class="fa-solid fa-box-open"></i></div><strong>Feeding</strong>
                </div>
                <p>Raw material enters the grinding chamber via an automatic rotary feeder for steady, controlled feed.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div><strong>Size Reduction</strong>
                </div>
                <p>Rotating hammers/blades impact and shear the material into fine powder against replaceable liners.</p>
            </li>
            <li class="subListWrapper">
                <div class="subListContent">
                    <div class="iconContent">
                        <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Classification &amp; Collection</strong>
                    </div>
                </div>
                <ul class="sub-list">
                    <li>
                        <p>Airflow/blower conveys the powder to a cyclone collector for separation.</p>
                    </li>
                    <li>
                        <p>Oversize returns via a whizzer or perforated liner for re-pulverization—ensuring uniform fineness.</p>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Range &amp; Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>RPM (Machine)</th>
                            <th>Fineness (Mesh)</th>
                            <th>Output Range (Kg/Hr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PFP-12</td>
                            <td>7.5</td>
                            <td>2800–3500</td>
                            <td>80–200</td>
                            <td>50–60</td>
                        </tr>
                        <tr>
                            <td>PFP-16</td>
                            <td>10</td>
                            <td>2800–3500</td>
                            <td>80–200</td>
                            <td>80–100</td>
                        </tr>
                        <tr>
                            <td>PFP-20</td>
                            <td>10–15</td>
                            <td>2200</td>
                            <td>60–200</td>
                            <td>80–300</td>
                        </tr>
                        <tr>
                            <td>PFP-25</td>
                            <td>20–30</td>
                            <td>2000</td>
                            <td>60–200</td>
                            <td>150–450</td>
                        </tr>
                        <tr>
                            <td>PFP-32</td>
                            <td>50–60</td>
                            <td>1800</td>
                            <td>60–200</td>
                            <td>400–900</td>
                        </tr>
                        <tr>
                            <td>PFP-42</td>
                            <td>80–100</td>
                            <td>1800</td>
                            <td>60–200</td>
                            <td>600–1500</td>
                        </tr>
                    </tbody>
                </table>
                <p>All specifications are nominal and may vary with material properties and operating conditions.</p>
            </div>
        </div>
    </div>
</div>

<!-- Key Components & Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Components</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Main Body: SS / GMP-compliant construction with replaceable liners</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge-simple-high"></i></div>
                        <div class="content">Feeder: Variable-speed rotary feeder for precise feed control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-hammer"></i></div>
                        <div class="content">Rotor &amp; Hammers: High-strength rotors with hinged hammers</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Whizzer: Adjustable blades for particle size control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Blower: Hygienic, heavy-duty blower for smooth transport</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter"></i></div>
                        <div class="content">Cyclone Collector: Efficient separation of powder from air with minimal contamination</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Benefits</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                        <div class="content">High-precision pulverization for pharma-grade powders</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-braille"></i></div>
                        <div class="content">Uniform particle size distribution</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Minimal contamination; dust-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; maintenance; GMP-compliant design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Adjustable fineness for diverse formulations</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                        <div class="content">High productivity with controlled output</div>
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
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharmaceutical Industry</h3>
                    <p>APIs, excipients, premixes</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                <div>
                    <h3>Nutraceuticals &amp; Herbal</h3>
                    <p>Herbal medicines &amp; botanicals</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask"></i></div>
                <div>
                    <h3>Food Additives &amp; Fine Chemicals</h3>
                    <p>Precision grinding for specialty powders</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- After-Sales Support -->
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
                <div class="content">Operator training</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <div class="content">Spare parts availability</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">24/7 technical support &amp; maintenance</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>