<?php include('header.php') ?>
<div class="bannerSec DesktopBanner">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <?php
            $nb_elem_per_page = 100;
            $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
            $data = glob("assets/images/home-page/banners/*.*");
            $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
            ?>
            <?php
            foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
            ?>
                <div class="swiper-slide">
                    <div class="bannerImg">
                        <img src="<?php echo $p; ?>" alt="">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="arrowWrapper">
            <div class="slideshow-pagination">
                <span class="dayanamicSlide"></span>
                <span class="text-2">/</span>
                <span class="TotalSlide"></span>
            </div>
            <div class="sliderArrow">
                <div class="swiper-button-prev">
                    <span class="icon-1">
                        <i class="fa-light fa-chevron-left"></i>
                    </span>
                    Prev
                </div>
                <div class="swiper-button-next">
                    Next
                    <span class="icon-2">
                        <i class="fa-light fa-chevron-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bannerSec MobileBanner">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <?php
            $nb_elem_per_page = 100;
            $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
            $data = glob("assets/images/banner/mobiBanner/*.*");
            $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
            ?>
            <?php
            foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
            ?>
                <div class="swiper-slide">
                    <div class="bannerImg">
                        <img src="<?php echo $p; ?>" alt="">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="arrowWrapper">
            <div class="slideshow-pagination">
                <span class="dayanamicSlide"></span>
                <span class="text-2">/</span>
                <span class="TotalSlide"></span>
            </div>
            <div class="sliderArrow">
                <div class="swiper-button-prev">
                    <span class="icon-1">
                        <i class="fa-light fa-chevron-left"></i>
                    </span>
                    Prev
                </div>
                <div class="swiper-button-next">
                    Next
                    <span class="icon-2">
                        <i class="fa-light fa-chevron-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="aboutusSec cuspending">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="aboutImgWrapper">

                    <div class="aboutImg">
                        <img src="assets/images/teams/teams.webp" alt="">
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="aboutContent">
                    <div class="secTitle mb-0">
                        <span>Welcome to </span>
                        <h2>
                            <font style="color: #f53a42; font-size: 49px;">VARAHI</font>
                            <font style="color: #6f6f6f;"> INDUSTRIES</font>
                        </h2>
                    </div>

                    <div class="desc">
                        <p>Varahi Industries is a trusted name in the powder processing machinery industry, led by a
                            team of experienced technocrats and engineers based in Ahmedabad, Gujarat, India. With
                            decades of combined experience and a commitment to innovation, we deliver reliable,
                            high-performance machinery to a wide range of industries including chemical, pharmaceutical,
                            food, agrochemical, mineral, and more.</p>
                        <p> We specialize in designing, manufacturing, and supplying world-class equipment for particle
                            size reduction, powder blending, screening, conveying, drying, and dust control. Our wide
                            product range is known for its quality, efficiency, and durability—earning us the trust of
                            customers across India and overseas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="whychoose bgGrey cuspending">
    <div class="container">
        <div class="secTitle">
            <span>Why Choose US?</span>
            <h2>Why Choose Varahi Industries?</h2>
            <p class="text-muted">Engineering excellence, measurable output, and dependable lifetime support.
            </p>
        </div>


        <!-- Main: Visual + Key points -->
        <div class="row g-4 align-items-stretch mt-3">
            <div class="col-lg-6">
                <div class="row g-3">
                    <!-- Card -->
                    <div class="col-12">
                        <article class="wc-card h-100">
                            <div class="wc-num">01</div>
                            <div class="wc-icon"><i class="bi bi-award-fill"></i></div>
                            <h5 class="mb-1">3+ Decades of Domain Expertise</h5>
                            <p class="text-muted mb-0">Deep understanding of powder & particle processing with proven
                                installs worldwide.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="wc-card h-100">
                            <div class="wc-num">02</div>
                            <div class="wc-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <h6 class="mb-1">Custom Engineering</h6>
                            <p class="text-muted mb-0">Solutions tailored to your material, capacity and energy targets.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="wc-card h-100">
                            <div class="wc-num">03</div>
                            <div class="wc-icon"><i class="bi bi-lightbulb-fill"></i></div>
                            <h6 class="mb-1">In-House R&amp;D</h6>
                            <p class="text-muted mb-0">Continuous innovation and performance benchmarking for each
                                model.</p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="wc-card h-100">
                            <div class="wc-num">04</div>
                            <div class="wc-icon"><i class="bi bi-headset"></i></div>
                            <h6 class="mb-1">End-to-End Support</h6>
                            <p class="text-muted mb-0">Selection, commissioning, training, spares and service backup.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="wc-card h-100">
                            <div class="wc-num">05</div>
                            <div class="wc-icon"><i class="bi bi-shield-check"></i></div>
                            <h6 class="mb-1">Reliable Quality</h6>
                            <p class="text-muted mb-0">Robust construction, premium components, and strict QC protocols.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wc-visual h-100">
                    <img src="assets/images/why-choose-us/why-choose-us.webp"
                        class="wc-visual-img" alt="Precision industrial equipment">

                </div>
            </div>
        </div>

        <!-- Footnote -->
    </div>
