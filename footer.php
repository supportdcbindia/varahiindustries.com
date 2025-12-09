    <footer>
        <div class="container">
            <div class="footerWrapper">
                <div class="footerLinks SocialLinks pl-15">
                    <h5>Address</h5>
                    <ul>
                        <li><a href="#!"> Plot No. 83/6, Nr. Kotak Mahindra Bank,<br> Phase-1, Vatva GIDC, Vatva, <br>Ahmedabad - 382445 Gujarat (India)</a></li>
                        <li><span>Office Line : </span><a href="tel:+919925291596">+91 99252 91596</a> <a href="tel:+919725111314">+91 97251 11314</a>  </li>
                        <li><span>Email : </span> <a href="mailto:info@varahiindustries.com">info@varahiindustries.com</a></li>
                    </ul>
                </div>
                <div class="footerLinks pl-15 SocialLinks">
                    <h5>Contact Persons</h5>
                    <ul>
                        <li><span>Kalpesh Sharma : </span> <a href="tell:+919925291596">+91 99252 91596</a></li>
                        <li><span>Alpesh Sharma : </span> <a href="tell:+919725111314">+91 97251 11314</a></li>
                        <li><span>Dashrath Sharma : </span> <a href="tell:+919427068414">+91 94270 68414</a></li>
                    </ul>
                </div>
                <div class="footerLinks pl-15 ProductsLinks">
                    <h5>Our Products</h5>
                    <ul>
                        <li><a href="air-classifier.php">Air Classifler </a></li>
                        <li><a href="blender.php">Blender</a></li>
                        <li><a href="pulveriser.php">Pulveriser</a></li>
                        <li><a href="jet-mill.php">Jet Mill</a></li>
                        <li><a href="crusher.php">Crusher</a></li>
                        <li><a href="hammer-mills.php">Hammer Mills</a>
                        <li><a href="vibro-sifter.php">Vibro Sifter</a>
                        <li><a href="centrifugal-siever.php">Centrifugal Siever</a>
                        <li><a href="screw-conveyor-feeder.php">Screw Conveyor/ Feeder</a>
                        <li><a href="pulse-jet-dust-collector.php">Pulse Jet Dust Collector</a>
                         <li><a href="rotary-air-lock-valve.php">Rotary Air Lock Valve</a>
                         
                         <li><a href="bag-dumping-station.php">Bag Dumping Station</a>
                         <li><a href="pesticide-powder-formulation-plant.php">Pesticide Powder Formulation Plant</a>
                    </ul>
                </div>
                <div class="footerLinks pl-15 ProductsLinks DesktopNone">
                    <h5>Useful Links</h5>
                    <ul>
                        <li><a href="/"> Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="our-product.php">Products</a></li>
                        <li><a href="applications.php"> Applications</a></li>
                        <li><a href="clients.php">Clients</a></li>
                        <li><a href="contact-us.php"> Contact Us</a></li>
                    </ul>
                </div>
                <div class="footerLinks ProductsLinks">
                    <h5>Our Location</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.411100071864!2d72.6326967!3d22.9719056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e88a4dbf95353%3A0xa7ce002cc9992c72!2sVarahi%20Industries!5e0!3m2!1sen!2sin!4v1759224970199!5m2!1sen!2sin" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="footerBottom">
                <img src="assets/images/logo.png" alt="">

                <div class="footerLinks pl-15 justify-content-end">
                    <ul class="justify-content-end">
                        <li><a href="/"> Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="our-product.php">Products</a></li>
                        <li><a href="applications.php"> Applications</a></li>
                        <li><a href="clients.php">Clients</a></li>
                        <li><a href="contact-us.php"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyRight">
            <p>© 2025 Varahi Industries | All Rights Reserved</p>
        </div>
    </footer>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="assets/js/jquery.validate.min.js?ver=1763106556"></script>
<script src="assets/js/index.js?ver=1763106556"></script>
<script src="assets/js/form-buzz.js?ver=1763106556"></script>

    <script>
        const bannerSwiper = new Swiper(".bannerSwiper", {
            loop: true,
            speed: 1200,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                slideChange: function() {
                    const currentSlide = this.realIndex + 1;
                    const totalSlides = this.slides.length;

                    const dynamicSlideEl = document.querySelector(".dayanamicSlide");
                    const totalSlideEl = document.querySelector(".TotalSlide");

                    if (dynamicSlideEl) {
                        dynamicSlideEl.textContent = String(currentSlide).padStart(2);
                    }
                    if (totalSlideEl) {
                        totalSlideEl.textContent = String(totalSlides).padStart(2);
                    }
                },
                afterInit: function() {
                    // Trigger update after Swiper initializes
                    this.emit("slideChange");
                },
            },
        });
    </script>

    <script>
        // Lightweight count-up when cards enter the viewport
        (function() {
            const els = document.querySelectorAll('.count');
            const seen = new WeakSet();
            const easeOut = t => 1 - Math.pow(1 - t, 3);

            const obs = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        if (seen.has(el)) return;
                        seen.add(el);

                        const target = +el.dataset.target || 0;
                        const duration = 1400 + Math.random() * 600; // 1.4s–2s
                        const start = performance.now();

                        const tick = now => {
                            const p = Math.min(1, (now - start) / duration);
                            const val = Math.floor(easeOut(p) * target);
                            el.textContent = val.toLocaleString();
                            if (p < 1) requestAnimationFrame(tick);
                        };
                        requestAnimationFrame(tick);
                        obs.unobserve(el);
                    }
                });
            }, {
                threshold: 0.25
            });

            els.forEach(el => obs.observe(el));
        })();
    </script>

    <script>
        // Optional: Customize Fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
            Thumbs: {
                autoStart: true, // Enable thumbnail slider automatically
            }
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            const header = document.querySelector(".customHeader");
            if (window.scrollY > 100) {
                // Adjust scroll value as needed
                header.classList.add("fixed");
            } else {
                header.classList.remove("fixed");
            }
        });
    </script>
    </body>

    </html>