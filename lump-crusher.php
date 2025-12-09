<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Lump Crusher</h2>
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
                        $data = glob("./assets/images/products/crusher/lump-crusher/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Lump Crusher Image">
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
                    <h2>Lump Crusher</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Lump Crusher</strong> provides efficient size reduction of lumps and clumps in bulk materials to ensure smooth downstream processing and handling. The single-shaft design features evenly spaced impact fingers that work against a fixed comb to break oversized agglomerates into manageable sizes.</p>
                        <p>Material is fed from the top through a wide-flanged inlet, impacted by the rotating fingers, crushed against the fixed comb, and discharged from the bottom—ready for conveyor transfer or further processing.</p>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div><strong>Top Infeed</strong>
                </div>
                <p>Lumps enter via a wide-flanged inlet into the crushing zone.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-fingers-crossed"></i></div><strong>Impact Fingers</strong>
                </div>
                <p>Evenly spaced rotating fingers mounted on a single shaft strike and propel lumps toward the fixed comb.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-grip-lines-vertical"></i></div><strong>Fixed Comb</strong>
                </div>
                <p>Comb bars on the body provide a reaction surface, shearing and crushing agglomerates to the desired size.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-angles-down"></i></div><strong>Bottom Discharge</strong>
                </div>
                <p>Crushed material exits from the bottom outlet for easy transfer to conveyors or next process steps.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Specs Table -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Standard Model &amp; Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Motor</th>
                            <th>Overall Dimensions (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25x60</td>
                            <td>2 HP</td>
                            <td>1320 × 980 × 780</td>
                        </tr>
                    </tbody>
                </table>
                <p>Motor power and production rate depend on material properties and process parameters. All data are nominal and may vary.</p>
            </div>
        </div>
    </div>
</div>

<!-- Design & Construction / Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Fabricated body mounted on a sturdy base frame</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Single shaft with flange-mounted heavy-duty bearings</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-grip-lines"></i></div>
                        <div class="content">Impact fingers on shaft &amp; staggered comb bars on body for maximum efficiency</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Motor and pulley/belt drive system</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-person-walking-luggage"></i></div>
                        <div class="content">Rubber tires at base for mobility and placement flexibility</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Compact &amp; robust; suited for continuous industrial operation</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Benefits</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Efficient reduction of partially dried lumps and soft cakes</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Prevents blockages, improving flowability and process uptime</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Low maintenance with simple, rugged construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                        <div class="content">Saves time and energy compared to manual lump breaking</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Applications -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="secTitle">
            <h2>Applications</h2>
        </div>
        <div class="grid ThirdGrid">
            <div class="card">
                <div class="icon"><i class="fa-solid fa-palette"></i></div>
                <div>
                    <h3>Pigments, Dyes &amp; Colors</h3>
                    <p>De-lumping for consistent handling</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask"></i></div>
                <div>
                    <h3>Chemical Processing</h3>
                    <p>Prevents line blockages &amp; improves dosing</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                <div>
                    <h3>Food &amp; Spice Industry</h3>
                    <p>Breaks soft cakes before milling or packing</p>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharmaceuticals</h3>
                    <p>Pre-conditioning materials for uniform flow</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>