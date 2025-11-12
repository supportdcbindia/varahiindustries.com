<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Lab Air Jet Mill</h2>
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
                        $data = glob("./assets/images/products/jet-mill/lab-air-jet-mill/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Lab Air Jet Mill Image">
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
                    <h2>Lab Air Jet Mill</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Lab Air Jet Mill</strong> is a precision micronizing system for laboratory and pilot-scale work. It reduces powders to sub-micron sizes with <em>no moving parts inside the grinding chamber</em>, delivering reproducible, contamination-free results for R&amp;D, QC, and small-batch production in pharma, chemicals, pigments, and advanced materials.</p>
                        <p>The compact, modular design enables high efficiency, fast cleaning, and easy scale-up to production systems.</p>
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
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Jet Injection</strong>
                </div>
                <p>Compressed air enters via high-velocity nozzles into a cylindrical chamber.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-circle-notch"></i></div><strong>Vortex &amp; Venturi Feed</strong>
                </div>
                <p>A high-speed vortex forms; a Venturi feeder precisely meters the powder.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-burst"></i></div><strong>Particle–Particle Impact</strong>
                </div>
                <p>Particles collide at high speed, micronizing by attrition and impact.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Self-Classification</strong>
                </div>
                <p>Fine particles exit centrally; coarse particles recirculate for further grinding.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div><strong>Clean Collection</strong>
                </div>
                <p>Product is collected in a cyclone or pulse-jet dust collector for high-purity output.</p>
            </li>
        </ul>
        <p class="mt-3"><em><strong>Key advantage:</strong> No moving parts in the grinding zone—minimal wear and contamination.</em></p>
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
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Capacity (Kg/Hr)</th>
                            <th>Air Compressor (HP)</th>
                            <th>Air FAD (CFM)</th>
                            <th>Space Required (L × W × H, m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LJF-0.5</td>
                            <td>0.1 – 0.5</td>
                            <td>5 – 7</td>
                            <td>10</td>
                            <td>0.5 × 0.5 × 1</td>
                        </tr>
                        <tr>
                            <td>LJF-1</td>
                            <td>0.5 – 1</td>
                            <td>7 – 10</td>
                            <td>15</td>
                            <td>0.6 × 0.6 × 1.2</td>
                        </tr>
                        <tr>
                            <td>LJF-2</td>
                            <td>1 – 2</td>
                            <td>10 – 15</td>
                            <td>25</td>
                            <td>0.6 × 0.6 × 1.5</td>
                        </tr>
                        <tr>
                            <td>LJF-5</td>
                            <td>3 – 5</td>
                            <td>15 – 20</td>
                            <td>40</td>
                            <td>1 × 1 × 1.5</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="OutputPoints">
                    <li><strong>Operating Pressure:</strong> 6–8 Kg/cm²</li>
                    <li><strong>Input Material Size:</strong> typically 200 mesh</li>
                    <li><strong>Micronization Output:</strong> down to 1–2 microns</li>
                </ul>
                <p class="mt-2">Performance depends on material properties, feed rate, and air pressure.</p>
            </div>
        </div>
    </div>
</div>

<!-- Features & Benefits -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features &amp; Benefits</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                        <div class="content">Ultra-fine particle size down to 1–2 microns</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div class="content">Compact, lab-friendly, GMP-capable design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                        <div class="content">Great for heat-sensitive &amp; abrasive materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-ban"></i></div>
                        <div class="content">No moving parts in grinding chamber—low maintenance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning and quick batch changeover</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-circle-up"></i></div>
                        <div class="content">Top or bottom discharge options</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Low contamination with high-purity output</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Fast, reproducible results for R&amp;D</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Customization &amp; Options</h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background:#555;color:#fff;">
                            <tr>
                                <th>Component</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Construction</td>
                                <td>MS / SS 304 / SS 316 / Polymer</td>
                            </tr>
                            <tr>
                                <td>Liners</td>
                                <td>Tungsten Carbide, Ceramic, PTFE, PU, or custom</td>
                            </tr>
                            <tr>
                                <td>Discharge Type</td>
                                <td>Top or Bottom</td>
                            </tr>
                            <tr>
                                <td>Feeding System</td>
                                <td>Venturi-based precise feed control</td>
                            </tr>
                            <tr>
                                <td>Dust Collection</td>
                                <td>Cyclone, Dust Collector, Pulse Jet, or combinations</td>
                            </tr>
                            <tr>
                                <td>Material Collection</td>
                                <td>Manual or automatic bagging system</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- System Configuration & Applications -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>System Configuration</h2>
                </div>
                <ul class="Onlylist">
                    <li>Lab Jet Mill (Grinding Unit)</li>
                    <li>Compressed Air Supply (as per model)</li>
                    <li>Venturi-based Feeding System with Rotary Valve</li>
                    <li>Cyclone Separator / Pulse Jet Dust Collector</li>
                    <li>Control Panel</li>
                    <li>Compact Support Frame</li>
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
                            <h3>Pharmaceuticals</h3>
                            <p>APIs, excipients, fine powders</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Pigments &amp; Dyes</h3>
                            <p>Organic &amp; inorganic colorants</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Minerals</h3>
                            <p>Talc, CaCO<sub>3</sub>, silica, graphite</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
                        <div>
                            <h3>Chemicals</h3>
                            <p>Fine chemicals &amp; specialty powders</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>Food Ingredients</h3>
                            <p>Spices, starches, additives</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div>
                            <h3>R&amp;D / Pilot</h3>
                            <p>Formulation testing &amp; scale-up</p>
                        </div>
                    </div>
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
                <div class="secTitle">
                    <h2>Maintenance &amp; Support</h2>
                </div>
                <ul class="Featureslist ThirdGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Installation &amp; Commissioning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div class="content">Operator Training</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Spare Parts &amp; AMC Support</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-headset"></i></div>
                        <div class="content">Technical Assistance</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>