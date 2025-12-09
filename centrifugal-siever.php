<?php include('header.php') ?>

<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Centrifugal Siever</h2>
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
                        $data = glob("./assets/images/products/centrifugal-siever/*.*"); // place product images here
                        $number_of_pages = max(1, intval(count($data) / $nb_elem_per_page) + 1);

                        $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
                        $first = true;
                        foreach ($images as $p) { ?>
                            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                <div class="productImage">
                                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Product Image">
                                        <img src="<?php echo $p; ?>" alt="Centrifugal Siever Image">
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
                    <h2>Centrifugal Siever</h2>
                    <div class="desc">
                        <p><strong>Varahi Industries’ Centrifugal Siever</strong> is an advanced, high-capacity screening
                            machine for continuous separation and grading of powders and granules. It delivers smooth,
                            dust-free operation and highly consistent output across a wide range of industries.</p>
                        <p>Material is accelerated inside a rotating cylindrical screen; high-speed paddles force
                            particles through the perforated mesh for uniform screening while an integrated brush
                            assembly keeps the screen clean to prevent clogging and maintain throughput.</p>
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
                    <div class="icon"><i class="fa-solid fa-box-open"></i></div>
                    <strong>Infeed</strong>
                </div>
                <p>Powder/granules are fed into a rotating cylindrical screen (sieve basket).</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-rotate"></i></div>
                    <strong>Centrifugal Screening</strong>
                </div>
                <p>High-speed paddles fling material outward, pushing on-screen particles through the mesh apertures.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-brush"></i></div>
                    <strong>Auto Cleaning</strong>
                </div>
                <p>A brush assembly continuously wipes the mesh to avoid blinding and sustain capacity.</p>
            </li>
            <li>
                <div class="iconContent">
                    <div class="icon"><i class="fa-solid fa-diagram-project"></i></div>
                    <strong>Discharge</strong>
                </div>
                <p>Fines pass through to the collection outlet; oversize is conveyed to a separate discharge.</p>
            </li>
        </ul>
    </div>
</section>

<!-- Features -->
<div class="cusPanding principle-section bgGrey">
    <div class="container">
        <div class="secTitle">
            <h2>Key Features &amp; Benefits</h2>
        </div>
        <ul class="Featureslist ThirdGrid">
            <li>
                <div class="icon"><i class="fa-solid fa-microscope"></i></div>
                <div class="content">Precise particle separation &amp; uniform sizing</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-wind"></i></div>
                <div class="content">Continuous, high-capacity, dust-free operation</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-brush"></i></div>
                <div class="content">Screen brush system prevents clogging/blinding</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-gear"></i></div>
                <div class="content">Adjustable paddle speed &amp; screen mesh sizes</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-industry"></i></div>
                <div class="content">Robust, hygienic construction (MS/SS) for easy cleaning</div>
            </li>
            <li>
                <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div class="content">Low maintenance &amp; simple access for changeovers</div>
            </li>
        </ul>
    </div>
</div>

<!-- Applications -->
<section class="principle-section cusPanding">
    <div class="container">
        <div class="secTitle">
            <h2>Applications</h2>
        </div>
        <div class="grid ThirdGrid">
            <div class="card">
                <div class="icon"><i class="fa-solid fa-seedling"></i></div>
                <div>
                    <h3>Guar Gum &amp; Derivatives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-leaf"></i></div>
                <div>
                    <h3>TKP &amp; CMTKP</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-spa"></i></div>
                <div>
                    <h3>Psyllium Husk &amp; Powder</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-cubes"></i></div>
                <div>
                    <h3>Starch &amp; Derivatives</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-pills"></i></div>
                <div>
                    <h3>Pharma &amp; Nutraceuticals</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-mountain"></i></div>
                <div>
                    <h3>Minerals &amp; Chemicals</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon"><i class="fa-solid fa-bowl-food"></i></div>
                <div>
                    <h3>Grain, Flour &amp; Food Processing</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>