</section>
<!-- <div class="whyChooesUs bgGrey cuspending">
    <div class="container">
        <div class="secTitle">
            <span>Why Choose US?</span>
            <h2>Why Choose Varahi Industries?</h2>
        </div>
        <div class="whyChooesUsGrid">
            <div class="whyChooesUsItem whyChooesUsImageItem">
                <div class="whyChooesUsImg">
                    <img src="assets/images/home-page/why-choose-us/why-choose-us.webp" alt="">
                </div>
            </div>
            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/decades-of-expertise.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5>Decades of Expertise</h5>
                    <p> Backed by over 35 years of industry experience, we deeply understand the complex requirements of
                        powder and particle processing.</p>
                </div>
            </div>
            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/customized-engineering.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5>Customized Engineering</h5>
                    <p> We specialize in tailoring machinery to meet specific application needs—ensuring optimal output,
                        energy efficiency, and low maintenance.</p>
                </div>
            </div>

            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/in-house-r&d.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5> In-House R&D</h5>
                    <p> Our strong focus on research and innovation allows us to stay ahead of market trends and
                        continuously improve our product range.
                </div>
                </p>
            </div>
            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/end-to-end-support.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5> End-to-End Support</h5>
                    <p> From machine selection to post-installation support, our team provides complete technical
                        assistance, training, and service backup.</p>
                </div>
            </div>
            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/strong-industry-network.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5> Strong Industry Network</h5>
                    <p> With a wide client base across India and international markets, we’re well-versed in meeting
                        global standards and customer expectations.</p>
                </div>
            </div>
            <div class="whyChooesUsItem">
                <div class="imgIcon">
                    <img src="assets/images/home-page/why-choose-us/icon/reliable-quality-performance.webp" alt="">
                </div>
                <div class="whyContent">
                    <h5>Reliable Quality & Performance</h5>
                    <p> Every machine is built with robust construction, superior components, and stringent quality
                        control protocols to ensure long-lasting performance.</p>
                </div>
            </div>
            <div class="IconMove">
                <img src="assets/images/home-page/why-choose-us/side-icon.webp" />
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="counterSec">
    <div class="container">
        <div class="counterGrid">
            <div class="counterItem">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/industries-served.webp"
                        alt="">
                </div>
                <div class="counterContent">
                    <h5>
                        <span class="purecounter">50</span>K
                    </h5>
                    <span>Industries Served</span>
                </div>
            </div>

            <div class="counterItem">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/installations.webp"
                        alt="">
                </div>
                <div class="counterContent">
                    <h5>
                        <span class="purecounter">1000</span>K
                    </h5>
                    <span>Installations</span>
                </div>
            </div>

            <div class="counterItem">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/countries.webp"
                        alt="">
                </div>
                <div class="counterContent">
                    <h5>
                        <span class="purecounter">25</span>K+
                    </h5>
                    <span>Countries</span>
                </div>
            </div>

            <div class="counterItem">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/client-satisfaction.webp"
                        alt="">
                </div>
                <div class="counterContent">
                    <h5>
                        <span class="purecounter">99</span>L+
                    </h5>
                    <span>Client Satisfaction</span>
                </div>
            </div>
        </div>
    </div>
</div> -->

