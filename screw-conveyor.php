<?php include('header.php') ?>

<!-- ================= Breadcrumb ================= -->
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
  <div class="container">
    <div class="breadCrumsTitleWrappr">
      <h2>Screw Conveyor</h2>
    </div>
  </div>
</div>

<!-- ================= Product Details + Gallery ================= -->
<div class="productDetails">
  <div class="container">
    <div class="row g-4 align-items-center">
      <!-- Gallery -->
      <div class="col-sm-12 col-md-6">
        <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
              $nb_elem_per_page = 100;
              $page = isset($_GET['page']) ? max(intval($_GET['page']) - 1, 0) : 0;
              $data = glob("./assets/images/products/screw-conveyor/*.*");
              $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

              $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
              $first = true;
              foreach ($images as $p) { ?>
                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                  <div class="productImage">
                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Screw Conveyor">
                      <img src="<?php echo $p; ?>" alt="Screw Conveyor / Feeder">
                    </a>
                  </div>
                </div>
            <?php $first = false; } ?>
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
            <?php $index = 0; foreach ($images as $p) { ?>
              <button type="button"
                      data-bs-target="#carousel-custom"
                      data-bs-slide-to="<?php echo $index; ?>"
                      class="<?php echo $index === 0 ? 'active' : ''; ?>"
                      aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                      aria-label="Slide <?php echo $index + 1; ?>">
                <img src="<?php echo $p; ?>" alt="">
              </button>
            <?php $index++; } ?>
          </div>
        </div>
      </div>

      <!-- Content -->
      <div class="col-sm-12 col-md-6">
        <div class="productDetailsContent">
          <div class="sectionHeader">
            <h2>Screw Conveyor</h2>
          </div>
          <div class="desc">
            <p><strong>Varahi Screw Conveyor / Feeder</strong> is a robust, customizable, and energy-efficient system used for the horizontal, inclined, or vertical movement of bulk dry materials. Engineered for industrial automation and consistent material flow, it helps reduce manual handling, increase productivity, and eliminate dust and spillage during transfer.</p>

            <ul class="list mt-2">
              <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Custom-built to suit material type, output requirement, and layout constraints.</div></li>
              <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Available in both conveying and feeding models.</div></li>
              <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content">Ideal for bulk solids, granules, powders, and small-sized materials.</div></li>
            </ul>
          </div>
          <?php
                        include("inq-btn.php");
                    ?>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ================= Technical Specifications ================= -->
<div class="productTable cusPanding">
  <div class="container">
    <div class="productTableWrapper">
      <div class="table-responsive">
        <table class="table">
          <thead style="background:#555;color:#fff;">
            <tr><th colspan="2">Technical Specifications</th></tr>
            <tr>
              <th style="width:32%">Parameter</th>
              <th>Specification</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Screw Diameter</td><td>100 mm to 600 mm</td></tr>
            <tr><td>Screw Length</td><td>300 mm to 30,000 mm</td></tr>
            <tr><td>Material Type</td><td>Mild Steel (MS), Stainless Steel (SS304/316)</td></tr>
            <tr><td>Power Requirement</td><td>Depends on application &amp; material (customized)</td></tr>
            <tr><td>Capacity Range</td><td>Variable (depends on design and material)</td></tr>
            <tr><td>Screw Types</td><td>Spiral, Paddle, Ribbon, Cut &amp; Folded</td></tr>
            <tr><td>Design Options</td><td>U-trough or Pipe type</td></tr>
            <tr><td>Mounting</td><td>Floor mount, inclined, vertical as per layout</td></tr>
            <tr><td>Optional Features</td><td>Jacketed body, multiple inlet/outlet ports</td></tr>
          </tbody>
        </table>
        <p class="mt-2"><em>Note: Output and motor HP vary depending on material properties such as density, flowability, moisture, and angle of inclination.</em></p>
      </div>
    </div>
  </div>
</div>

