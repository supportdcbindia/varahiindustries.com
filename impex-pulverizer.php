<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Impex Pulverizer</h2>
        </div>
    </div>
</div>

<div class="productDetails">
    <div class="container">
        <div class="row g-4">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/pulverizer/impex-pulverizer/*.*"); // put product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true; foreach ($images as $p) { ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="productImage">
                                <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                    <img src="<?php echo $p; ?>" alt="Impex Pulverizer Image">
                                </a>
                            </div>
                        </div>
                        <?php $first = false; } ?>
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
                        <?php $index = 0; foreach ($images as $p) { ?>
                        <button type="button" data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $index; ?>"
                                class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-label="Slide <?php echo $index + 1; ?>">
                            <img src="<?php echo $p; ?>" alt="thumb <?php echo $index + 1; ?>">
                        </button>
                        <?php $index++; } ?>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <div class="sectionHeader">
                        <h2>Impex Pulverizer</h2>
                    </div>

                    <div class="desc">
                        <p><strong>Varahi Industries’ Impex Pulverizer</strong> is a high-performance milling machine
                           engineered to pulverize a wide range of materials into fine powders. Ideal for chemicals,
                           agriculture, minerals, metals, and specialty applications.</p>
                        <p>Pulverization occurs via continuous impact of rotating hammers against liners. A controlled
                           airstream carries fine material to the outlet while the <em>whizzer classifier</em> returns
                           oversize back to the chamber for re-grinding—assuring uniform particle size.</p>
                        <p><strong>Miracle Mill / Hammer Mill:</strong> high-production variant using a perforated liner
                           for classification, suitable for medium-fineness requirements.</p>
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
                <h2>Working Principle</h2>
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                            <strong>1) Feeding:</strong>
                        </div>
                        <p>Raw material is fed via a rotary/star feeder into the grinding chamber.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-hammer"></i></div>
                            <strong>2) Grinding:</strong>
                        </div>
                        <p>High-speed hammers impact material against replaceable liners to break lumps to fine particles.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-filter-circle-dollar"></i></div>
                            <strong>3) Classification:</strong>
                        </div>
                        <p>Whizzer classifier returns oversize back for reprocessing until set fineness is achieved.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                            <strong>4) Collection:</strong>
                        </div>
                        <p>Airflow conveys powder to the cyclone; dust is trapped in a fabric dust collector for clean, safe operation.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th colspan="5">Technical Specifications</th>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>RPM</th>
                            <th>Fineness (Mesh)</th>
                            <th>Output (Kg/Hr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>VIP-12</td><td>7.5</td><td>2800–3500</td><td>100–300</td><td>50 – 60</td></tr>
                        <tr><td>VIP-16</td><td>10</td><td>2800–3500</td><td>100–300</td><td>80 – 100</td></tr>
                        <tr><td>VIP-20</td><td>10–15</td><td>2200</td><td>75–300</td><td>80 – 300</td></tr>
                        <tr><td>VIP-25</td><td>20–30</td><td>2000</td><td>75–300</td><td>150 – 450</td></tr>
                        <tr><td>VIP-32 (WC)</td><td>50–60</td><td>1800</td><td>75–300</td><td>400 – 900</td></tr>
                        <tr><td>VIP-42</td><td>80–100</td><td>1800</td><td>75–300</td><td>600 – 1500</td></tr>
                    </tbody>
                </table>
                <p><em>All data are nominal and may vary depending on material properties and operating conditions.</em></p>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <h2>Major Components</h2>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-cube"></i></div><div class="content"><strong>Main Body:</strong> Cast-iron chamber with replaceable liners; metal trap to remove foreign particles.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-gear"></i></div><div class="content"><strong>Feeder:</strong> Automatic variable-speed star feeder for controlled feed rate.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-rotate"></i></div><div class="content"><strong>Rotor:</strong> Thick plate rotor with hinged hammers; heavy-duty dust-proof bearings.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-fan"></i></div><div class="content"><strong>Whizzer:</strong> Conical classifier with adjustable blades (100–300 mesh).</div></li>
                    <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content"><strong>Blower:</strong> Heavy-duty bolted blade blower for long life and easy replacement.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-filter"></i></div><div class="content"><strong>Cyclone Collector:</strong> Efficient powder–air separation for dust-free operation.</div></li>
                </ul>
            </div>

            <div class="col-lg-6">
                <h2>Key Benefits</h2>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">High grinding efficiency with uniform particle size.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Handles hard, brittle, and fibrous materials.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Adjustable fineness and output capacity.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-shield-heart"></i></div><div class="content">Dust-free operation with cyclone &amp; bag filter.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">Low maintenance with easy access to replaceable parts.</div></li>
                    <li><div class="icon"><i class="fa-solid fa-industry"></i></div><div class="content">Suitable for lab scale to industrial production.</div></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-12">
                <h2>Applications</h2>
                <div class="grid">
                    <div class="card"><div class="icon"><i class="fa-solid fa-flask"></i></div><div><h3>Chemicals</h3><p>Pigments, intermediates, dyes, organics</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-wheat-awn"></i></div><div><h3>Agriculture</h3><p>Spices, guar gum, flour, turmeric, herbal powders, prawn feed</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-mountain"></i></div><div><h3>Minerals</h3><p>Bauxite, calcite, coal, limestone, soapstone, china clay, dolomite, gypsum, marble, POP</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-industry"></i></div><div><h3>Metals</h3><p>CI powder, ferro alloys, zinc dross, brass dross</p></div></div>
                    <div class="card"><div class="icon"><i class="fa-solid fa-bug-slash"></i></div><div><h3>Others</h3><p>Pesticides, insecticides, precipitated silica, carbon black</p></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sectionHeader">
                    <h2>After-Sales Support</h2>
                </div>
                <ul class="Featureslist">
                    <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content">Installation &amp; commissioning</div></li>
                    <li><div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div><div class="content">Operator training &amp; process guidance</div></li>
                    <li><div class="icon"><i class="fa-solid fa-boxes-packing"></i></div><div class="content">Spare parts availability</div></li>
                    <li><div class="icon"><i class="fa-solid fa-headset"></i></div><div class="content">24/7 technical assistance</div></li>
                    <li><div class="icon"><i class="fa-solid fa-file-shield"></i></div><div class="content">AMC &amp; maintenance services</div></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
