<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Chili Grinder (Hammer Mill)</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row g-4">
            <!-- Gallery -->
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/hammer-mill/chili-grinding/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Chili Grinder Image">
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
                    <h2>Chili Grinder (Hammer Mill)</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Chili Grinder (Hammer Mill)</strong> is a high-performance machine for
                            size reduction of various materials—especially chilies and spices. Operating on a principle similar
                            to an Impex Pulverizer, it delivers consistent and efficient grinding.</p>
                        <p>A <em>perforated liner</em> fitted in the lower half of the grinding chamber classifies material
                            to the required mesh size; hole diameter and pitch are selected as per target fineness. No
                            whizzer classifier is required—the liner itself provides separation.</p>
                    </div>

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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div><strong>Feeding</strong>
                </div>
                <p>Material enters the chamber where high-speed hammers impact it against liners/plates.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div><strong>Grinding</strong>
                </div>
                <p>Swinging, hinged hammers break lumps into fine particles; the rotor is dynamically balanced for smooth operation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Classification</strong>
                </div>
                <p>Perforated liner (bottom half) screens particles to the desired mesh—no whizzer needed.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Conveying</strong>
                </div>
                <p>An efficient blower circulates air and conveys product to the cyclone separator for clean recovery.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Construction Details -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Main Body</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Grinding chamber fabricated from M.S. or S.S. for durability and long life.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Replaceable liners/plates in different profiles to suit various materials.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-magnet"></i></div>
                        <div class="content">Built-in metal trap captures heavy foreign particles to prevent damage.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Rotor Assembly</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                        <div class="content">Heavy-duty steel plate rotor; dynamically balanced for smooth running.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gavel"></i></div>
                        <div class="content">Swinging hammers hinged on the rotor to prevent breakage and allow continuous duty.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Main shaft mounted on heavy-duty bearings in robust bearing blocks.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Blower</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">High-efficiency blower with long-life bolted blades for air circulation &amp; product conveying.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Blades are easily replaceable to reduce maintenance downtime.</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Cyclone Collector</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-cloud-arrow-down"></i></div>
                        <div class="content">Engineered for superior dust collection and efficient fine-particle separation.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                        <div class="content">Ensures a cleaner work environment and better product recovery.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Available Models -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Available Models</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model (Inch)</th>
                            <th>Motor (HP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5&quot; × 10&quot;</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>6&quot; × 12&quot;</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>8&quot; × 14&quot;</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>10&quot; × 16&quot;</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>10&quot; × 20&quot;</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>12&quot; × 20&quot;</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>22&quot; × 14&quot;</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
                <p>Perforation size/pitch and liner profile are selected based on target fineness and material characteristics.</p>
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
                <div class="content">Consistent chili/spice grinding with integrated perforated-liner classification (no whizzer).</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Cleaner operation via cyclone separation and efficient air handling.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Reduced downtime—replaceable liners, plates, and blower blades.</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-check"></i></div>
                <div class="content">Robust construction for long service life and low maintenance.</div>
            </li>
        </ul>
    </div>
</div>

<?php include('footer.php') ?>