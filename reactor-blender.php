<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Reactor Blender</h2>
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
                        $data = glob("./assets/images/products/blender/reactor-blender/*.*"); // <-- put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) {
                        ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Reactor Blender Image">
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
                        <?php
                        $index = 0;
                        foreach ($images as $p) {
                        ?>
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

                    <h2>Reactor Blender</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Reactor Blender</strong> is a high-performance mixing system designed for
                            blending, reacting, and homogenizing liquids, powders, or semi-solids under controlled temperature
                            and pressure. Built for chemical, pharmaceutical, food, and specialty industries, it ensures
                            uniform mixing, precise reaction control, and scalable batch production.</p>
                        <p>Engineered for durability and efficiency, the Reactor Blender allows simultaneous
                            heating, cooling, and mixing—ideal for complex processes that demand exact conditions.</p>
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
                    <div class="icon"><i class="fa-solid fa-recycle"></i></div>
                    <strong>Efficient Agitation</strong>
                </div>
                <p>The agitator inside the reactor maintains uniform mixing and prevents settling or lump formation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-temperature-half"></i></div>
                    <strong>Thermal Control</strong>
                </div>
                <p>Jacketed vessel enables precise heating or cooling of the product.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div>
                    <strong>Controlled Atmosphere</strong>
                </div>
                <p>Optional vacuum or inert gas purging supports sensitive reactions without contamination or oxidation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div>
                    <strong>Complete Homogenization</strong>
                </div>
                <p>Mixing is achieved via radial, axial, or tangential flow depending on agitator design.</p>
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
                            <th>Capacity (Liters)</th>
                            <th>Agitator Type</th>
                            <th>Jacket Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VRB-500</td>
                            <td>5 – 7.5</td>
                            <td>500</td>
                            <td>Helical Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>VRB-1000</td>
                            <td>7.5 – 10</td>
                            <td>1,000</td>
                            <td>Helical Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>VRB-2000</td>
                            <td>10 – 15</td>
                            <td>2,000</td>
                            <td>Helical Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>VRB-5000</td>
                            <td>20 – 25</td>
                            <td>5,000</td>
                            <td>Helical Ribbon / Paddle</td>
                            <td>Double</td>
                        </tr>
                        <tr>
                            <td>VRB-10000</td>
                            <td>30 – 40</td>
                            <td>10,000</td>
                            <td>Helical Ribbon / Paddle</td>
                            <td>Double</td>
                        </tr>
                    </tbody>
                </table>
                <p><em>Custom capacities and designs are available on request.</em></p>
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
                        <div class="content">High-efficiency mixing under controlled temperature &amp; pressure</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Handles viscous, semi-solid, and liquid materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Corrosion-resistant construction for chemical &amp; pharma</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Customizable capacities and design per batch needs</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Jacketed / double-jacketed vessel for heating &amp; cooling</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Motorized agitator with VFD &amp; programmable control</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Robust fabrication: SS / MS / Alloy construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Hygienic &amp; safe: suitable for pharma &amp; food-grade use</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Heavy-duty bearings &amp; seals for leak-proof operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div class="content">Agitator system: variable-speed motorized drive</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Customizable jacket type, capacity, agitator &amp; vessel shape</div>
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
                        <div class="icon"><i class="fa-solid fa-medal"></i></div>
                        <div class="content">Uniform mixing and precise reaction control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                        <div class="content">Suitable for heat-sensitive and viscous materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Scalable: lab, pilot, and production batches</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy to clean and maintain</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        <div class="content">Reduced downtime with durable construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Energy-efficient with optimized motor selection</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemical Reactions</h3>
                            <p>Formulations &amp; process reactions</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharma &amp; APIs</h3>
                            <p>Intermediates and actives</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                        <div>
                            <h3>Food Processing</h3>
                            <p>Syrups, pastes, sauces</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-spa"></i></div>
                        <div>
                            <h3>Cosmetics</h3>
                            <p>Creams, gels, lotions</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bezier-curve"></i></div>
                        <div>
                            <h3>Resins &amp; Polymers</h3>
                            <p>Adhesives &amp; blends</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>Specialty &amp; Agrochem</h3>
                            <p>Custom formulations</p>
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
                <div class="content">Installation and commissioning</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="content">Operator training</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                <div class="content">Process optimization support</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <div class="content">Spare parts supply</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">24/7 technical assistance</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-file-shield"></i></div>
                <div class="content">AMC &amp; maintenance services</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>