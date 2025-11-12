<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Mineral Pulveriser</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row g-4">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/pulverizer/mineral-pulveriser/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Mineral Pulveriser Image">
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
                    <h2>Mineral Pulveriser</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Mineral Pulveriser</strong> is a robust, high-performance grinding solution
                            for efficient pulverization of a wide range of minerals. Built for durability and precision, it reduces
                            hard and abrasive minerals to fine, uniform powders while maintaining high productivity and efficiency.</p>
                        <p>Ideal for mineral processing, construction, ceramics, chemicals, and fertilizers—suitable for
                            bauxite, calcite, coal, limestone, gypsum, POP, marble, dolomite, bentonite, and more. Mechanical impact
                            with air classification delivers superior fineness control with minimal dust and safe operation.</p>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <strong>Feeding</strong>
                </div>
                <p>Raw mineral is fed into the grinding chamber via an automatic rotary feeder for steady, controlled input.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div>
                    <strong>Impact Grinding</strong>
                </div>
                <p>Rotary hammers strike the material against replaceable liners, rapidly reducing particle size.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div>
                    <strong>Air Classification</strong>
                </div>
                <p>An adjustable whizzer returns oversize to the chamber until the target fineness is achieved.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                    <strong>Collection</strong>
                </div>
                <p>Blower conveys fines to the cyclone collector; dust emissions are minimized for safe operation.</p>
            </li>
        </ul>
    </div>
</section>

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
                            <th>Fineness (Mesh Size)</th>
                            <th>Output Range (Kg/Hr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MNP-12</td>
                            <td>7.5</td>
                            <td>2800–3500</td>
                            <td>100–300</td>
                            <td>50–60</td>
                        </tr>
                        <tr>
                            <td>MNP-16</td>
                            <td>10</td>
                            <td>2800–3500</td>
                            <td>100–300</td>
                            <td>80–100</td>
                        </tr>
                        <tr>
                            <td>MNP-20</td>
                            <td>10–15</td>
                            <td>2200</td>
                            <td>75–300</td>
                            <td>80–300</td>
                        </tr>
                        <tr>
                            <td>MNP-25</td>
                            <td>20–30</td>
                            <td>2000</td>
                            <td>75–300</td>
                            <td>150–450</td>
                        </tr>
                        <tr>
                            <td>MNP-32</td>
                            <td>50–60</td>
                            <td>1800</td>
                            <td>75–300</td>
                            <td>400–900</td>
                        </tr>
                        <tr>
                            <td>MNP-42</td>
                            <td>80–100</td>
                            <td>1800</td>
                            <td>75–300</td>
                            <td>600–1500</td>
                        </tr>
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
                <div class="secTitle">
                    <h2>Key Components</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Main Body: Heavy-duty chamber with replaceable liners.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <div class="content">Feeder: Variable-speed rotary feeder for controlled feeding.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                        <div class="content">Rotor &amp; Hammers: High-strength rotor with hinged hammers.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter-circle-xmark"></i></div>
                        <div class="content">Whizzer: Adjustable blades to dial-in particle size.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="content">Blower: Heavy-duty blower for conveying ground material.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cloud"></i></div>
                        <div class="content">Cyclone Collector: Efficient separation of fine powder from air.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Benefits</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Efficient pulverization of hard, abrasive minerals</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Uniform particle size distribution</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Dust-free, safe operation with cyclone system</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Low maintenance, long-life components</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Adjustable fineness with high throughput</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section">
    <div class="container">
        <div class="secTitle">
            <h2>Applications</h2>
        </div>
        <div class="grid ThirdGrid">
            <div class="card">
                <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                <div>
                    <h3>Minerals</h3>
                    <p>Bauxite, Calcite, Coal, Limestone</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-gem"></i></div>
                <div>
                    <h3>Stone &amp; Clays</h3>
                    <p>Soapstone, China Clay, Dolomite, Bentonite</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-regular fa-square-full"></i></div>
                <div>
                    <h3>Gypsum &amp; POP</h3>
                    <p>Gypsum, Plaster of Paris, Marble</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-industry"></i></div>
                <div>
                    <h3>Other Mineral Powders</h3>
                    <p>For chemicals, construction, ceramics &amp; fertilizers</p>
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