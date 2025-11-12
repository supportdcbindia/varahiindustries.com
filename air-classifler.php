<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Air Classifier</h2>
        </div>
    </div>
</div>

<div class="productDetails">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $nb_elem_per_page = 100;
                        $page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
                        $data = glob("./assets/images/products/air-jet-mill/*.*");
                        $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) {
                        ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="productImage">
                                <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>"
                                    title="Product Image">
                                    <img src="<?php echo $p; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <?php
                            $first = false;
                        }
                        ?>
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
                        <?php
                        $index = 0;
                        foreach ($images as $p) {
                        ?>
                        <button type="button" data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $index; ?>"
                            class="<?php echo $index === 0 ? 'active' : ''; ?>"
                            aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                            aria-label="Slide <?php echo $index + 1; ?>">
                            <img src="<?php echo $p; ?>" alt="">
                        </button>
                        <?php
                            $index++;
                        }
                        ?>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-md-6">
                <div class="productDetailsContent">
                    <div class="sectionHeader">
                        <h2>Air Classifier</h2>
                    </div>

                    <div class="desc">
                        <p>Varahi Industries Air Classifier is a high-efficiency centrifugal air separator, engineered
                            to separate dry powders into coarse and fine fractions. Designed for closed-circuit systems,
                            our air classifiers ensure precise particle size distribution from 60 to 350 mesh. It is
                            ideal for applications requiring superior product quality and consistent fineness, with
                            minimal energy consumption..</p>
                        <p>&nbsp;</p>
                        <p>Whether you're removing heavy contaminants like iron and silica or refining powder quality
                            through grit elimination, Varahi Air Classifier offers a dependable solution.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Working Principle</h2>
                <p>The classifier uses a centrifugal force mechanism where deflector and whizzer blades generate an air
                    stream
                    that separates particles based on weight:</p>

                <ul class="list">
                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                            <strong>Material Feeding:</strong>
                        </div>
                        <p>
                            Dry powder is fed through an inlet hopper into the center tube.
                        </p>
                    </li>

                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-wind"></i> </div>
                            <strong>Air Circulation:</strong>
                        </div>
                        <p> Rotating deflector blades create a controlled air stream inside the chamber.</p>
                    </li>

                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                            <strong>Adjustability:</strong>
                        </div>
                        <p>Blade count and air flow are adjustable to control separation accuracy.</p>
                    </li>
                    <li class="subListWrapper">
                        <div class="subListContent">
                            <div class="iconContent">
                                <div class="icon"><i class="fa-solid fa-filter"></i> </div>
                                <strong>Separation Process:</strong>
                            </div>
                        </div>

                        <ul class="sub-list">
                            <li>
                                <p>1. Heavier particles (grit, iron, silica) are
                                    pulled down by gravity and discharged through the tail
                                    cone.
                                </p>
                            </li>
                            <li>
                                <p>2. Lighter, finer particles are carried upward with the air stream
                                    and exit via the fine cone.</p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-recycle"></i> </div>
                            <strong>Air Recirculation:</strong>
                        </div>
                        <p>The system is self-contained, ensuring a dust-free operation and continuous airflow.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="productTable cusPanding ">
    <div class="container">
        <div class="productTableWrapper">
            <div class="table-responsive">
                <table class="table">
                    <thead style="background:#555; color:white;">
                        <tr>
                            <th colspan="4">Air Classifier Range & Technical Specifications</th>
                        </tr>

                        <tr>
                            <th>Model</th>
                            <th>Feed Capacity (Kg/Hr)</th>
                            <th>Motor Power (HP)</th>
                            <th>Dimensions (L x W x H) (m)</th>
                        </tr>

                    </thead>

                    <tbody>
                        <tr>
                            <td>IVAC-50</td>
                            <td>400 – 600</td>
                            <td>15</td>
                            <td>1.5 x 2.5 x 4</td>
                        </tr>
                        <tr>
                            <td>VAC-40</td>
                            <td>200 – 400</td>
                            <td>10</td>
                            <td>1.3 x 2.0 x 3.6</td>
                        </tr>
                        <tr>
                            <td>VAC-30</td>
                            <td>100 – 300</td>
                            <td>7.5 1.0 x 1.0 x 2.3</td>
                            <td>1.5 x 2.5 x 4</td>
                        </tr>
                    </tbody>
                </table>
                <p>Note: All capacities are nominal and may vary depending on material properties such as density,
                    moisture, particle size, etc.</p>

            </div>

        </div>
    </div>
