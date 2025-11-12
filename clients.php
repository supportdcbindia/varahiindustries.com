<?php include('header.php') ?>
<div class="breadCrumsWrapper" style="background-image: url('./assets/images/breadcum/clients.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Clients</h2>
        </div>
    </div>
</div>

<div class="ClientSec cuspending">
    <div class="container">
        <div class="secTitle">
            <h2>Food</h2>
        </div>
        <div class="clientGrid">
            <?php
            $data = glob("assets/images/home-page/clients/food/*.*");

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
        <div class="secTitle mt-5">
            <h2>Chemical</h2>
        </div>
        <div class="clientGrid">
            <?php
            $data = glob("assets/images/home-page/clients/chemical/*.*");

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

<?php include('footer.php') ?>