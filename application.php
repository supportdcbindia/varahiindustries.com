<?php include('header.php') ?>
<div class="breadCrumsWrapper" style="background-image: url('./assets/images/breadcum/appliction.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Application</h2>
        </div>
    </div>
</div>

<div class="IndustriesSec innerPage cusPanding">
    <div class="container">
        <div class="IndustriesGrid">
            <?php
            $nb_elem_per_page = 100;
            $page = isset($_GET['page']) ? intval($_GET['page'] - 1) : 0;
            $data = glob("assets/images/industries-we-serve/*.*");
            $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;
            ?>
            <?php
            foreach (array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page) as $p) {
            ?>
                <div class="IndustriesItem">
                    <div class="IndustriesImage">
                        <img src="<?php echo $p; ?>" alt="">
                    </div>
                    <div class="industriesContent">
                        <h5><?php echo str_replace("-", " ", str_replace(".webp", "", str_replace("assets/images/industries-we-serve/", "", $p))); ?></h5>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>

<?php include('footer.php') ?>