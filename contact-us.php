<?php include('header.php') ?>
<style>
    .productFromSec  form {
    display: grid;
    /* grid-template-columns: 1fr 1fr; */
    gap: 15px;
}

.productFrom {
    padding: 32px;
    background: #f4f4f4;
    display: flex;
    flex-direction: column;
    gap: 25px;
    border-radius: 20px;
    max-width: 90%;
    margin: auto;
}

.productFrom h5 {
    font-size: 20px;
    font-weight: 700;
    text-align: left;
    color: #000;
    text-transform: capitalize;
    margin: 0px;
    position: relative;
}

.productFromSec form input.form-control, .productFromSec form textarea.form-control, .productFromSec form select.form-control {
    padding: 15px 20px !important;
    border-radius: 12px !important;
    border: 1px solid #0000001c;
}

.productFromSec form input.form-control::placeholder, .productFromSec form textarea.form-control::placeholderr, .productFromSec form select.form-control::placeholder {
    font-size: 14px !important;
    font-family: Barlow, sans-serif;
    font-weight: 600;
}
/* .productFromSec form .textareaInput {
    grid-column: 1/3;
} */

.productFromSec form textarea {
    min-height: 150px !important;
}

.productFromSec form .threeGrid {
    grid-template-columns: 1fr 1fr 1fr;
    display: grid;
    gap: 15px;
}

.productFromSec form .twoGrid {
    grid-template-columns: 1fr 1fr;
    display: grid;
    gap: 15px;
}

.captchaGrid {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 15px;
}

.productFromSec form .submitbutton {
    margin: 15px 0px 0px 0px;
    width: fit-content !important;
    padding: 14px 30px !important;
    border: 0px;
    background: #1d64af;
    border-radius: 10px;
    color: #fff;
    font-size: 14px;
    letter-spacing: 0px !important;
}
</style>
<div class="breadCrumsWrapper" style="background-image: url('./assets/images/breadcum/contact-us.webp')">
    <div class="container">
        <div class="breadCrumsTitleWrappr">
            <h2>Contact Us</h2>
        </div>
    </div>
</div>

<div class="contactAddress cusPanding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="footerLinks SocialLinks contactLinks">
                    <h5>Address</h5>
                    <ul>
                        <li class="OneGrid"><b>Corporate Office:</b> Plot No. 83/6, Nr. Kotak Mahindra Bank,<br> Phase-1, Vatva GIDC, Vatva, <br>Ahmedabad - 382445 Gujarat (India)</li>
                        <li class="OneGrid"><b>Unit-2:</b> Plot No 44-45/a/4, Nr. Vatva, Railway Over Bridge,<br> Phase I, Vatva GIDC, Vatva, <br>Ahmedabad, Gujarat 382445</li>
                        <li><span>Office Line : </span> <a href="tel:+919925291596">+91 99252 91596</a>  </li>
                        <li><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> <a href="tel:+919725111314">+91 97251 11314</a></li>
                        <li><span>Email : </span> <a href="mailto:info@varahiindustries.com">info@varahiindustries.com</a></li>
                        <li><span>Email : </span> <a href="mailto:info@varahiindustries.com">info@varahiindustries.com</a></li>
                        <li><span>Dashrath Sharma : </span> <a href="tel:+919427068414">+91 94270 68414</a></li>
                        <li><span>Kalpesh Sharma : </span> <a href="tel:+919925291596">+91 99252 91596</a></li>
                        <li><span>Alpesh Sharma : </span> <a href="tel:+919725111314">+91 97251 11314</a></li>

                    </ul>
                </div>
                <div class="footerLinks pl-15 SocialLinks mt-5">
                    <ul>



                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="productFromSec">
                <div class="contactForm productFrom">
                    <form class="form-horizontal form3" action="inquiry-action.php" method="post"
                                novalidate="novalidate">

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="name" id="name" type="text" placeholder="Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="cname" id="cname" type="text" placeholder="Company Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                                class="form-control">
                                        </div>
                                    </div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="city" id="city" type="text" placeholder="City"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="number" id="number" type="tel" placeholder="Phone"
                                                maxlength="15" minlength="10" class="form-control number21">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <textarea class="form-control" name="message" id="message"
                                                placeholder="Requirement" rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="captcha" id="captcha" placeholder="Captcha Code"
                                                class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <img src="captcha.php" class="capside img-responsive">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input name="submit" class="submit submitbutton btn btn-primary w-100"
                                            type="submit" value="Submit Now!">
                                    </div>
                                </div>

                            </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="map bgGrey cusPanding">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4357.392435413625!2d72.63012177588034!3d22.971910518215793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e88a4dbf95353%3A0xa7ce002cc9992c72!2sVarahi%20Industries!5e1!3m2!1sen!2sin!4v1758979374906!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php include('footer.php') ?>