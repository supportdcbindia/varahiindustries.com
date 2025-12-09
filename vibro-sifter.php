<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Vibro Sifter (Vibro/Gyro Screen)</h2>
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
                        $data = glob("./assets/images/products/vibro-sfiter/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Vibro Sifter Image">
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
                    <h2>Vibro Sifter</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries</strong> manufactures Vibro Sifters (also called Vibro/Gyro Screens) for efficient material separation and classification of dry powders or wet mediums. Using controlled mechanical vibration, these screens deliver reliable, high-throughput sieving in pharmaceuticals, chemicals, food processing, minerals, and more.</p>
                        <p>The machine generates horizontal, vertical, and circular vibrations. Feed enters the upper deck and is separated by particle size; fines pass through to lower decks while coarse fractions remain on top—enabling multi-deck classification.</p>
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
                    <div class="icon"><i class="fa-solid fa-arrow-down-short-wide"></i></div><strong>Feeding</strong>
                </div>
                <p>Material is fed to the top screen deck via central inlet.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-arrows-rotate"></i></div><strong>Vibration</strong>
                </div>
                <p>Eccentric weights create horizontal, vertical, and circular motion for stratification and separation.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-filter"></i></div><strong>Screening</strong>
                </div>
                <p>Fine particles pass through apertures; oversize moves toward discharge. Multiple decks provide graded cuts.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-sliders"></i></div><strong>Adjustability</strong>
                </div>
                <p>Lead angle and eccentric weights are adjustable to tune material flow and dwell time.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Technical Specifications</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Capacity (kg/hr)</th>
                            <th>Motor Power (HP)</th>
                            <th>Screen Diameter (mm)</th>
                            <th>Screen Area (m²)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VVS-600</td>
                            <td>600</td>
                            <td>1</td>
                            <td>600</td>
                            <td>0.28</td>
                        </tr>
                        <tr>
                            <td>VVS-900</td>
                            <td>900</td>
                            <td>1</td>
                            <td>900</td>
                            <td>0.63</td>
                        </tr>
                        <tr>
                            <td>VVS-1200</td>
                            <td>1200</td>
                            <td>2</td>
                            <td>1200</td>
                            <td>1.13</td>
                        </tr>
                        <tr>
                            <td>VVS-1500</td>
                            <td>1500</td>
                            <td>2</td>
                            <td>1500</td>
                            <td>1.75</td>
                        </tr>
                    </tbody>
                </table>
                <p>Capacities and specifications vary with material properties and operating conditions.</p>
            </div>
        </div>
        <?php
                        include("inq-btn.php");
                    ?>
    </div>
</div>

<!-- Features & Applications -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Key Features</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-shuffle"></i></div>
                        <div class="content">Versatile screening for dry and wet mediums; solid–solid &amp; solid–liquid separation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wave-square"></i></div>
                        <div class="content">Efficient vibration mechanism for precise separation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-industry"></i></div>
                        <div class="content">Robust SS construction; hygienic &amp; easy to clean</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                        <div class="content">Adjustable eccentric weights to tune intensity &amp; direction</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-crop"></i></div>
                        <div class="content">Compact footprint suited to tight spaces</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid OneGrid">
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharmaceuticals</h3>
                            <p>Sieving APIs &amp; excipients</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                        <div>
                            <h3>Food Processing</h3>
                            <p>Spices, flours &amp; ingredients</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemicals &amp; Agrochemicals</h3>
                            <p>Powders &amp; formulations</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Minerals &amp; Pigments</h3>
                            <p>Fine particle classification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>