</div>
<div class="cusPanding principle-section bgGrey">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <!-- Design Features -->
                <h2>Classifier Design Features</h2>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-circle-notch"></i></div>
                        <div class="content">Centrifugal-Type Closed Circuit Design</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-fan"></i></div>
                        <div class="content">Rotating Whizzer Blades – Adjustable for fine tuning separation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-location-arrow"></i></div>
                        <div class="content">Deflector Blades – Create the internal air stream</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-drum"></i></div>
                        <div class="content">Inner &amp; Outer Drum – For complete separation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-filter"></i></div>
                        <div class="content">Tail Cone &amp; Fine Cone – Dual discharge system</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-cogs"></i></div>
                        <div class="content">Heavy-Duty Bearings – For reliable vertical shaft support</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-wind"></i></div>
                        <div class="content">Air Dampers – Manual control of airflow for accuracy</div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <!-- Benefits -->
                <h2>Benefits & Highlights</h2>
                <ul class="Featureslist">
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Uniform particle size distribution</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Removes heavy impurities (iron, silica, grit)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Dedusting of fine powders</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Adjustable separation range: 95:5 to 60:40 (Fine:Coarse)</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Energy-efficient operation</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Fully enclosed, dust-free process</div>
                    </li>
                    <li>
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="content">Easy maintenance with robust construction</div>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</div>
<div class="cusPanding principle-section ">
    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <!-- Customization -->
                <h2 class="mt-5">Customization & Control</h2>
                <ul class="list">
                    <li class="subListWrapper">
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-wind"></i></div>
                            <strong>Air Flow Control:</strong>
                        </div>
                        <ul class="sub-list">
                            <li>
                                <p>1. Increase by opening dampers</p>
                            </li>
                            <li>
                                <p>2. Decrease by closing dampers</p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-sliders"></i></div>
                            <strong>Blade Adjustment:</strong>
                        </div>
                        <p> Add/remove whizzer blades to increase or reduce resistance, controlling particle movement
                        </p>
                    </li>

                    <li>
                        <div class="iconContent">
                            <div class="icon"><i class="fa-solid fa-ruler-combined"></i></div>
                            <strong>Cut Size Control:</strong>
                        </div>
                        <p>Adjustable to suit material requirements (between 60 – 350 mesh)</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="principle-section cusPanding  applications bgGrey">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="sectionHeader">
                    <h2>Applications</h2>
                </div>

                <div class="grid">
                    <!-- Cement Industry -->
                    <div class="card" role="group" aria-label="Cement Industry">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-industry"></i></div>
                        <div>
                            <h3>Cement Industry</h3>
                            <p>For separation of cement particles</p>
                        </div>
                    </div>

                    <!-- Food Processing -->
                    <div class="card" role="group" aria-label="Food Processing">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-bread-slice"></i></div>
                        <div>
                            <h3>Food Processing</h3>
                            <p>Flour, food color, spices</p>
                        </div>
                    </div>

                    <!-- Chemical Industry -->
                    <div class="card" role="group" aria-label="Chemical Industry">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-flask"></i></div>
                        <div>
                            <h3>Chemical Industry</h3>
                            <p>Pigments, minerals, and fine powders</p>
                        </div>
                    </div>

                    <!-- Paints & Pigments -->
                    <div class="card" role="group" aria-label="Paints and Pigments">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Paints &amp; Pigments</h3>
                            <p>Color production and blending</p>
                        </div>
                    </div>

                    <!-- Mineral Processing -->
                    <div class="card" role="group" aria-label="Mineral Processing">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-mountain"></i></div>
                        <div>
                            <h3>Mineral Processing</h3>
                            <p>Ore handling and particle separation</p>
                        </div>
                    </div>

                    <!-- Pharmaceuticals -->
                    <div class="card" role="group" aria-label="Pharmaceuticals">
                        <div class="icon" aria-hidden="true"><i class="fa-solid fa-pills"></i></div>
                        <div>
                            <h3>Pharmaceuticals</h3>
                            <p>Granulation and fine powder processing</p>
                        </div>
                    </div>

                    <!-- Silica Sand & Quartz -->
                    <div class="card" role="group" aria-label="Silica Sand and Quartz">
                        <div class="icon" aria-hidden="true"><i class="fa-regular fa-gem"></i></div>
                        <div>
                            <h3>Silica Sand &amp; Quartz</h3>
                            <p>Grading and purification</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>