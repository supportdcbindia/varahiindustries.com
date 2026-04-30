<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Turmeric Pulveriser</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" >
                        <?php
                            $images = glob("./assets/images/products/pulverizer/turmeric-pulveriser/*.*");
                            $firstImage = $images[0] ?? null;

                            if ($firstImage) { ?>
                        <div class="carousel-item active" style="height: 420px;">
                            <img src="<?php echo $firstImage; ?>" class="d-block w-100" alt="Vibro Sifter">
                        </div>
                        <?php } ?>

                        <!-- 2nd Slide : Video -->
                        <div class="carousel-item"  style="height: 420px;">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/LltVhpOGF7A?autoplay=1&mute=1&loop=1&playlist=LltVhpOGF7A"
                                    allow="autoplay; encrypted-media"
                                    allowfullscreen>
                                </iframe>

                            </div>
                        </div>

                        <?php
                        foreach (array_slice($images, 1) as $img) { ?>
                        <div class="carousel-item">
                            <img src="<?php echo $img; ?>" class="d-block w-100" alt="Vibro Sifter">
                        </div>
                        <?php } ?>
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
                        <?php
                        $slide = 0;

                        /* 1st image */
                        ?>
                        <button class="active" data-bs-target="#carousel-custom" data-bs-slide-to="0">
                            <img src="<?= $images[0]; ?>">
                        </button>

                        <!-- 2nd : video -->
                        <button data-bs-target="#carousel-custom" data-bs-slide-to="1">
                            <img src="https://img.youtube.com/vi/LltVhpOGF7A/hqdefault.jpg">
                        </button>


                        <?php
                        /* rest images */
                        foreach (array_slice($images,1) as $img) { $slide++; ?>
                        <button data-bs-target="#carousel-custom" data-bs-slide-to="<?= $slide+1 ?>">
                            <img src="<?= $img ?>">
                        </button>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">

                    <h2>Turmeric Pulveriser</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Turmeric Pulveriser</strong> is a high-efficiency grinding machine
                            designed to process turmeric roots into fine, uniform powder—preserving aroma and color while
                            maximizing yield. Built for both small-scale and industrial operations, it delivers consistent
                            particle size and hygienic performance.</p>
                        <p>Widely used in spice, food, pharmaceutical, and herbal industries, it handles fresh or dried
                            turmeric and can produce coarse to ultra-fine grades as per requirement.</p>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <strong>Feeding</strong>
                </div>
                <p>Raw turmeric is fed through an automatic rotary feeder into the grinding chamber.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div>
                    <strong>Pulverization</strong>
                </div>
                <p>Rotating hammers/blades impact the material against liners to form fine powder.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div>
                    <strong>Classification</strong>
                </div>
                <p>Oversize is returned via a whizzer or perforated liner until target fineness is achieved.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                    <strong>Collection</strong>
                </div>
                <p>Blower carries powder to the cyclone collector; dust is minimized for clean, safe operation.</p>
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
                            <td>TRP-12</td>
                            <td>7.5</td>
                            <td>2800–3500</td>
                            <td>60–200</td>
                            <td>50–60</td>
                        </tr>
                        <tr>
                            <td>TRP-16</td>
                            <td>10</td>
                            <td>2800–3500</td>
                            <td>60–200</td>
                            <td>80–100</td>
                        </tr>
                        <tr>
                            <td>TRP-20</td>
                            <td>10–15</td>
                            <td>2200</td>
                            <td>40–200</td>
                            <td>80–300</td>
                        </tr>
                        <tr>
                            <td>TRP-25</td>
                            <td>20–30</td>
                            <td>2000</td>
                            <td>40–200</td>
                            <td>150–450</td>
                        </tr>
                        <tr>
                            <td>TRP-32</td>
                            <td>50–60</td>
                            <td>1800</td>
                            <td>40–200</td>
                            <td>400–900</td>
                        </tr>
                        <tr>
                            <td>TRP-42</td>
                            <td>80–100</td>
                            <td>1800</td>
                            <td>40–200</td>
                            <td>600–1500</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Specifications are nominal and vary with turmeric quality, moisture, and operating conditions.</em></p>
            </div>
        </div>
        <?php
                        include("inq-btn.php");
                    ?>
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
                        <div class="content">Main Body: Heavy-duty construction with replaceable liners.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <div class="content">Feeder: Variable-speed rotary feeder for controlled input.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                        <div class="content">Rotor &amp; Hammers: Durable rotor with hinged hammers for long life.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter-circle-xmark"></i></div>
                        <div class="content">Whizzer: Adjustable blades for particle size control.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="content">Blower: Heavy-duty blower for smooth powder conveyance.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cloud"></i></div>
                        <div class="content">Cyclone Collector: Efficient separation of powder from air stream.</div>
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
                        <div class="content">Efficient pulverization of turmeric and other spices</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Consistent, uniform powder quality</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Dust-free, hygienic operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Low maintenance and long-lasting components</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Adjustable fineness for varied processing needs</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                        <div class="content">High productivity and output</div>
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
                    <h2>Applications</h2>
                </div>
                <div class="grid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pepper-hot"></i></div>
                        <div>
                            <h3>Spice Processing</h3>
                            <p>Turmeric, ginger, chili &amp; herbal roots</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                        <div>
                            <h3>Food Industry</h3>
                            <p>Processing &amp; packaging operations</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharma &amp; Herbal</h3>
                            <p>Ayurvedic &amp; herbal formulations</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>After-Sales Support</h2>
                </div>
                <ul class="Featureslist">
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
        </div>
    </div>
</div>

<div class="ctaSec">
    <div class="container">
        <div class="ctaContentWrapper">
            <h5>Still can't decide which machine is best for you?</h5>
            <a href="#!" class="click1">Contact us Now</a>
        </div>
    </div>
</div>

<?php include('footer.php') ?>