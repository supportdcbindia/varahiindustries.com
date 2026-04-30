<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Mini Pulverizer</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row g-4">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" >
                        <?php
                            $images = glob("./assets/images/products/pulverizer/mini-pulverizer/*.*");
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
                                    src="https://www.youtube.com/embed/gPBN9qUil3M?si=Kw1SkpvpwRufiaSD"
                                    allow="autoplay; encrypted-media" allowfullscreen>
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
                            <img src="https://img.youtube.com/vi/gPBN9qUil3M/mqdefault.jpg">
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
                    <h2>Mini Pulverizer</h2>
                    <div class="desc">
                        <p><strong>Mini Pulverizer</strong> is designed to convert various materials into fine powder by
                            continuous impact of rotating hammers against grinding liners. Material is fed through a rotary
                            feeder; intensive hammering breaks lumps into fine particles for controlled fineness.</p>
                        <p>An air stream carries ground material to the outlet. Oversize is returned via the
                            <em>whizzer</em> for regrinding, while a fan conveys classified product to a cyclone collector.
                            A three-way connection to a dust collector ensures clean, dust-free operation.
                        </p>
                        <p class="mt-2"><em><strong>Note on Miracle/Hammer Mill:</strong> Ideal for high production with slightly
                                lower achievable fineness than a pulverizer. A perforated liner in the lower half of the chamber
                                performs classification—no whizzer required.</em></p>
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
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-box-open"></i></div><strong>Feeding</strong>
                </div>
                <p>Material enters via rotary (star) feeder into the grinding chamber.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div><strong>Impact Grinding</strong>
                </div>
                <p>Hinged hammers mounted on a rotor impact against liners to reduce lumps into fine particles.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Classification</strong>
                </div>
                <p>Whizzer (conical with adjustable blades) returns oversize to the chamber; fines progress with airflow.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Collection</strong>
                </div>
                <p>Fan conveys product to the cyclone; dust is captured through a three-way link to a dust collector.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Range & Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Range &amp; Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:#fff;">
                        <tr>
                            <th>Model</th>
                            <th>Motor (HP)</th>
                            <th>RPM (Machine)</th>
                            <th>Fineness (Mesh)</th>
                            <th>Output Range (Kg/Hr)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MVP-12</td>
                            <td>7.5</td>
                            <td>2800–3500</td>
                            <td>100–300</td>
                            <td>20–40</td>
                        </tr>
                        <tr>
                            <td>MVP-16</td>
                            <td>10</td>
                            <td>2800–3500</td>
                            <td>100–300</td>
                            <td>30–60</td>
                        </tr>
                        <tr>
                            <td>MVP-20</td>
                            <td>10–15</td>
                            <td>2200</td>
                            <td>75–300</td>
                            <td>50–100</td>
                        </tr>
                        <tr>
                            <td>MVP-25</td>
                            <td>20–30</td>
                            <td>2000</td>
                            <td>75–300</td>
                            <td>80–150</td>
                        </tr>
                    </tbody>
                </table>
                <p>All data are nominal and may vary with material properties and operating conditions.</p>
            </div>
        </div>
    </div>
</div>

<!-- Major Components & Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Major Components</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-building"></i></div>
                        <div class="content">Main Body: CI construction with replaceable liners; metal trap for heavy foreign matter.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Feeder: Automatic variable-speed star feeder for controlled feed.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                        <div class="content">Rotor: Thick plate rotor with hinged hammers; heavy-duty bearings.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                        <div class="content">Whizzer: Conical classifier with adjustable blades (100–300 mesh).</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Blower: Heavy-duty, long-life bolted blades; easily replaceable.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cloud"></i></div>
                        <div class="content">Cyclone Collector: Efficient separation of powder from the air stream.</div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Benefits</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">High grinding efficiency for small-scale production</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Uniform particle size control with adjustable whizzer</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Dust-free operation with cyclone &amp; dust collector</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Low maintenance—replaceable hammers &amp; liners</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Handles a wide range of materials</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Applications -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Use of Mini Pulverizer</h2>
                </div>
                <div class="grid OneGrid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemical</h3>
                            <p>Pigments, dyes, intermediates, organic compounds</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-wheat-awn"></i></div>
                        <div>
                            <h3>Agriculture</h3>
                            <p>Spices, guar gum, flour, turmeric, herbal powders</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Minerals</h3>
                            <p>Calcite, coal, limestone, china clay, dolomite, gypsum</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <h3>Metal</h3>
                            <p>CI powder, ferro alloys, zinc dross, brass dross</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bug"></i></div>
                        <div>
                            <h3>Other</h3>
                            <p>Pesticides, prawn feed, carbon black, silica</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Impex Pulverizer Applications</h2>
                </div>
                <div class="grid OneGrid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask-vial"></i></div>
                        <div>
                            <h3>Chemical</h3>
                            <p>Pigments, intermediates, dyes, organics</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                        <div>
                            <h3>Agriculture</h3>
                            <p>Spices, guar, flour, turmeric, herbal powders, prawn feed</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-gem"></i></div>
                        <div>
                            <h3>Minerals</h3>
                            <p>Bauxite, calcite, coal, limestone, soapstone, clay, dolomite, gypsum, marble, POP</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div>
                            <h3>Metals</h3>
                            <p>CI powder, ferro alloys, zinc dross, brass dross</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div>
                        <div>
                            <h3>Other</h3>
                            <p>Pesticides, insecticides, precipitated silica, carbon black</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- After-Sales Support -->
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
                <div class="content">Operator training</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <div class="content">Spare parts availability</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">Technical support &amp; maintenance</div>
            </li>
        </ul>
    </div>
</section>
<div class="ctaSec">
    <div class="container">
        <div class="ctaContentWrapper">
            <h5>Still can't decide which machine is best for you?</h5>
            <a href="#!" class="click1">Contact us Now</a>
        </div>
    </div>
</div>

<?php include('footer.php') ?>