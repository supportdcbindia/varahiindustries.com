<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Air Classifier</h2>
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
                        $data = glob("./assets/images/products/air-classifier/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Air Classifier Image">
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
                    <h2>Air Classifier</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Air Classifier</strong> is a high-efficiency centrifugal air separator
                            for precise classification of dry powders into coarse and fine fractions. Engineered for
                            closed-circuit systems, it delivers controlled particle size distribution from
                            <strong>60–350 mesh</strong> with low energy consumption.
                        </p>
                        <p>Ideal for removing heavy contaminants (iron, silica) or refining powders for grit-free quality,
                            the fully enclosed system provides reliable, dust-free operation.</p>
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
        <div class="row">
            <div class="col-12">
                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                            <strong>Material Feeding</strong>
                        </div>
                        <p>Dry powder enters via inlet hopper into the central tube.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-wind"></i></div>
                            <strong>Air Circulation</strong>
                        </div>
                        <p>Rotating deflector blades generate a controlled air stream inside the chamber.</p>
                    </li>
                    <li class="subListWrapper">
                        <div class="subListContent">
                            <div class="iconContent">
                                <div class="icon"><i class="fa-solid fa-filter"></i></div>
                                <strong>Separation Process</strong>
                            </div>
                        </div>
                        <ul class="sub-list">
                            <li>
                                <p><strong>Heavier particles</strong> (grit, iron, silica) drop by gravity and discharge through the tail cone.</p>
                            </li>
                            <li>
                                <p><strong>Finer particles</strong> ride with the air stream and exit via the fine cone.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                            <strong>Adjustability</strong>
                        </div>
                        <p>Blade count and airflow are tuned to achieve the required cut size and accuracy.</p>
                    </li>
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-recycle"></i></div>
                            <strong>Air Recirculation</strong>
                        </div>
                        <p>Self-contained, dust-free loop ensures continuous airflow and clean operation.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<div class="productTable cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Technical Specifications &amp; Range</h2>
        </div>
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th>Model</th>
                            <th>Feed Capacity (Kg/Hr)</th>
                            <th>Motor Power (HP)</th>
                            <th>Dimensions (L × W × H) (m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VAC-50</td>
                            <td>400 – 600</td>
                            <td>15</td>
                            <td>1.5 × 2.5 × 4</td>
                        </tr>
                        <tr>
                            <td>VAC-40</td>
                            <td>200 – 400</td>
                            <td>10</td>
                            <td>1.3 × 2.0 × 3.6</td>
                        </tr>
                        <tr>
                            <td>VAC-30</td>
                            <td>100 – 300</td>
                            <td>7.5</td>
                            <td>1.0 × 1.0 × 2.3</td>
                        </tr>
                    </tbody>
                </table>
                <p>Capacities are nominal and vary with material density, moisture, and particle size.</p>
            </div>
        </div>
    </div>
</div>

<!-- Features & Applications -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Classifier Design Features</h2>
                </div>
                <ul class="Featureslist OneGrid">
                    <li>
                        <div class="icon"><i class="fa-solid fa-circle-notch"></i></div>
                        <div class="content">Centrifugal-type closed circuit design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Rotating whizzer/deflector blades for precise air flow</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter"></i></div>
                        <div class="content">Tail cone &amp; fine cone dual discharge</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cogs"></i></div>
                        <div class="content">Heavy-duty bearings supporting vertical shaft</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="content">Manual dampers for airflow control</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                        <div class="content">Enclosed, dust-free operation</div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6">
                <div class="secTitle">
                    <h2>Applications</h2>
                </div>
                <div class="grid OneGrid">
                    <div class="card" role="group" aria-label="Cement Industry">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <h3>Cement Industry</h3>
                            <p>Separation of cement particles</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Food Processing">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-bread-slice"></i></div>
                        <div>
                            <h3>Food Processing</h3>
                            <p>Flour, spices, food colors</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Chemical Industry">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemical Industry</h3>
                            <p>Pigments, minerals, fine powders</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Paints & Pigments">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Paints &amp; Pigments</h3>
                            <p>Color production &amp; blending</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Mineral Processing">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Mineral Processing</h3>
                            <p>Grading &amp; de-gritting</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Pharmaceuticals">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharmaceuticals</h3>
                            <p>Controlled particle size distribution</p>
                        </div>
                    </div>
                    <div class="card" role="group" aria-label="Silica & Quartz">
                        <div class="icon" aria-hidden="true"><i class="fa-regular fa-gem"></i></div>
                        <div>
                            <h3>Silica Sand &amp; Quartz</h3>
                            <p>Precision grading &amp; purification</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php') ?>