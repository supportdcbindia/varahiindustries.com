<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Jet Mill – Micronizing System</h2>
        </div>
    </div>
</div>

<div class="productDetails">
    <div class="container">
        <div class="row">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/jet-mill/*.*"); // images folder for this product
                        $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) {
                        ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="productImage">
                                <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                    <img src="<?php echo $p; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <?php
                            $first = false;
                        }
                        ?>
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
                        $index = 0;
                        foreach ($images as $p) {
                        ?>
                        <button type="button" data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $index; ?>"
                                class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-label="Slide <?php echo $index + 1; ?>">
                            <img src="<?php echo $p; ?>" alt="">
                        </button>
                        <?php
                            $index++;
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Intro -->
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <div class="sectionHeader">
                        <h2>Jet Mill – Micronizing System</h2>
                    </div>

                    <div class="desc">
                        <p><strong>Varahi Jet Mill</strong> is an advanced micronizing system designed to reduce particle sizes to the sub-micron level without any moving parts inside the grinding chamber. Built for <em>precision, efficiency, and versatility</em>, it utilizes high-velocity jet streams to achieve ultra-fine particle sizes — ideal for <strong>pharmaceuticals, pigments, minerals, agrochemicals,</strong> and heat-sensitive materials.</p>
                        <p>Manufactured with robust design and modular options, Varahi Jet Mills are widely used across industries where <strong>ultra-fine grinding, high purity,</strong> and <strong>clean operation</strong> are essential.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th colspan="5">Technical Specifications</th>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <th>Capacity (Kg/Hr)</th>
                            <th>Air Compressor HP</th>
                            <th>Air FAD (CFM)</th>
                            <th>Space Required (L×W×H in m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>VMF-2</td><td>1 – 2</td><td>10 – 15</td><td>25</td><td>0.6 × 0.6 × 1</td></tr>
                        <tr><td>VMF-4</td><td>3</td><td>20</td><td>45</td><td>1 × 1 × 1.5</td></tr>
                        <tr><td>VMF-6</td><td>10</td><td>30</td><td>75</td><td>2 × 1 × 1.5</td></tr>
                        <tr><td>VMF-8</td><td>22</td><td>40</td><td>125</td><td>3 × 1 × 2</td></tr>
                        <tr><td>VMF-10</td><td>40</td><td>50</td><td>200</td><td>4.5 × 2 × 4</td></tr>
                        <tr><td>VMF-12</td><td>65</td><td>60</td><td>265</td><td>4.5 × 2 × 4</td></tr>
                        <tr><td>VMF-15</td><td>100</td><td>75</td><td>380</td><td>5 × 2 × 4</td></tr>
                        <tr><td>VMF-18</td><td>160</td><td>120</td><td>530</td><td>5 × 2 × 5</td></tr>
                        <tr><td>VMF-20</td><td>210</td><td>150</td><td>650</td><td>5 × 2 × 5</td></tr>
                        <tr><td>VMF-24</td><td>400</td><td>250</td><td>1050</td><td>5 × 3.5 × 6</td></tr>
                        <tr><td>VMF-30</td><td>720</td><td>450</td><td>1725</td><td>6 × 3 × 7.5</td></tr>
                    </tbody>
                </table>

                <p><strong>Operating Pressure:</strong> 7–9 Kg/cm²<br>
                   <strong>Input Material Size:</strong> Typically 200 mesh<br>
                   <strong>Micronization Output:</strong> Down to 2 Micron<br>
                   Performance varies depending on material properties, air pressure, and feed rate.</p>
            </div>
        </div>
    </div>
</div>

<!-- Applications (two parts from the screenshot) -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Applications</h2>
                <p><strong>Varahi Jet Mill</strong> is ideal for micronizing:</p>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-capsules"></i></div><div class="content"><strong>Pharmaceuticals:</strong> APIs, bulk drugs, excipients</div></li>
                    <li><div class="icon"><i class="fa-solid fa-palette"></i></div><div class="content"><strong>Pigments &amp; Dyes:</strong> Organic and inorganic colorants</div></li>
                    <li><div class="icon"><i class="fa-regular fa-gem"></i></div><div class="content"><strong>Minerals:</strong> Silica, talc, graphite, calcium carbonate, barium sulfate</div></li>
                </ul>

                <div class="sectionHeader" style="margin-top:20px;">
                    <h3>Also used in</h3>
                </div>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-leaf"></i></div><div class="content"><strong>Agrochemicals:</strong> Insecticides, pesticides, fertilizers</div></li>
                    <li><div class="icon"><i class="fa-solid fa-cubes"></i></div><div class="content"><strong>Thermoplastics &amp; Polymers:</strong> PVC, ABS, PE, PP</div></li>
                    <li><div class="icon"><i class="fa-solid fa-bowl-food"></i></div><div class="content"><strong>Food Ingredients:</strong> Starches, enzymes, additives</div></li>
                    <li><div class="icon"><i class="fa-solid fa-battery-full"></i></div><div class="content"><strong>Battery Materials, Ceramics, Aerospace Composites</strong></div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Working Principle -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Working Principle</h2>
                <p>The Varahi Jet Mill uses the <strong>fluid energy principle</strong> for ultra-fine grinding and classification.</p>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-down-long"></i></div><div class="content">Compressed air or steam is injected through <strong>precisely placed nozzles</strong> inside a cylindrical grinding chamber.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content">These jets generate a <strong>high-velocity vortex</strong>, pulling the powder in through the <strong>Venturi feeder system</strong>.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div><div class="content">Particles collide with each other at high speed, reducing themselves via <strong>attrition and impact</strong>.</div></li>
                    <li><div class="icon"><i class="fa-regular fa-circle-up"></i></div><div class="content">Fine particles exit with the air stream via the <strong>center outlet</strong>, while heavier particles remain for further grinding.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-filter"></i></div><div class="content">Final product is collected through a <strong>cyclone or pulse-jet dust collector</strong> system.</div></li>
                </ul>
                <p><em>There are no moving mechanical parts in the grinding zone, reducing wear and contamination.</em></p>
            </div>
        </div>
    </div>
</section>

<!-- Key Features & Benefits -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Key Features &amp; Benefits</h2>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-bullseye"></i></div><div class="content"><strong>Micron-level grinding</strong> (up to 2 microns)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-xmarks-lines"></i></div><div class="content"><strong>No moving parts</strong> in the grinding chamber – minimal wear and maintenance</div></li>
                    <li><div class="icon"><i class="fa-solid fa-shield-heart"></i></div><div class="content">Ideal for <strong>heat-sensitive and abrasive</strong> materials</div></li>
                    <li><div class="icon"><i class="fa-solid fa-box-archive"></i></div><div class="content">Compact, space-saving design</div></li>
                    <li><div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div><div class="content">Easy cleaning and quick changeover between batches</div></li>
                    <li><div class="icon"><i class="fa-solid fa-sliders"></i></div><div class="content"><strong>Customizable discharge</strong> (top or bottom outlet)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-building"></i></div><div class="content">Optional <strong>lined grinding chambers</strong> for high-wear applications</div></li>
                    <li><div class="icon"><i class="fa-solid fa-certificate"></i></div><div class="content">Suitable for <strong>GMP/Pharma-grade construction</strong></div></li>
                    <li><div class="icon"><i class="fa-solid fa-hand-holding-droplet"></i></div><div class="content">Low product contamination and high purity output</div></li>
                    <li><div class="icon"><i class="fa-solid fa-circle-check"></i></div><div class="content">Easy to operate and maintain</div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Customization & Options (table) -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Customization &amp; Options</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Component</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Design Type</td><td>General Purpose / Pharma (GMP)</td></tr>
                            <tr><td>Construction</td><td>MS / SS 304 / SS 316 / Polymer</td></tr>
                            <tr><td>Liners</td><td>Tungsten Carbide, Ceramic, PTFE, PU, or customer-specific material</td></tr>
                            <tr><td>Discharge Type</td><td>Top or Bottom</td></tr>
                            <tr><td>Feeding System</td><td>Venturi-based precise feed control</td></tr>
                            <tr><td>Dust Collection</td><td>Cyclone, Dust Collector, Pulse Jet, or combinations</td></tr>
                            <tr><td>Material Collection</td><td>Manual or automatic bagging system</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Configuration -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>System Configuration</h2>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-industry"></i></div><div class="content">Jet Mill (Grinding Unit)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content">Air Compressor (as per model requirement)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-funnel-dollar"></i></div><div class="content">Feeding System (Venturi + Rotary Valve)</div></li>
                    <li><div class="icon"><i class="fa-solid fa-filter"></i></div><div class="content">Cyclone Separator</div></li>
                    <li><div class="icon"><i class="fa-solid fa-cloud"></i></div><div class="content">Pulse Jet Dust Collector</div></li>
                    <li><div class="icon"><i class="fa-solid fa-sliders"></i></div><div class="content">Control Panel</div></li>
                    <li><div class="icon"><i class="fa-solid fa-diagram-project"></i></div><div class="content">Support Structure/Frame</div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Maintenance & After-Sales Support -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Maintenance &amp; After-Sales Support</h2>
                <p><strong>Varahi Industries</strong> offers end-to-end support to ensure uninterrupted performance:</p>
                <ul class="list">
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">Installation &amp; Commissioning</div></li>
                    <li><div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div><div class="content">Operator Training</div></li>
                    <li><div class="icon"><i class="fa-solid fa-cogs"></i></div><div class="content">Spare Parts Availability</div></li>
                    <li><div class="icon"><i class="fa-solid fa-handshake-angle"></i></div><div class="content">AMC &amp; Maintenance Support</div></li>
                    <li><div class="icon"><i class="fa-solid fa-headset"></i></div><div class="content">Technical Consultation</div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
