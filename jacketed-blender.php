<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Jacketed Blender</h2>
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
                        $data = glob("./assets/images/products/blender/jacketed-blender/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);
                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Jacketed Blender Image">
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
                    <h2>Jacketed Blender</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Jacketed Blender</strong> is a versatile mixing and
                            heating/cooling solution for uniform blending of powders, granules, pastes, and liquids with
                            precise temperature control. Ideal for pharmaceutical, chemical, food, and specialty industries,
                            it ensures efficient mixing, temperature regulation, and high product quality.</p>
                        <p>With its jacketed design, the blender enables heating, cooling, or both simultaneously—perfect
                            for temperature-sensitive materials and processes.</p>
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
                    <strong>Uniform Mixing</strong>
                </div>
                <p>The agitator blends all materials thoroughly and prevents dead zones.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-temperature-half"></i></div>
                    <strong>Thermal Regulation</strong>
                </div>
                <p>A jacketed vessel circulates hot or cold fluids to control product temperature.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div>
                    <strong>Protected Atmosphere</strong>
                </div>
                <p>Optional vacuum or inert gas purging safeguards sensitive products.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div>
                    <strong>Homogenization</strong>
                </div>
                <p>Radial, axial, or tangential flow (based on agitator type) ensures complete homogenization.</p>
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
                            <td>JB-500</td>
                            <td>5 – 7.5</td>
                            <td>500</td>
                            <td>Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>JB-1000</td>
                            <td>7.5 – 10</td>
                            <td>1,000</td>
                            <td>Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>JB-2000</td>
                            <td>10 – 15</td>
                            <td>2,000</td>
                            <td>Ribbon / Paddle</td>
                            <td>Single / Double</td>
                        </tr>
                        <tr>
                            <td>JB-5000</td>
                            <td>20 – 25</td>
                            <td>5,000</td>
                            <td>Ribbon / Paddle</td>
                            <td>Double</td>
                        </tr>
                        <tr>
                            <td>JB-10000</td>
                            <td>30 – 40</td>
                            <td>10,000</td>
                            <td>Ribbon / Paddle</td>
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
                        <div class="content">Jacketed vessel for precise heating or cooling</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Efficient mixing of dry powders, semi-solids, and liquids</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Corrosion-resistant build for chemical, pharma, and food</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Customizable capacities and agitator types</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Motorized agitator with variable speed &amp; programmable control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Optional vacuum/inert gas purging</div>
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
                        <div class="content">Robust fabrication: SS / MS / Alloy for durability &amp; chemical resistance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Hygienic &amp; easy to clean: suitable for pharma/food</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Heavy-duty bearings &amp; seals for leak-proof operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Customizable agitator &amp; jacket (Ribbon/Paddle; Single/Double)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Optional: fluid coupling, liquid spray, VFD speed control, special discharge</div>
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
                        <div class="content">Uniform mixing with precise temperature control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                        <div class="content">Ideal for heat-sensitive and viscous materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Scalable for lab, pilot, and production batches</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-broom"></i></div>
                        <div class="content">Easy cleaning &amp; maintenance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Durable, energy-efficient, and low-noise operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                        <div class="content">Enhanced product quality and process efficiency</div>
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
                            <h3>Pharmaceutical</h3>
                            <p>Powders &amp; granules blending</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemicals</h3>
                            <p>Formulations &amp; intermediates</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                        <div>
                            <h3>Food</h3>
                            <p>Pastes, syrups, sauces</p>
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
                            <h3>Adhesives &amp; Polymers</h3>
                            <p>Specialty chemicals</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-temperature-half"></i></div>
                        <div>
                            <h3>Temperature-Sensitive</h3>
                            <p>Controlled processing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="secTitle">
                    <h2>After-Sales Support</h2>
                </div>

                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Installation and commissioning</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        <div class="content">Operator training &amp; process guidance</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Spare parts availability</div>
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
        </div>
    </div>
</section>

<?php include('footer.php') ?>