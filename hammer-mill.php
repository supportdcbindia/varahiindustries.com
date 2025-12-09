<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Hammer Mill</h2>
        </div>
    </div>
</div>

<div class="productDetails cusPanding">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/hammer-mill/hammer-mill/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Hammer Mill Image">
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
                    <h2>Hammer Mill</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Hammer Mill</strong> is a high-performance grinding machine for
                            efficient size reduction of diverse materials. Operating on a principle similar to an Impex
                            Pulverizer, it delivers consistent, reliable grinding without the need for a whizzer classifier.</p>
                        <p>A <em>perforated liner</em> fitted in the lower half of the chamber classifies material to the
                            required mesh size; hole diameter and pitch are chosen per target fineness. Separation is
                            achieved through this liner itself, simplifying the system.</p>
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
                    <div class="icon"><i class="fa-solid fa-truck-ramp-box"></i></div><strong>Feeding</strong>
                </div>
                <p>Material enters the grinding chamber where high-speed hammers impact it against liners.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-hammer"></i></div><strong>Grinding</strong>
                </div>
                <p>Swinging, hinged hammers break lumps into fine particles; rotor is dynamically balanced for smooth operation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Classification</strong>
                </div>
                <p>Perforated liner (bottom half) screens particles to the desired mesh—no whizzer required.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-wind"></i></div><strong>Conveying</strong>
                </div>
                <p>A high-efficiency blower circulates air and conveys product to the cyclone collector for clean recovery.</p>
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
                        <div class="content">Grinding chamber fabricated from MS or SS for durability.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div class="content">Replaceable liners/plates in various profiles for different materials.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-magnet"></i></div>
                        <div class="content">Built-in metal trap to capture heavy foreign particles.</div>
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
                        <div class="content">Heavy-duty steel plate rotor, dynamically balanced.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gavel"></i></div>
                        <div class="content">Swinging, hinged hammers to prevent breakage and enable continuous duty.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-gear"></i></div>
                        <div class="content">Main shaft on heavy-duty bearings in robust blocks for long life.</div>
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
                        <div class="content">High-efficiency blower with long-life bolted blades for air circulation &amp; conveying.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                        <div class="content">Easily replaceable blades to minimize maintenance downtime.</div>
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
                        <div class="content">Efficient separation of fines for a clean work area.</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                        <div class="content">Improved product recovery and dust control.</div>
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
                            <td>5" × 10"</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>6" × 12"</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>8" × 14"</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>10" × 16"</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>10" × 20"</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>12" × 20"</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>22" × 14"</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                </table>
                <p>Selection of perforation size/pitch and liner profile depends on target fineness and material characteristics.</p>
            </div>
        </div>
    </div>
</div>

<!-- Benefits -->
<div class="cusPanding principle-section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="secTitle">
                    <h2>Key Benefits</h2>
                </div>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Consistent grinding with integrated perforated-liner classification (no whizzer).</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Clean operation with cyclone separation and efficient air handling.</div>
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
    </div>
</div>

<?php include('footer.php') ?>