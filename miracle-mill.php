<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Miracle Mill</h2>
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
                        $data = glob("./assets/images/products/hammer-mill/miracle-mill/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Miracle Mill Image">
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
                    <h2>Miracle Mill</h2>
                    <div class="desc">
                        <p><strong>Miracle Mill</strong> is an advanced grinding and micronizing system engineered to process
                            dry solids into fine and ultra-fine powders efficiently. Suitable for pharmaceuticals, chemicals,
                            minerals, pigments, agrochemicals, and heat-sensitive materials, it offers high productivity,
                            low maintenance, and superior product quality through precision-engineered components and robust construction.</p>
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
            <p>Miracle Mill uses high-velocity airflow to micronize particles with <em>no moving parts inside the grinding chamber</em>.</p>
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Jet/Vortex Generation</strong>
                </div>
                <p>Tangential nozzles inject compressed air to form a high-speed vortex.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-circle-notch"></i></div><strong>Precise Feeding</strong>
                </div>
                <p>Material is metered via Venturi into the vortex for controlled micronization.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-burst"></i></div><strong>Particle–Particle Impact</strong>
                </div>
                <p>Particles collide and fracture to the target size (attrition &amp; impact).</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Self-Classification</strong>
                </div>
                <p>Fine powder exits centrally to cyclone/dust collector; coarse recirculates for further grinding.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Features & Benefits -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features &amp; Benefits</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                        <div class="content">Micron-level grinding for ultra-fine sizes (down to ~2&nbsp;µm)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="content">Minimal wear due to efficient, no-moving-parts grinding zone</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                        <div class="content">Ideal for heat-sensitive &amp; abrasive materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-box-archive"></i></div>
                        <div class="content">Compact, space-saving modular design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; maintenance; quick changeovers</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-down-left-and-up-right-to-center"></i></div>
                        <div class="content">Optional top/bottom discharge for process flexibility</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Low contamination; high-purity output</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <div class="content">High efficiency with controlled feed &amp; air supply</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Technical Specifications (Typical Range)</h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead style="background:#555;color:#fff;">
                            <tr>
                                <th>Parameter</th>
                                <th>Typical Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Capacity</td>
                                <td>1–500 kg/hr (material dependent)</td>
                            </tr>
                            <tr>
                                <td>Operating Pressure</td>
                                <td>7–8 kg/cm²</td>
                            </tr>
                            <tr>
                                <td>Feed Size</td>
                                <td>Up to 200 mesh</td>
                            </tr>
                            <tr>
                                <td>Output Size</td>
                                <td>Down to 2 microns (adjustable)</td>
                            </tr>
                            <tr>
                                <td>Air Compressor</td>
                                <td>As per selected model</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-2">Performance varies with material properties, feed rate, and air pressure.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Customization -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
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
                                <td>MS, SS 304/316, Polymer</td>
                            </tr>
                            <tr>
                                <td>Liners</td>
                                <td>Tungsten Carbide, Ceramic, PTFE, PU, or custom</td>
                            </tr>
                            <tr>
                                <td>Discharge</td>
                                <td>Top or Bottom</td>
                            </tr>
                            <tr>
                                <td>Material Collection</td>
                                <td>Cyclone, Dust Collector, Pulse Jet, or combination</td>
                            </tr>
                            <tr>
                                <td>Feed System</td>
                                <td>Venturi-based precise control</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Applications -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Applications</h2>
        </div>
        <div class="grid ThirdGrid">
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharmaceuticals</h3>
                    <p>APIs, excipients, bulk drugs</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
                <div>
                    <h3>Chemicals &amp; Dyes</h3>
                    <p>Fine chemicals &amp; colorants</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                <div>
                    <h3>Minerals &amp; Pigments</h3>
                    <p>Silica, talc, CaCO<sub>3</sub>, TiO<sub>2</sub></p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                <div>
                    <h3>Agrochemicals</h3>
                    <p>Fertilizers, pesticides, insecticides</p>
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
                    <p>Starches, additives</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-temperature-low"></i></div>
                <div>
                    <h3>Heat-Sensitive &amp; Abrasive</h3>
                    <p>Materials needing low wear &amp; purity</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Support -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>After-Sales Support</h2>
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
                <div class="content">Spare Parts &amp; Consumables</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-file-shield"></i></div>
                <div class="content">AMC &amp; Preventive Maintenance</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">Technical Support for scale-up &amp; optimization</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>