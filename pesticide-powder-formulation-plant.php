<?php include('header.php') ?>
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Pesticides Formulation Plant (with Air Jet Mill)</h2>
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
                        $data = glob("./assets/images/products/pesticide-powder-formulation-plant/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Pesticides Formulation Plant Image">
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
                    <h2>Pesticides Formulation Plant</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Pesticides Formulation Plant</strong> integrates pre-blending,
                            ultra-fine grinding (Air Jet Mill), classifying, conveying, collecting and post-blending to
                            deliver uniform, steep particle size distributions for pesticides, insecticides and fungicides.</p>
                        <p>The <em>Air Jet Mill</em> micronizes ingredients to enhance suspensibility while the system’s
                            closed handling maintains cleanliness, safety and consistent quality—independent of particle
                            size, shape or density (suspension flow through ducts).</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process Flow / Working Principle -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Process Flow &amp; Working Principle</h2>
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-diagram-project"></i></div><strong>Pre-Blending</strong>
                </div>
                <p>Active ingredients and carriers are premixed for uniform feed characteristics.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Air Jet Milling</strong>
                </div>
                <p>High-velocity jets create a vortex; particles collide and micronize with no moving parts in the grinding zone—ideal for heat-sensitive, abrasive or dust-explosive materials (N<sub>2</sub> closed loop available).</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Classification</strong>
                </div>
                <p>Self-classification in the mill or external classifier ensures steep, narrow PSD; fines exit, coarse recirculates.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-person-dolly"></i></div><strong>Conveying &amp; Collection</strong>
                </div>
                <p>Pneumatic conveying to cyclone / pulse-jet dust collector for clean, high-yield recovery.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div><strong>Post-Blending</strong>
                </div>
                <p>Final homogenization preserves uniformity and suspensibility in the product.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Key Features</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-droplet"></i></div>
                <div class="content">Better material suspensibility &amp; uniform homogeneity</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                <div class="content">Low power consumption with efficient jet milling</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                <div class="content">Ultra-fine grinding for right molecular / surface activity</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="content">Handles dust-explosive &amp; abrasive materials; N<sub>2</sub> closed-loop to maintain O<sub>2</sub>%</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-shirt"></i></div>
                <div class="content">Bag filters with anti-static media; thicker GSM bags for strict emission norms</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check-double"></i></div>
                <div class="content">Consistent steep PSD—uniform and homogeneous output</div>
            </li>
        </ul>
    </div>
</div>

<!-- Air Jet Mill Specs -->
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
                            <th colspan="2">Air Jet Mill </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Feed Size</strong></td>
                            <td>100 – 200 mesh</td>
                        </tr>
                        <tr>
                            <td><strong>Capacity</strong></td>
                            <td>Up to 500 Kg/hr (material dependent)</td>
                        </tr>
                        <tr>
                            <td><strong>Output Fineness</strong></td>
                            <td>99% pass 2500 mesh BSS</td>
                        </tr>
                        <tr>
                            <td><strong>Country of Origin</strong></td>
                            <td>Made in India</td>
                        </tr>
                        <tr>
                            <td><strong>Phase / Voltage</strong></td>
                            <td>3 Phase / 380 V</td>
                        </tr>
                        <tr>
                            <td><strong>Brand</strong></td>
                            <td>Varahi</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-2">Performance varies with formulation properties, air pressure and feed rate.</p>
            </div>
        </div>
    </div>
</div>

<!-- Safety & Compliance -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Safety, Hygiene &amp; Compliance</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-wind"></i></div>
                <div class="content">Pulse-jet dust collection with anti-static bags reduces explosion risk and emissions.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-gas-pump"></i></div>
                <div class="content">Nitrogen inerting (closed loop) for low O<sub>2</sub> operation during micronization.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-hand-holding-droplet"></i></div>
                <div class="content">Clean-in-place / easy access designs for rapid product changeover (on request).</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>