<?php include('header.php') ?>

<!-- ================= Breadcrumb ================= -->
<div class="productbreadcrumb" style="background-image: url('./assets/images/breadcum/product.webp')">
  <div class="container">
    <div class="breadCrumsTitleWrappr">
      <h2>Chemical Blender – Ribbon Type</h2>
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
              $data = glob("./assets/images/products/chemical-blender-ribbon/*.*");
              $number_of_pages = intval(count($data) / $nb_elem_per_page) + 1;

              $images = array_slice($data, $page * $nb_elem_per_page, $nb_elem_per_page);
              $first = true;
              foreach ($images as $p) { ?>
                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                  <div class="productImage">
                    <a class="fancybox thumbnail" rel="lightbox" href="<?php echo $p; ?>" title="Chemical Ribbon Blender">
                      <img src="<?php echo $p; ?>" alt="Chemical Ribbon Blender">
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
            <h2>Chemical Blender – Ribbon Type</h2>
            <h5 class="mt-2" style="color:#6b7280;">Precision Mixing for Powders, Granules &amp; Additives</h5>
          </div>
          <div class="desc">
            <p><strong>Varahi Industries</strong> offers high-performance <strong>Ribbon Blenders</strong> engineered for uniform blending of dry powders, granules, and low-viscosity liquids. These machines are widely used across <strong>chemical, pharmaceutical, food,</strong> and <strong>cosmetic</strong> industries due to their consistent output, rugged design, and customizable features.</p>
            <p>Built with precision and quality, our blenders ensure <strong>homogeneous mixing</strong> even for small additive ratios—ideal for formulations where batch uniformity is critical.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ================= Product Features ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-12">
        <h2>Product Features</h2>
        <ul class="list">
          <li>
            <div class="icon"><i class="fa-solid fa-arrows-spin"></i></div>
            <div class="content">
              <strong>Mixing Technology</strong>
              <p class="mt-1 mb-0">The blender consists of a <strong>U-shaped horizontal trough</strong> and a <strong>double helical ribbon agitator</strong> (inner and outer ribbons). This design creates <strong>radial and axial mixing</strong>, ensuring complete blending in a short time.</p>
            </div>
          </li>

          <li>
            <div class="content">
              <div class="icon d-inline-block"><i class="fa-solid fa-industry"></i></div>
              <strong>Build Quality</strong>
              <ul class="sub-list">
                <li><strong>Material Construction:</strong> Available in Mild Steel (MS) or Stainless Steel (SS 304/316) for hygienic and corrosive environments.</li>
                <li><strong>Drive System:</strong> Direct geared motor or belt-driven system with reduction gearbox.</li>
                <li><strong>Lid Options:</strong> Dust-proof cover, openable top for cleaning or batch addition.</li>
                <li><strong>Discharge:</strong> Manual or pneumatically operated valve (slide gate / butterfly / ball valve).</li>
              </ul>
            </div>
          </li>

          <li>
            <div class="icon"><i class="fa-solid fa-layer-group"></i></div>
            <div class="content">
              <strong>Available Capacities</strong>
              <p class="mt-1 mb-0">From <strong>100 liters</strong> to <strong>20,000 liters</strong>, with models tailored to small batches or large-scale industrial production.</p>
            </div>
          </li>
        </ul>
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
            <tr>
              <th colspan="6">Technical Specifications</th>
            </tr>
            <tr>
              <th>Model</th>
              <th>Capacity (Liters)</th>
              <th>Motor Power (HP)</th>
              <th>Material of Construction</th>
              <th>Ribbon Speed (RPM)</th>
              <th>Discharge Valve</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>VRB-500</td>
              <td>500</td>
              <td>5 – 7.5 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>40 – 60</td>
              <td>Manual / Pneumatic</td>
            </tr>
            <tr>
              <td>VRB-1000</td>
              <td>1000</td>
              <td>7.5 – 10 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>40 – 60</td>
              <td>Slide Gate / Butterfly</td>
            </tr>
            <tr>
              <td>VRB-2000</td>
              <td>2000</td>
              <td>10 – 15 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>40 – 60</td>
              <td>Optional PLC-controlled</td>
            </tr>
            <tr>
              <td>VRB-5000</td>
              <td>5000</td>
              <td>15 – 25 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>35 – 55</td>
              <td>Automatic Discharge Option</td>
            </tr>
            <tr>
              <td>VRB-10000</td>
              <td>10000</td>
              <td>30 – 50 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>30 – 50</td>
              <td>Custom as per requirement</td>
            </tr>
            <tr>
              <td>VRB-20000</td>
              <td>20000</td>
              <td>60 – 75 HP</td>
              <td>MS / SS304 / SS316</td>
              <td>25 – 40</td>
              <td>Custom</td>
            </tr>
          </tbody>
        </table>
        <p class="mt-2"><em>Note: Custom models available upon request. RPM and power vary based on material density and batch time requirements.</em></p>
      </div>
    </div>
  </div>
</div>

<!-- ================= Applications & Key Benefits ================= -->
<div class="cusPanding principle-section">
  <div class="container">
    <div class="row g-4">
      <!-- Applications -->
      <div class="col-sm-12 col-lg-6">
        <h2>Applications</h2>
        <p><strong>Varahi Chemical Blenders</strong> are trusted for precision mixing in:</p>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-flask"></i></div><div class="content"><strong>Chemical Industry:</strong> Detergents, fertilizers, pigments, polymers, resins</div></li>
          <li><div class="icon"><i class="fa-solid fa-capsules"></i></div><div class="content"><strong>Pharmaceuticals:</strong> Powder blends, bulk drugs, excipients, intermediates</div></li>
          <li><div class="icon"><i class="fa-solid fa-utensils"></i></div><div class="content"><strong>Food Processing:</strong> Spices, flour blends, dry premixes, coffee, tea</div></li>
          <li><div class="icon"><i class="fa-solid fa-soap"></i></div><div class="content"><strong>Cosmetics &amp; Personal Care:</strong> Powders, talcum, dry shampoos, clay mixes</div></li>
          <li><div class="icon"><i class="fa-solid fa-person-digging"></i></div><div class="content"><strong>Construction &amp; Minerals:</strong> Putty, cement additives, fly ash, tile adhesives</div></li>
          <li><div class="icon"><i class="fa-solid fa-drumstick-bite"></i></div><div class="content"><strong>Animal Feed:</strong> Premix additives, vitamins, supplements</div></li>
        </ul>
      </div>

      <!-- Key Benefits -->
      <div class="col-sm-12 col-lg-6">
        <h2>Key Benefits</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-equals"></i></div><div class="content"><strong>Homogeneous Mixing:</strong> Dual ribbon agitators ensure efficient batch uniformity</div></li>
          <li><div class="icon"><i class="fa-solid fa-sliders"></i></div><div class="content"><strong>Custom Design Options:</strong> Choose from open/closed top, jacketed, vacuum-ready</div></li>
          <li><div class="icon"><i class="fa-solid fa-gauge"></i></div><div class="content"><strong>Energy Efficient Drive:</strong> Low power consumption per kg of product</div></li>
          <li><div class="icon"><i class="fa-solid fa-shield-halved"></i></div><div class="content"><strong>Durable Construction:</strong> Built to withstand abrasive materials and long cycles</div></li>
          <li><div class="icon"><i class="fa-solid fa-stopwatch"></i></div><div class="content"><strong>Quick Discharge &amp; Cleaning:</strong> Minimize downtime with accessible design</div></li>
          <li><div class="icon"><i class="fa-solid fa-wind"></i></div><div class="content"><strong>Dust-Free Operation:</strong> Closed lid with optional dust extraction port</div></li>
          <li><div class="icon"><i class="fa-solid fa-user-shield"></i></div><div class="content"><strong>Safety Compliant:</strong> All models include safety guards and interlocks as required</div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ================= Optional Features / Compliance ================= -->
<div class="cusPanding principle-section bgGrey">
  <div class="container">
    <div class="row g-4">
      <div class="col-sm-12 col-lg-6">
        <h2>Optional Features / Customization</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-temperature-arrow-up"></i></div><div class="content"><strong>Jacketed Construction</strong> – For heating/cooling with steam or chilled water</div></li>
          <li><div class="icon"><i class="fa-solid fa-wave-square"></i></div><div class="content"><strong>Variable Speed Drive (VFD)</strong> – Control mixing intensity for sensitive materials</div></li>
          <li><div class="icon"><i class="fa-solid fa-spray-can-sparkles"></i></div><div class="content"><strong>Liquid Spray System</strong> – Add oils or binders during dry mixing</div></li>
          <li><div class="icon"><i class="fa-solid fa-repeat"></i></div><div class="content"><strong>Batch or Continuous Models</strong> – Tailored to your plant flow</div></li>
          <li><div class="icon"><i class="fa-regular fa-gem"></i></div><div class="content"><strong>Material Contact Finish</strong> – Mirror-polish, bead blast, or standard</div></li>
          <li><div class="icon"><i class="fa-solid fa-broom"></i></div><div class="content"><strong>Easy Clean Design</strong> – GMP-compliant versions for food/pharma</div></li>
        </ul>
      </div>

      <div class="col-sm-12 col-lg-6">
        <h2>Compliance &amp; Certifications</h2>
        <ul class="list">
          <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content"><strong>GMP / cGMP Designs Available</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content"><strong>Food Grade Material on Request (SS316L)</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content"><strong>CE / ISO 9001 Compliant Manufacturing</strong></div></li>
          <li><div class="icon"><i class="fa-solid fa-check"></i></div><div class="content"><strong>ATEX / Flameproof Motor Options for Hazardous Areas</strong></div></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>