<!-- ================= Applications ================= -->
<div class="cusPanding principle-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-6">
        <h2>Applications of Screw Conveyor / Feeder</h2>
        <p><strong>Varahi Screw Conveyors</strong> are suitable for the transfer and controlled feeding of a wide range of <strong>bulk solid materials</strong>, including:</p>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content"><strong>Dry Powders:</strong> cement, gypsum, flour, spices, talcum</div></li>
          <li><div class="icon"><i class="fa-regular fa-snowflake"></i></div><div class="content"><strong>Small Ice Cubes:</strong> industrial chilling systems</div></li>
          <li><div class="icon"><i class="fa-solid fa-seedling"></i></div><div class="content"><strong>Seeds and Grains</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-gem"></i></div><div class="content"><strong>Minerals and Sand</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-flask"></i></div><div class="content"><strong>Chemicals and Fertilizers</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-boxes-stacked"></i></div><div class="content"><strong>Plastic Granules or Powders</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-bread-slice"></i></div><div class="content"><strong>Food Ingredients:</strong> salt, sugar, starch</div></li>
          <li><div class="icon"><i class="fa-solid fa-person-digging"></i></div><div class="content"><strong>Construction Materials:</strong> lime, ash, cement</div></li>
          <li><div class="icon"><i class="fa-solid fa-pills"></i></div><div class="content"><strong>Pharmaceutical Powders</strong> (in feeders)</div></li>
        </ul>
      </div>

      <!-- Working Principle -->
      <div class="col-sm-12 col-lg-6">
        <h2>Working Principle</h2>
        <p>Material is introduced at one end and moved forward by the rotating <strong>helical screw flight</strong> mounted on a central shaft. As the screw turns, it transports the material through the length of the trough or pipe to the discharge end. The screw motion can be <strong>horizontal, inclined, or vertical</strong>, depending on the application and layout.</p>

        <h5 class="mt-3">Key Components:</h5>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-shaft-window"></i></div><div class="content">Heavy-duty shaft with precision-welded screw flights</div></li>
          <li><div class="icon"><i class="fa-solid fa-box-open"></i></div><div class="content">Outer housing: Round pipe or U-trough</div></li>
          <li><div class="icon"><i class="fa-solid fa-droplet-slash"></i></div><div class="content">Bearings and stuffing boxes on both ends for smooth, leak-free operation</div></li>
          <li><div class="icon"><i class="fa-solid fa-gears"></i></div><div class="content">Drive unit with gear motor, chain drive, or direct coupling</div></li>
          <li><div class="icon"><i class="fa-solid fa-ellipsis"></i></div><div class="content">Optional intermediate hanger bearings for longer conveyors</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ================= Design Features & Benefits ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-6">
        <h2>Design Features</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-ruler-combined"></i></div><div class="content"><strong>Custom Lengths &amp; Diameters</strong> — Built as per client process needs</div></li>
          <li><div class="icon"><i class="fa-solid fa-shield-halved"></i></div><div class="content"><strong>Heavy-duty Construction</strong> — For rugged industrial use</div></li>
          <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content"><strong>Replaceable Bearings &amp; Bushes</strong> — Easy maintenance and long life</div></li>
          <li><div class="icon"><i class="fa-solid fa-repeat"></i></div><div class="content"><strong>Multiple Screw Flight Designs</strong> — For different flow characteristics</div></li>
          <li><div class="icon"><i class="fa-solid fa-cloud"></i></div><div class="content"><strong>Dust-proof Sealing</strong> — Stuffing boxes on both ends to avoid spillage</div></li>
          <li><div class="icon"><i class="fa-solid fa-temperature-arrow-up"></i></div><div class="content"><strong>Jacketed Designs Available</strong> — For heating or cooling material</div></li>
          <li><div class="icon"><i class="fa-solid fa-diagram-project"></i></div><div class="content"><strong>Flexible Mounting Options</strong> — As per site layout or process line</div></li>
        </ul>
      </div>

      <div class="col-sm-12 col-lg-6">
        <h2>Benefits of Varahi Screw Conveyor / Feeder</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-person-dolly"></i></div><div class="content"><strong>Automates Material Handling</strong> — Reduces manual labor</div></li>
          <li><div class="icon"><i class="fa-solid fa-water"></i></div><div class="content"><strong>Uniform Material Flow</strong> — For consistent process quality</div></li>
          <li><div class="icon"><i class="fa-solid fa-broom"></i></div><div class="content"><strong>Dust-free Operation</strong> — Keeps workspace clean</div></li>
          <li><div class="icon"><i class="fa-solid fa-bolt"></i></div><div class="content"><strong>Low Power Consumption</strong> — Energy-efficient design</div></li>
          <li><div class="icon"><i class="fa-solid fa-object-ungroup"></i></div><div class="content"><strong>Compact Footprint</strong> — Ideal for space-constrained sites</div></li>
          <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content"><strong>Highly Customizable</strong> — Based on material, process, and output</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ================= Optional Custom Features ================= -->
<div class="cusPanding principle-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-12">
        <h2>Optional Custom Features</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-rotate"></i></div><div class="content">Reverse or Bidirectional Screw Rotation</div></li>
          <li><div class="icon"><i class="fa-solid fa-jug-detergent"></i></div><div class="content">Outer Jacket for Heating/Cooling</div></li>
          <li><div class="icon"><i class="fa-regular fa-gem"></i></div><div class="content">Construction in SS304, SS316, or Pharma-grade Materials</div></li>
          <li><div class="icon"><i class="fa-solid fa-gauge"></i></div><div class="content">Variable Speed Drive (VFD) for Output Control</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
