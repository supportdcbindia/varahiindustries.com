<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Bag Dump Station</h2>
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
                        $data = glob("./assets/images/products/bag-dumping-station/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Bag Dump Station Image">
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
                    <h2>Bag Dump Station</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Bag Dump Station</strong> integrates manually-emptied dry bulk
                            materials into blenders, agitator hoppers, storage bins, size reduction machines, and
                            pneumatic conveying systems—while minimizing product loss and dust generation.</p>
                        <p>An ergonomic enclosure lets operators safely open and empty bags. Dust released during
                            tipping is captured by the <em>integrated dust collection system</em> (centrifugal blower +
                            automatic reverse pulse-jet filter) and returned to the process—improving recovery,
                            reducing contamination, and mitigating explosive dust risks.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- How It Works -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Working Principle</h2>
        </div>
        <ul class="list">
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                    <strong>Bag Opening & Emptying</strong>
                </div>
                <p>Operator places the bag on the grate and empties contents into the receiving hopper or chute.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div>
                    <strong>Dust Capture</strong>
                </div>
                <p>A centrifugal blower draws dusty air through filter bags/cartridges inside the station, preventing fugitive emissions.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-burst"></i></div>
                    <strong>Pulse-Jet Cleaning</strong>
                </div>
                <p>Timer-actuated reverse pulses dislodge dust cake from filters; recovered material falls back into the process stream.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                    <strong>Downstream Transfer</strong>
                </div>
                <p>Clean product proceeds to mixers, hoppers, silos, mills, or pneumatic lines via gravity or screw/rotary airlock.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Design & Construction -->
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
                        <div class="content">Robust enclosure with hinged/lift-up access door and safety grate.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Integrated dust collector: centrifugal blower, filter elements, plenum &amp; pulse valves.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-boxes-packing"></i></div>
                        <div class="content">Return of captured fines to process—maximizes yield and keeps area clean.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Construction in MS/SS (304/316) with food/pharma-grade finishes available.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Provision for rotary airlock/screw feeder for sealed discharge.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Options &amp; Controls</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-wave-square"></i></div>
                        <div class="content">Pulse-jet timer, ΔP-based cleaning, or PLC control.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shirt"></i></div>
                        <div class="content">Filter media per application: polyester, PP, antistatic, PTFE laminated.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-temperature-three-quarters"></i></div>
                        <div class="content">High-temp designs, explosion relief options, and ATEX-style features (on request).</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-diagram-next"></i></div>
                        <div class="content">Direct flange to mixers, hoppers, mills, or pneumatic conveying lines.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Benefits -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="secTitle">
            <h2>Key Benefits</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Ergonomic, safe manual bag emptying with minimal dust exposure.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Integrated dust control—no remote filtration required.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Higher product recovery and reduced contamination risk.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Cleaner work environment; mitigates explosive dust hazards.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Compact footprint and easy integration with existing equipment.</div>
            </li>
        </ul>
    </div>
</div>

<?php include('footer.php') ?>