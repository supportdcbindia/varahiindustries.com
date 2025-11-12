<?php include('header.php') ?>
<div class="productbreadcrumb">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Application</h2>
        </div>
    </div>
</div>
<div class="ApplicationSec cuspending">
    <div class="container">
        <div class="ApplicationGrid">
            <?php
            $data = glob("assets/images/inner-pages/industry-we-serve/*.*");

            ?>
            <?php
            foreach ($data as $path) {
            ?>
                <div class="ApplicationItem">
                    <div class="ApplicationImage">
                        <img src="<?php echo $path; ?>" alt="">
                    </div>
                    <div class="ApplicationContentWrapper">
                        <div class="ApplicationContent">
                            <h5 style="color:#000"><?php echo str_replace("-", " ", ucfirst(str_replace(".webp", "", str_replace("assets/images/inner-pages/industry-we-serve/", "", $path)))); ?></h5>
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


            <?php
            }
            ?>

        </div>
    </div>
</div>

</div>
</div>

<?php include('footer.php') ?>