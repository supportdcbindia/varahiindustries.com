<?php include('header.php') ?>

<!-- ================= Breadcrumb ================= -->
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
  <div class="container">
    <div class="breadCrumsTitleWrappr">
      <h2>Chilli Grinder – Automatic Blower Pulverizer</h2>
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
              $data = glob("./assets/images/products/chilli-grinder/*.*");
              $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

              $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
              $first = true;
              foreach ($images as $p) { ?>
                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                  <div class="productImage">
                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Chilli Grinder Image">
                      <img src="<?php echo $p; ?>" alt="Chilli Grinder – Automatic Blower Pulverizer">
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
            <h2>Chilli Grinder – Automatic Blower Pulverizer</h2>
          </div>
          <div class="desc">
            <p><strong>Varahi Industries</strong> presents the <strong>Chilli Grinder (Blower Pulverizer)</strong>—a high-performance, automatic spice processing unit designed for efficient, cool, and dust-free grinding of red chillies and various spices.</p>
            <p>Built for both small-scale processors and commercial plants, this machine delivers outstanding throughput and consistent output.</p>
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
              <th style="width:32%">Specification</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Machine Type</td>
              <td>Automatic Blower Pulverizer</td>
            </tr>
            <tr>
              <td>Capacity</td>
              <td>50 – 5,000 kg/hr</td>
            </tr>
            <tr>
              <td>Motor Power</td>
              <td>2 HP (~1.1 kW)</td>
            </tr>
            <tr>
              <td>Power Phase</td>
              <td>Single / Three Phase</td>
            </tr>
            <tr>
              <td>Material</td>
              <td>Mild Steel (MS)</td>
            </tr>
            <tr>
              <td>Fineness Control</td>
              <td>Interchangeable Screens</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- ================= Key Benefits ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-12">
        <h2>Key Benefits</h2>
        <ul class="list">
          <li>
            <div class="icon"><i class="fa-solid fa-gauge-high"></i></div>
            <div class="content"><strong>High Throughput Capacity</strong> – up to 5,000 kg/hr to meet various production scales</div>
          </li>
          <li>
            <div class="icon"><i class="fa-solid fa-wind"></i></div>
            <div class="content"><strong>Efficient Cooling &amp; Dust Management</strong> – airflow keeps the mill cool, ensuring product quality</div>
          </li>
          <li>
            <div class="icon"><i class="fa-solid fa-sliders"></i></div>
            <div class="content"><strong>Adjustable Fineness</strong> – easy replacement of screens to vary powder texture</div>
          </li>
          <li>
            <div class="icon"><i class="fa-solid fa-leaf"></i></div>
            <div class="content"><strong>Energy Efficient &amp; Durable</strong> – low maintenance, economical operation</div>
          </li>
          <li>
            <div class="icon"><i class="fa-solid fa-plug"></i></div>
            <div class="content"><strong>Flexible Power Options</strong> – suitable for facilities with single or three-phase power</div>
          </li>
          <li>
            <div class="icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div class="content"><strong>Sturdy Construction</strong> – built for industrial robustness with MS components</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