<section class="kpi-wrap" aria-label="Company Stats">
    <div class="container">
        <div class="kpi-grid">
            <!-- Card 1 -->
            <article class="kpi-card">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/industries-served.webp" alt="">
                </div>
                <div class="kpi-num">
                    <span class="count" data-target="50">0</span><span class="plus">+</span>
                </div>
                <p class="kpi-label">Years of experience</p>
            </article>

            <!-- Card 2 -->
            <article class="kpi-card">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/installations.webp" alt="">
                </div>
                <div class="kpi-num">
                    <span class="count" data-target="4600">0</span><span class="plus">+</span>
                </div>
                <p class="kpi-label">Clients</p>
            </article>

            <!-- Card 3 -->
            <article class="kpi-card">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/countries.webp" alt="">
                </div>
                <div class="kpi-num">
                    <span class="count" data-target="26000">0</span><span class="plus">+</span>
                </div>
                <p class="kpi-label">Sq. Ft. Factory Spread</p>
            </article>

            <!-- Card 4 -->
            <article class="kpi-card">
                <div class="counterIcon">
                    <img src="assets/images/home-page/counter/client-satisfaction.webp" alt="">
                </div>
                <div class="kpi-num">
                    <span class="count" data-target="99">0</span><span class="plus">%</span>
                </div>
                <p class="kpi-label">Client Satisfaction</p>
            </article>
        </div>
    </div>
</section>

<div class="productSec bgGrey cuspending">
    <div class="container">
        <div class="secTitle">
            <span>Our Product Range</span>
            <h2>Premium Processing Equipment</h2>
        </div>

        <div class="productGrid">
            <div class="productItem">
                <div class="productImage">
                    <a href="blender.php"><img src="assets/images/products/blender/reactor-blender/reactor-blender.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Blender</h5>
                        <!-- <p>Air Classifier is a high-efficiency centrifugal air separator, engineered to separate dry
                            powders into coarse and fine fractions.</p> -->
                    </div>


                    <div class="viewMoreBtn">
                        <a href="blender.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="pulveriser.php"><img
                            src="assets/images/products/pulverizer/mineral-pulveriser/mineral-pulveriser.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Pulveriser</h5>
                        <!-- <p>Impex Pulverizer is a high-performance grinding system designed to pulverize a wide range of
                            materials into fine powder form.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="pulveriser.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="jet-mill.php"><img src="assets/images/products/jet-mill/air-jet-mill/air-jet-mill.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Jet Mill</h5>
                        <!-- <p>Jaw Crusher is a leading manufacturer and exporter of high-performance Jaw Crushers in India,
                            engineered to crush even the hardest materials with unmatched durability and efficiency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="jet-mill.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="crusher.php"><img src="assets/images/products/crusher/jaw-crusher/stone-crusher.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Crusher </h5>
                        <!-- <p>Jet Mill is an advanced micronizing system designed to reduce particle sizes to the
                            sub-micron level without any moving parts inside the grinding chamber.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="crusher.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="hammer-mills.php"><img
                            src="assets/images/products/hammer-mill/hammer-mill/hammer-mill.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Hammer Mill</h5>
                        <!-- <p>Ribbon Blender is a highly efficient and versatile mixing machine designed for the
                            homogeneous blending of dry powders, granules, and a small percentage of liquids.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="hammer-mills.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="vibro-sifter.php"><img src="assets/images/products/vibro-sfiter/vibro-sfiter.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Vibro Sifter</h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="vibro-sifter.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="screw-conveyor-feeder.php"><img
                            src="assets/images/products/screw-conveyor-feeder/vertical-screw-conveyor/vertical-screw-conveyor.webp"
                            alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Screw Conveyor / Feeder</h5>
                        <!-- <p>Screw Conveyor / Feeder is a robust, customizable, and energy-efficient system used for the
                            horizontal, inclined, or vertical movement of bulk dry materials. </p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="screw-conveyor-feeder.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="air-classifier.php"><img src="assets/images/products/air-classifier/air-classifler-2.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Air Classifier
                        </h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="air-classifier.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="centrifugal-siever.php"><img src="assets/images/products/centrifugal-siever/centrifugal-siever.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Centrifugal Siever




                        </h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="centrifugal-siever.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="rotary-air-lock-valve.php"><img src="assets/images/products/rotary-air-lock-valve/rotary-air-lock-valve.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Rotary Air Lock Valve</h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="rotary-air-lock-valve.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="pulse-jet-dust-collector.php"><img src="assets/images/products/pulse-jet-dust-collector/puls-jet-dust-collector.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Pulse Jet Dust Collector (PJDC)</h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="pulse-jet-dust-collector.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="bag-dumping-station.php"><img src="assets/images/products/bag-dumping-station/bag-dumping-unit.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Bag Dump Station</h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="bag-dumping-station.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="productItem">
                <div class="productImage">
                    <a href="pesticide-powder-formulation-plant.php"><img src="assets/images/products/pesticide-powder-formulation-plant/pesticides-powder-formulation-plant.webp" alt=""></a>
                </div>
                <div class="productContentWrapper">
                    <div class="productContent">
                        <h5>Pesticides Formulation Plant</h5>
                        <!-- <p>High-efficiency mixing equipment for uniform blending of powders, granules, and paste
                            materials with excellent mixing consistency.</p> -->
                    </div>

                    <div class="viewMoreBtn">
                        <a href="pesticide-powder-formulation-plant.php">Learn More<i class="fa-light fa-chevrons-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="videoBannerSec">
    <div class="videoImg">
        <img src="./assets/images/banner/varahi-b1.webp" alt="">
    </div>
    <div class="videoPlayIcon" aria-label="Play video" data-bs-toggle="modal" data-bs-target="#videoModal"
        data-video="https://www.youtube.com/embed/A-97gYvgr-s">
        <div class="pulse"></div>
        <div class="pulse"></div>
        <div class="pulse"></div>
        <i class="fa-light fa-play"></i>
    </div>
