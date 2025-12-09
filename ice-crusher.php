<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Ice Crusher</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/crusher/ice-crusher/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Ice Crusher Image">
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
                    <h2>Ice Crusher</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Ice Crusher</strong> efficiently breaks large ice slabs into smaller
                            pieces ranging from 50&nbsp;mm to 10&nbsp;mm—ideal for chemical processing, food preservation,
                            and industrial cooling. The machine delivers high production rates while minimizing labor and
                            handling time.</p>
                        <p>Ice slabs are fed from the top; rotating pointed spikes impact the ice against a serrated fixed
                            plate to crush it. The crushed ice falls to the collection area ready for use. Throughput
                            depends on feeding rate and lifting speed.</p>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div><strong>Top Feeding</strong>
                </div>
                <p>Large ice slabs are introduced from the machine inlet at the top.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-asterisk"></i></div><strong>Impact &amp; Shear</strong>
                </div>
                <p>A rotating drum with pointed spikes impacts ice against a serrated fixed plate to break it into pieces.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-angle-down"></i></div><strong>Gravity Discharge</strong>
                </div>
                <p>Crushed ice falls to the collection area or directly into vessels (model dependent).</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-gauge-high"></i></div><strong>Throughput Control</strong>
                </div>
                <p>Output is influenced by feed rate and lifting speed of the ice slabs.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Specs Table -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Standard Models &amp; Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Ice Size (mm)</th>
                            <th>Production (Ton/hr)</th>
                            <th>Motor (HP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TIB-20</td>
                            <td>50–10</td>
                            <td>3–10</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>TIB-30</td>
                            <td>50–10</td>
                            <td>10–20</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>TIB-60</td>
                            <td>50–10</td>
                            <td>75–100</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
                <p>Motor power &amp; production rates depend on ice properties and operating parameters. Data are nominal and may vary.</p>
            </div>
        </div>
    </div>
</div>

<!-- Design & Construction + (Optional) Benefits -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Design &amp; Construction</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-drum"></i></div>
                        <div class="content">Rotating Drum: Equally spaced pointed spikes welded around the drum.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gears"></i></div>
                        <div class="content">Drive System: Heavy-duty bearings; belt &amp; pulley drive from electric motor.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Machine Body: MS sheet fabrication mounted on sturdy C-channel frame.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-person-walking-luggage"></i></div>
                        <div class="content">Mobility: Castor wheels for easy movement (TIB-20 and similar).</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-reply"></i></div>
                        <div class="content">Direct Loading: TIB-30 allows direct loading of crushed ice into vessels to avoid manual handling.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-warehouse"></i></div>
                        <div class="content">High-Capacity: TIB-60 handles full slabs for maximum production.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Why Choose This Crusher</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-gauge"></i></div>
                        <div class="content">High throughput with consistent piece size (50–10&nbsp;mm)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                        <div class="content">Reduced labor &amp; safer handling</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                        <div class="content">Robust, low-maintenance construction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-repeat"></i></div>
                        <div class="content">Simple operation &amp; reliable performance</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Applications -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid ThirdGrid">
                    <div class="card" role="group" aria-label="Food & Beverage">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-utensils"></i></div>
                        <div>
                            <h3>Food &amp; Beverage Industry</h3>
                            <p>Ice preparation and storage</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Chemical Processing">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemical Processing</h3>
                            <p>Reaction cooling &amp; temperature control</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Industrial">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <h3>Industrial Applications</h3>
                            <p>Preservation &amp; process cooling</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>