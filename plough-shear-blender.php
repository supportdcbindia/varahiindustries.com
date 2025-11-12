<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Plough Shear Blender (Mixer)</h2>
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
                        $data = glob("./assets/images/products/blender/plough-shear-blender/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Plough Shear Blender Image">
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
                    <h2>Plough Shear Blender (Mixer)</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Plough Shear Blender (Mixer)</strong> is a high-performance mixing
                            system for intensive mixing of powders, granules, and semi-moist/viscous materials. It delivers
                            efficient, uniform blending using plough-shaped agitators and optional high-speed choppers to
                            break lumps and accelerate dispersion.</p>
                        <p>Ideal for demanding industrial processes that need fast, homogeneous mixing of dry powders,
                            pastes, and granules—even when materials are sticky, viscous, or prone to agglomeration.</p>
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
                    <h2>Working Principle</h2>
                </div>
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-fan"></i></div>
                            <strong>Plough Agitators</strong>
                        </div>
                        <p>Plough-shaped mixing elements mounted on a central shaft create three-dimensional movement that lifts, tumbles, and shears the material for rapid homogenization.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                            <strong>High-Speed Choppers (Optional)</strong>
                        </div>
                        <p>Side-mounted choppers break agglomerates, disperse pigments/additives, and speed up mixing—especially for sticky or semi-moist products.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div>
                            <strong>Intensive 3D Motion</strong>
                        </div>
                        <p>Combined axial, radial, and tangential flow prevents dead zones and ensures uniform mixing across the entire chamber.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

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
                        <div class="content">Plough-shaped agitators for intensive, uniform mixing</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Optional high-speed choppers to de-lump and accelerate dispersion</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Handles powders, granules, pastes, and semi-moist/viscous materials</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Closed design minimizes dust and product loss</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-half"></i></div>
                        <div class="content">Optional jacketed body for heating/cooling</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div class="content">Gear-reduced drive sized for continuous duty</div>
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
                        <div class="content">Robust fabricated trough with replaceable wear liners (optional)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">MS, SS304, or SS316 contact parts as per application</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Heavy-duty bearings &amp; mechanical seals for leak-free, vibration-free operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Options: VFD speed control, liquid injection nozzles, temperature jacket, different discharge valves</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid ThirdGrid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>TKP &amp; CMTKP</h3>
                            <p>Tamarind Seed Powder &amp; Carboxy Methyl TKP</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>CMC &amp; Derivatives</h3>
                            <p>Efficient dispersion and de-lumping</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <h3>Chemical Processing</h3>
                            <p>Powders, pastes, and viscous blends</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Dyes &amp; Pigments</h3>
                            <p>Color uniformity with chopper assistance</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-cube"></i></div>
                        <div>
                            <h3>Ceramic Powders</h3>
                            <p>Homogeneous mixing of fine minerals</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>Food &amp; Nutraceuticals</h3>
                            <p>Spice blends, nutraceutical premixes</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pepper-hot"></i></div>
                        <div>
                            <h3>Spices &amp; Seasonings</h3>
                            <p>Free-flowing, lump-free blends</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- (Optional) Tech Specs table — add later if you have model-wise details
<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr><th colspan="4">Technical Specifications (Indicative)</th></tr>
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>Useful Volume (Liters)</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>—</td><td>—</td><td>—</td><td>Choppers / Jacket / VFD</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
-->

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
                <div class="content">Operator training &amp; process guidance</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                <div class="content">Process optimization &amp; application support</div>
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