</div>

<!-- ===== Bootstrap Modal ===== -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button type="button" class="btn-close btn-close-white position-absolute end-0 m-3" data-bs-dismiss="modal"
                aria-label="Close"></button>

            <div class="ratio ratio-16x9">
                <!-- iframe for YouTube/Vimeo -->
                <iframe id="videoFrame" src="" title="Video" allow="autoplay; encrypted-media; picture-in-picture"
                    allowfullscreen style="display:none;"></iframe>

                <!-- local MP4 fallback -->
                <video id="videoLocal" src="" controls playsinline style="display:none;"></video>
            </div>
        </div>
    </div>
</div>

<div class="ApplicationSec cuspending">
    <div class="container">
        <div class="secTitle">
            <span>Industries We Serve</span>
            <h2>Powering Industries with Precision Processing</h2>
        </div>

        <div class="ApplicationGrid">
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/pharmaceutical.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Pharmaceutical Industry</h5>
                        <!-- <p>High-precision mixing and grinding solutions for drug formulation, ensuring consistent
                            particle size and uniform distribution for pharmaceutical manufacturing.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> cGMP compliant equipment design </li>
                        <li><i class="fa-solid fa-check"></i> Contamination-free processing</li>
                        <li><i class="fa-solid fa-check"></i> Precise particle size control</li>
                    </ul> -->
                </div>
            </div>
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/spices-processing-systems.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Spices Processing Systems</h5>
                        <!-- <p>Efficient grinding and mixing solutions for spice production, delivering uniform texture,
                            aroma retention, and enhanced shelf life for global spice markets.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> Hygienic and food-grade equipment design</li>
                        <li><i class="fa-solid fa-check"></i> Aroma and essential oil retention during processing</li>
                        <li><i class="fa-solid fa-check"></i> Consistent particle size and flavor uniformity</li>
                    </ul> -->
                </div>
            </div>
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/dyes-pigment-grinding-machine.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Dyes & Pigment Grinding Machine</h5>
                        <!-- <p>Advanced grinding technology for pigments and dyes, ensuring fine particle dispersion,
                            vibrant color strength, and stable formulations for coatings, textiles, and plastics.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> High-intensity grinding for ultra-fine particles</li>
                        <li><i class="fa-solid fa-check"></i> Uniform color distribution and stability</li>
                        <li><i class="fa-solid fa-check"></i> Designed for continuous, contamination-free processing
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/food-beverage.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Food & Beverage</h5>
                        <!-- <p>Food-grade processing equipment for mixing spices, grinding grains, and processing food
                            ingredients with hygiene and safety standards.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> FDA compliant materials</li>
                        <li><i class="fa-solid fa-check"></i> Easy cleaning and maintenance</li>
                        <li><i class="fa-solid fa-check"></i> Hygienic design standards</li>
                    </ul> -->
                </div>
            </div>
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/cosmetics-personal-care.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Cosmetics & Personal Care</h5>
                        <!-- <p>Specialized equipment for cosmetic powder mixing, pigment dispersion, and beauty product
                            formulation with precise control.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> Gentle mixing for sensitive materials</li>
                        <li><i class="fa-solid fa-check"></i> Color consistency maintenance</li>
                        <li><i class="fa-solid fa-check"></i> Batch-to-batch uniformity</li>
                    </ul> -->
                </div>
            </div>
            <div class="ApplicationItem">
                <div class="ApplicationImage">
                    <img src="assets/images/home-page/industry-we-serve/mining-&-minerals.webp" alt="">
                </div>
                <div class="ApplicationContentWrapper">
                    <div class="ApplicationContent">
                        <h5>Mining & Minerals</h5>
                        <!-- <p>Industrial-grade equipment for mineral processing, ore grinding, and material beneficiation
                            in mining operations.</p> -->
                    </div>
                    <!-- <ul>
                        <li><i class="fa-solid fa-check"></i> Heavy-duty construction</li>
                        <li><i class="fa-solid fa-check"></i> Wear-resistant materials</li>
                        <li><i class="fa-solid fa-check"></i> Continuous operation capability</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ClientSec bgGrey cuspending">
    <div class="container">
        <div class="secTitle">
            <span>Our Clients</span>
            <h2>Our Valuable Clients</h2>
        </div>

        <div class="clientGrid">

            <?php
            $data = glob("assets/images/home-page/clients/*.*");

            ?>
            <?php
            foreach ($data as $path) {
            ?>
                <div class="item">
                    <div class="pro-block">
                        <a href="<?php echo $path; ?>">
                            <img src="<?php echo $path; ?>" alt="Clients">
                        </a>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>


<div class="MapSec pt-100 cuspending" style="padding-bottom:0px">
    <div class="container">
        <div class="secTitle">
            <span>Connecting Continents, Empowering Growth </span>
            <h2>Global Presence</h2>
        </div>

    </div>
    <div class="MapImg">
        <img src="assets/images/map/map.webp" alt="">
    </div>
</div>

<div class="ctaSec">
    <div class="container">
        <div class="ctaContentWrapper">
            <h5>Join Our Growing Family of Success Stories</h5>
            <a href="#!" class="click1">Become Our Partner</a>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
<script>
    (function() {
        const modalEl = document.getElementById('videoModal');
        const iframe = document.getElementById('videoFrame');
        const videoLocal = document.getElementById('videoLocal');

        // When modal opens: read URL from trigger and play
        modalEl.addEventListener('show.bs.modal', function(event) {
            const trigger = event.relatedTarget; // the button that opened the modal
            const url = (trigger && trigger.dataset.video) ? trigger.dataset.video.trim() : "";

            if (!url) return;

            const isMP4 = /\.mp4(\?|#|$)/i.test(url);

            if (isMP4) {
                // Use <video> for mp4
                iframe.style.display = 'none';
                iframe.src = '';

                videoLocal.style.display = 'block';
                videoLocal.src = url;
                // try autoplay (may be blocked on some browsers without user gesture)
                videoLocal.play().catch(() => {});
            } else {
                // Use <iframe> for YT/Vimeo with autoplay
                videoLocal.pause();
                videoLocal.removeAttribute('src');
                videoLocal.load();
                videoLocal.style.display = 'none';

                const sep = url.includes('?') ? '&' : '?';
                iframe.src = `${url}${sep}autoplay=1&rel=0&modestbranding=1`;
                iframe.style.display = 'block';
            }
        });

        // When modal closes: stop & cleanup
        modalEl.addEventListener('hidden.bs.modal', function() {
            iframe.src = '';
            videoLocal.pause();
            videoLocal.removeAttribute('src');
            videoLocal.load();
        });
    })();
</script>