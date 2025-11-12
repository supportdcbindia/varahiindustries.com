<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Air Jet Mill</h2>
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
                        $data = glob("./assets/images/products/jet-mill/air-jet-mill/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Air Jet Mill Image">
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
                    <h2>Air Jet Mill</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Air Jet Mill</strong> is an advanced micronizing system that reduces particle sizes to the sub-micron range with <em>no moving parts inside the grinding chamber</em>. Using high-velocity jet streams, it achieves ultra-fine sizes with high purity and minimal contamination—ideal for pharmaceuticals, pigments, minerals, agrochemicals, and heat-sensitive materials.</p>
                        <p>Its robust, modular design ensures precision, efficiency, and clean operation for industries demanding high-quality micronized products.</p>
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
                <div class="secTitle">
                    <h2>Working Principle</h2>
                </div>
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Jet Injection</strong>
                        </div>
                        <p>Compressed air/steam enters through precision nozzles into a cylindrical chamber.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-circle-notch"></i></div><strong>Vortex &amp; Feeding</strong>
                        </div>
                        <p>High-velocity jets create a vortex; a Venturi system draws and meters the feed.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-burst"></i></div><strong>Particle–Particle Impact</strong>
                        </div>
                        <p>Particles collide at sonic speeds, reducing size via attrition and impact.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Internal Classification</strong>
                        </div>
                        <p>Fine particles exit centrally; coarse particles recirculate until target size is met.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div><strong>Collection</strong>
                        </div>
                        <p>Final product is collected in a cyclone or pulse-jet dust collector—ensuring high purity.</p>
                    </li>
                </ul>
                <p class="mt-3"><em><strong>Key advantage:</strong> No mechanical moving parts in the grinding zone—reduced wear and contamination.</em></p>
            </div>
        </div>
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
                            <td>VMF-2</td>
                            <td>1 – 2</td>
                            <td>10 – 15</td>
                            <td>25</td>
                            <td>0.6 × 0.6 × 1</td>
                        </tr>
                        <tr>
                            <td>VMF-4</td>
                            <td>3</td>
                            <td>20</td>
                            <td>45</td>
                            <td>1 × 1 × 1.5</td>
                        </tr>
                        <tr>
                            <td>VMF-6</td>
                            <td>10</td>
                            <td>30</td>
                            <td>75</td>
                            <td>2 × 1 × 1.5</td>
                        </tr>
                        <tr>
                            <td>VMF-8</td>
                            <td>22</td>
                            <td>40</td>
                            <td>125</td>
                            <td>3 × 1 × 2</td>
                        </tr>
                        <tr>
                            <td>VMF-10</td>
                            <td>40</td>
                            <td>50</td>
                            <td>200</td>
                            <td>4.5 × 2 × 4</td>
                        </tr>
                        <tr>
                            <td>VMF-12</td>
                            <td>65</td>
                            <td>60</td>
                            <td>265</td>
                            <td>4.5 × 2 × 4</td>
                        </tr>
                        <tr>
                            <td>VMF-15</td>
                            <td>100</td>
                            <td>75</td>
                            <td>380</td>
                            <td>5 × 2 × 4</td>
                        </tr>
                        <tr>
                            <td>VMF-18</td>
                            <td>160</td>
                            <td>120</td>
                            <td>530</td>
                            <td>5 × 2 × 5</td>
                        </tr>
                        <tr>
                            <td>VMF-20</td>
                            <td>210</td>
                            <td>150</td>
                            <td>650</td>
                            <td>5 × 2 × 5</td>
                        </tr>
                        <tr>
                            <td>VMF-24</td>
                            <td>400</td>
                            <td>250</td>
                            <td>1050</td>
                            <td>5 × 3.5 × 6</td>
                        </tr>
                        <tr>
                            <td>VMF-30</td>
                            <td>720</td>
                            <td>450</td>
                            <td>1725</td>
                            <td>6 × 3 × 7.5</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="OutputPoints">
                    <li><strong>Operating Pressure:</strong> 7–8 Kg/cm²</li>
                    <li><strong>Input Material Size:</strong> typically 200 mesh</li>
                    <li><strong>Micronization Output:</strong> down to 2 microns</li>
                </ul>
                <p class="mt-2">Performance varies with material properties, air pressure, and feed rate.</p>
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
                        <div class="icon"><i class="fa-solid fa-scale-balanced"></i></div>
                        <div class="content">Ultra-fine micron-level grinding (up to 2 microns)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-ban"></i></div>
                        <div class="content">No moving parts in the grinding chamber—minimal wear</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                        <div class="content">Ideal for heat-sensitive and abrasive materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-box-archive"></i></div>
                        <div class="content">Compact, space-saving, modular design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; fast batch changeover</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-circle-up"></i></div>
                        <div class="content">Top or bottom discharge options</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Low contamination, high-purity output; GMP available</div>
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
                                <td>Design Type</td>
                                <td>General Purpose / Pharma (GMP)</td>
                            </tr>
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

<!-- System Configuration -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>System Configuration</h2>
                </div>
                <ul class="Onlylist">
                    <li>Jet Mill (Grinding Unit)</li>
                    <li>Air Compressor (as per model)</li>
                    <li>Venturi-based Feeding System with Rotary Valve</li>
                    <li>Cyclone Separator</li>
                    <li>Pulse Jet Dust Collector</li>
                    <li>Control Panel</li>
                    <li>Support Structure / Frame</li>
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
                            <p>APIs, bulk drugs, excipients</p>
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
                            <p>Silica, talc, graphite, CaCO<sub>3</sub>, BaSO<sub>4</sub></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>Agrochemicals</h3>
                            <p>Insecticides, pesticides, fertilizers</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-cubes"></i></div>
                        <div>
                            <h3>Polymers</h3>
                            <p>PVC, ABS, PE, PP</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>Food Ingredients</h3>
                            <p>Starches, enzymes, additives</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-atom"></i></div>
                        <div>
                            <h3>Advanced Materials</h3>
                            <p>Battery, ceramics, aerospace composites</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- After-Sales -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Maintenance &amp; After-Sales Support</h2>
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
                <div class="content">Spare Parts Availability</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-file-shield"></i></div>
                <div class="content">AMC &amp; Preventive Maintenance</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">Technical Consultation &amp; Support</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>