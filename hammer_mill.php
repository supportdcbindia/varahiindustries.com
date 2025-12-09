<?php include('header.php') ?>

<!-- ========= Breadcrumb ========= -->
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Hammer Mill</h2>
        </div>
    </div>
</div>

<!-- ========= Product Details + Gallery ========= -->
<div class="productDetails">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        // Load product images for Hammer Mill
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? max(intval($_GET['page']) - 1, 0) : 0;
                        $data = glob("./assets/images/products/hammer-mill/*.*");
                        $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Hammer Mill Image">
                                        <img src="<?php echo $p; ?>" alt="Hammer Mill">
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
                            <button type="button"
                                data-bs-target="#carousel-custom"
                                data-bs-slide-to="<?php echo $index; ?>"
                                class="<?php echo $index === 0 ? 'active' : ''; ?>"
                                aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                aria-label="Slide <?php echo $index + 1; ?>">
                                <img src="<?php echo $p; ?>" alt="">
                            </button>
                        <?php $index++; } ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <div class="sectionHeader">
                        <h2>Hammer Mill</h2>
                    </div>

                    <div class="desc">
                        <p><strong>Varahi Industries’ Hammer Mill</strong>—also known as the <strong>“Miracle Mill”</strong>—is a heavy-duty, dependable size-reduction machine optimized for efficient grinding and pulverizing across diverse materials.</p>
                        <p>Designed to serve sectors like <strong>chemicals, pharmaceuticals, minerals, agriculture,</strong> and <strong>food processing</strong>, it delivers high throughput with low maintenance.</p>
                    </div>
                    <?php
                        include("inq-btn.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========= Technical Specifications ========= -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555;color:#fff;">
                        <tr>
                            <th colspan="2">Technical Specifications &amp; Model Range</th>
                        </tr>
                        <tr>
                            <th style="width:32%">Feature</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Body Material</td>
                            <td>Cast Iron (CI)</td>
                        </tr>
                        <tr>
                            <td>Classification Method</td>
                            <td>Perforated liner (mesh-size based)</td>
                        </tr>
                        <tr>
                            <td>Motor Power</td>
                            <td>Approx. 20–30 HP (standard models)</td>
                        </tr>
                        <tr>
                            <td>Typical Output</td>
                            <td>150–450 kg/hr (VIP-25 range), up to 1,500 kg/hr (VIP-42)</td>
                        </tr>
                        <tr>
                            <td>Fineness</td>
                            <td>75–300 mesh</td>
                        </tr>
                        <tr>
                            <td>Key Components</td>
                            <td>Rotor with hinged hammers, blower, cyclone collector</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Core features include -->
            <div class="row mt-4">
                <div class="col-12">
                    <h3>Core features include:</h3>
                    <ul class="list">
                        <li>
                            <div class="icon"><i class="fa-solid fa-cube"></i></div>
                            <div class="content"><strong>Main Body:</strong> Made from Cast Iron (CI) with replaceable grinding liners/plates tailored to specific material types. Includes a metal trap for foreign particle removal.</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-gear"></i></div>
                            <div class="content"><strong>Rotor &amp; Hammers:</strong> Rugged rotor mounted on heavy-duty bearings with hinged hammers—minimizes breakage and extends life.</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-fan"></i></div>
                            <div class="content"><strong>Blower:</strong> Heavy-duty, bolted blade blower for efficient airflow and easy replacement.</div>
                        </li>
                        <li>
                            <div class="icon"><i class="fa-solid fa-cloud"></i></div>
                            <div class="content"><strong>Cyclone Collector:</strong> Ensures effective separation of fine particles.</div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========= Key Advantages ========= -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-lg-6">
                <h2>Key Advantages</h2>
                <ul class="list">
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div class="content"><strong>High Throughput:</strong> Capable of grinding hundreds of kilograms per hour with models scalable to heavy industrial use.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content"><strong>Efficient Classification:</strong> Mesh-size liners classify material during grinding—no separate classifier needed.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="content"><strong>Rugged Build:</strong> Cast iron body and heavy-duty components ensure durability in demanding environments.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content"><strong>Low Maintenance:</strong> Hinged rotor hammers and bolted blower blades simplify upkeep.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="content"><strong>Effective Dust Control:</strong> Blower plus cyclone separator ensures cleaner operation.</div>
                    </li>
                </ul>
            </div>

            <!-- Applications -->
            <div class="col-sm-12 col-lg-6">
                <h2>Applications</h2>
                <ul class="list">
                    <li>
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div class="content"><strong>Chemicals:</strong> Pigments, dyes, intermediates.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wheat-awn"></i></div>
                        <div class="content"><strong>Agriculture:</strong> Spices, guar gum, flour, herbs, turmeric, agricultural powders.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                        <div class="content"><strong>Minerals:</strong> Bauxite, calcite, limestone, marble, bentonite.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content"><strong>Metals:</strong> CI powder, ferroalloys, brass dross.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <div class="content"><strong>Others:</strong> Pesticides, prawn feed, carbon black.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
