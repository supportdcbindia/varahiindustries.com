<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Pulse Jet Dust Collector (PJDC)</h2>
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
                        $data = glob("./assets/images/products/pulse-jet-dust-collector/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>"
                                        title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Pulse Jet Dust Collector Image">
                                    </a>
                                </div>
                            </div>
                        <?php $first = false;
                        } ?>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-custom"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-custom"
                        data-bs-slide="next">
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
                    <h2>Pulse Jet Dust Collector (PJDC)</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Pulse Jet Dust Collector</strong> is a high-efficiency system for
                            removing fine dust and powders from industrial air streams—delivering a clean, safe
                            workplace and compliant emissions.</p>
                        <p>Available in circular or square housings with top/side bag removal, the PJDC is
                            custom-engineered for dust load, fineness, airflow, temperature, moisture, efficiency,
                            application type, emission limits, and site constraints. Filter bag fabrics (polyester,
                            polypropylene, cotton, antistatic, etc.) are selected to suit chemical and thermal
                            conditions.</p>
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
                    <div class="icon"><i class="fa-solid fa-wind"></i></div>
                    <strong>Dust Inlet</strong>
                </div>
                <p>Dust-laden air enters the collector at positive or negative pressure.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter-circle-xmark"></i></div>
                    <strong>Pre-separation</strong>
                </div>
                <p>Velocity drops in the hopper; coarse particles settle by gravity.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-regular fa-square"></i></div>
                    <strong>Bag Filtration</strong>
                </div>
                <p>Fine particles move upward; air passes through filter bags, dust cakes on the outer surface.
                </p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                    <strong>ΔP Monitoring</strong>
                </div>
                <p>As dust accumulates, differential pressure rises to a setpoint.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-burst"></i></div>
                    <strong>Pulse Cleaning</strong>
                </div>
                <p>Timer-controlled solenoid releases a short compressed-air pulse via blow tubes, inflating
                    bags to dislodge dust.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-angle-down"></i></div>
                    <strong>Dust Collection</strong>
                </div>
                <p>Released dust falls into the hopper; rotary airlock discharges without air leakage. Automatic
                    sequencing ensures continuous operation and high efficiency.</p>
            </li>
        </ul>
        <p class="mt-2">Filtration efficiency depends on bag media, cleaning frequency, and air volume—tuned
            to maximize clean filter area.</p>
    </div>
</section>

<!-- Design Features -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="secTitle">
            <h2>Design Features</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                <div class="content"><strong>Three-section layout:</strong> Top plenum, middle bag housing,
                    bottom collection hopper.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-tower-broadcast"></i></div>
                <div class="content">Plenum with blow pipes, air receiver tank, solenoid valves, and blow tubes.
                </div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-sack-xmark"></i></div>
                <div class="content">Bag housing with venturies, retainers, tube sheets, and quick bag access
                    (top/side removal).</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                <div class="content">Hopper with inlet, diffuser, outlet; rotary airlock valve to prevent air
                    leakage.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-cubes-stacked"></i></div>
                <div class="content">Circular or square housings; high filtering area options for heavy dust
                    loads.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-shirt"></i></div>
                <div class="content">Filter bags: polyester, polypropylene, cotton, antistatic &amp; specialty
                    media.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
                <div class="content">Casing materials tailored to chemical/temperature conditions (MS/SS
                    grades).</div>
            </li>
        </ul>
    </div>
</div>

<!-- Uses / Applications -->
<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Uses of Pulse Jet Dust Collector</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-gears"></i></div>
                <div class="content">Filters dust-laden air from grinders, pulverizers, and powder-processing
                    lines.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-recycle"></i></div>
                <div class="content">Separates useful fines from waste dust; improves product recovery.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-fan"></i></div>
                <div class="content">Delivers clean air to atmosphere; supports regulatory compliance.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                <div class="content">Protects equipment, reduces product loss, and enhances workplace safety.
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- After-Sales Support -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>After-Sales Service &amp; Support</h2>
        </div>
        <ul class="Featureslist">
            <li>
                <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div class="content">Installation &amp; commissioning</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                <div class="content">Operator training &amp; maintenance guidance</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-user-shield"></i></div>
                <div class="content">Operational optimization &amp; periodic audits</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">Responsive support for spares and troubleshooting</div>
            </li>
        </ul>
    </div>
</section>

<?php include('footer.php') ?>