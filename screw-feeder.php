<?php include('header.php') ?>

<!-- ================= Breadcrumb ================= -->
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
  <div class="container">
    <div class="breadCrumsTitleWrappr">
      <h2>Screw Feeder (Single &amp; Double Toggle Type)</h2>
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
              $data = glob("./assets/images/products/screw-feeder/*.*");
              $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

              $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
              $first = true;
              foreach ($images as $p) { ?>
                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                  <div class="productImage">
                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Screw Feeder">
                      <img src="<?php echo $p; ?>" alt="Screw Feeder (Single & Double Toggle)">
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
            <h2>Screw Feeder (Single &amp; Double Toggle Type)</h2>
          </div>
          <div class="desc">
            <p><strong>Varahi Screw Feeders</strong> are robust mechanical feeders designed to consistently feed material into <strong>Single Toggle</strong> or <strong>Double Toggle</strong> jaw crushers for size reduction. These systems ensure controlled flow, minimize bridging, and improve crushing efficiency—ideal for hard, abrasive, and heavy materials.</p>
            <p><em>Engineered for crushing hard materials like granite, dolomite, limestone, ferro alloys, coal, and more.</em></p>
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
            <tr><th colspan="7">Technical Specifications — Single Toggle Screw Feeder (Grease Lubricated)</th></tr>
            <tr>
              <th>Model</th>
              <th>Output (Ton/hr)</th>
              <th>Outlet Gap (mm)</th>
              <th>RPM</th>
              <th>Motor (HP)</th>
              <th>Feed Size Max (mm)</th>
              <th>Inlet Size (mm)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>VJC16x9</td>
              <td>18 – 10</td>
              <td>60 – 15</td>
              <td>300</td>
              <td>25</td>
              <td>180</td>
              <td>400 × 225</td>
            </tr>
            <tr>
              <td>VJC12x7</td>
              <td>10 – 6</td>
              <td>50 – 20</td>
              <td>300</td>
              <td>15</td>
              <td>140</td>
              <td>300 × 175</td>
            </tr>
            <tr>
              <td>VJC10x6</td>
              <td>4 – 1.5</td>
              <td>40 – 15</td>
              <td>300</td>
              <td>10</td>
              <td>125</td>
              <td>250 × 150</td>
            </tr>
            <tr>
              <td>VJC8x4</td>
              <td>1.2 – 0.5</td>
              <td>25 – 15</td>
              <td>300</td>
              <td>5</td>
              <td>75</td>
              <td>200 × 100</td>
            </tr>
          </tbody>
        </table>

        <table class="table mt-4">
          <thead style="background:#555;color:#fff;">
            <tr><th colspan="7">Technical Specifications — Double Toggle Screw Feeder (Oil Lubricated)</th></tr>
            <tr>
              <th>Model</th>
              <th>Output (Ton/hr)</th>
              <th>Outlet Gap (mm)</th>
              <th>RPM</th>
              <th>Motor (HP)</th>
              <th>Feed Size Max (mm)</th>
              <th>Inlet Size (mm)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>VJC20x12</td>
              <td>13 – 38</td>
              <td>20 – 62</td>
              <td>350 – 380</td>
              <td>25</td>
              <td>250</td>
              <td>500 × 300</td>
            </tr>
          </tbody>
        </table>

        <p class="mt-2"><em>Note: All values are indicative and based on processing stone of 1600 kg/m³ density. Actual output may vary depending on feed size, material hardness, moisture, and feed rate.</em></p>
      </div>
    </div>
  </div>
</div>

<!-- ================= About Single/Double Toggle ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-6">
        <h2>About Single Toggle Screw Feeder</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-diagram-project"></i></div><div class="content"><strong>Design:</strong> Heavy-duty fabricated body using mild steel</div></li>
          <li><div class="icon"><i class="fa-solid fa-sitemap"></i></div><div class="content"><strong>Main Shaft:</strong> Eccentric shaft runs on antifriction bearings</div></li>
          <li><div class="icon"><i class="fa-solid fa-cubes-stacked"></i></div><div class="content"><strong>Jaw Construction:</strong> Oscillating jaw in MS, jaw plates in high manganese steel</div></li>
          <li><div class="icon"><i class="fa-solid fa-gears"></i></div><div class="content"><strong>Drive:</strong> Pulley-based with options for flat belt or V-belt drive</div></li>
          <li><div class="icon"><i class="fa-solid fa-ruler"></i></div><div class="content"><strong>Gap Adjustment:</strong> Outlet gap adjustable via toggle plate spacers</div></li>
          <li><div class="icon"><i class="fa-solid fa-syringe"></i></div><div class="content"><strong>Lubrication:</strong> Grease-based</div></li>
        </ul>
        <p class="mt-2">Ideal for medium-output, space-constrained operations requiring a compact crushing solution.</p>
      </div>

      <div class="col-sm-12 col-lg-6">
        <h2>About Double Toggle Screw Feeder</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-box"></i></div><div class="content"><strong>Design:</strong> Extra strong box-beam type body with oil bath lubrication</div></li>
          <li><div class="icon"><i class="fa-solid fa-shaft"></i></div><div class="content"><strong>Shaft:</strong> Alloy steel eccentric shaft with antifriction bearings</div></li>
          <li><div class="icon"><i class="fa-solid fa-align-center"></i></div><div class="content"><strong>Jaw Arrangement:</strong> Balanced oscillating jaw with minimal rubbing</div></li>
          <li><div class="icon"><i class="fa-solid fa-diagram-next"></i></div><div class="content"><strong>Toggle Mechanism:</strong> Double toggle design distributes load effectively</div></li>
          <li><div class="icon"><i class="fa-solid fa-circle-notch"></i></div><div class="content"><strong>Flywheels:</strong> Dual-purpose (pulley + power reducer)</div></li>
          <li><div class="icon"><i class="fa-solid fa-ruler-horizontal"></i></div><div class="content"><strong>Gap Adjustment:</strong> Spacer-based outlet gap control</div></li>
          <li><div class="icon"><i class="fa-solid fa-droplet"></i></div><div class="content"><strong>Lubrication:</strong> Oil bath lubrication system</div></li>
        </ul>
        <p class="mt-2">Designed for high-load crushing operations, maximizing crushing force and durability with reduced power consumption.</p>
      </div>
    </div>
  </div>
</div>

<!-- ================= Applications ================= -->
<div class="cusPanding principle-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-6">
        <h2>Applications</h2>
        <p><strong>Varahi Screw Feeders</strong> are used to ensure consistent feeding of material into <strong>Jaw Crushers</strong>, especially when handling:</p>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-mountain"></i></div><div class="content"><strong>Hard stones:</strong> Granite, basalt, dolomite, marble</div></li>
          <li><div class="icon"><i class="fa-solid fa-gem"></i></div><div class="content"><strong>Minerals &amp; ores:</strong> Bauxite, manganese, quartz</div></li>
          <li><div class="icon"><i class="fa-solid fa-industry"></i></div><div class="content"><strong>Industrial raw materials:</strong> Coal, ferro alloys, slags</div></li>
          <li><div class="icon"><i class="fa-solid fa-brick"></i></div><div class="content"><strong>Building materials:</strong> Limestone, bricks, cement clinker</div></li>
        </ul>
      </div>

      <div class="col-sm-12 col-lg-6">
        <h2>Key Features &amp; Benefits</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-circle-check"></i></div><div class="content"><strong>Consistent Material Feed</strong> – avoids choking and bridging during crushing</div></li>
          <li><div class="icon"><i class="fa-solid fa-gauge-high"></i></div><div class="content"><strong>High Output Capacity</strong> – models available up to <strong>38 TPH</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-helmet-safety"></i></div><div class="content"><strong>Robust Design</strong> – withstands harsh material and heavy-duty operation</div></li>
          <li><div class="icon"><i class="fa-solid fa-bolt"></i></div><div class="content"><strong>High-Quality Manganese Steel Jaw Plates</strong> – long life, reduced wear</div></li>
          <li><div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div><div class="content"><strong>Simple Maintenance</strong> – easily replaceable wear parts</div></li>
          <li><div class="icon"><i class="fa-solid fa-ruler"></i></div><div class="content"><strong>Adjustable Outlet Gap</strong> – control product size easily</div></li>
          <li><div class="icon"><i class="fa-solid fa-gear"></i></div><div class="content"><strong>Custom Motor &amp; Mounting Options</strong> – tailored to your plant layout</div></li>
          <li><div class="icon"><i class="fa-solid fa-leaf"></i></div><div class="content"><strong>Reduced Power Consumption</strong> – efficient mechanical design</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ================= Optional Features / Customization ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-12">
        <h2>Optional Features / Customization</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-funnel"></i></div><div class="content">Customized inlet hopper</div></li>
          <li><div class="icon"><i class="fa-solid fa-arrow-rotate-left"></i></div><div class="content">Reversible motor drive</div></li>
          <li><div class="icon"><i class="fa-solid fa-cloud"></i></div><div class="content">Dust sealing &amp; weather protection</div></li>
          <li><div class="icon"><i class="fa-solid fa-border-top-left"></i></div><div class="content">Special sizes as per plant design</div></li>
          <li><div class="icon"><i class="fa-solid fa-door-open"></i></div><div class="content">Inspection ports &amp; clean-out doors</div></li>
          <li><div class="icon"><i class="fa-solid fa-database"></i></div><div class="content">Hopper with level sensors or feeders</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
