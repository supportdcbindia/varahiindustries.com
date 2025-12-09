<?php
function isMobile() {
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
$companyname = "Varahi Industries";
$phone = "+91 99252 91596"; /* FORMATE: +91 00000 00000 */
$whatappphone = "919925291596";/* FORAMTE: 91000000000 */
$email = "info@varahiindustries.com";
$logo = ""; /* FORMATE: images/logo3.png */
$message = "Hello Team ".$companyname.", I was going through your website and wish to get connected for product discussion";
?>
<div class="sticklist">
    <input type="hidden" id="ismobile" value="<?=isMobile();?>">
    <button class="open-close-arrow">
        <span class="open-arrow"><i class="fa fa-chevron-right"></i></span>
        <span class="close-arrow"><i class="fa fa-chevron-left"></i></span>
    </button>
    <ul>
        <li class="none-li inquiery-icon  imgnone">
            <a href="javascript:;" class="click1">
                <span class="icon1"> <i class="fa fa-envelope"></i></span> <span class="btn-text"> Send Inquiry</span>
            </a>
        </li>
        <!-- <li class="download-pdf none-li inquiery-icon  imgnone">
            <a pdf="pdf/catalague.pdf" href="pdf/catalague.pdf" class="click2">
                <span class="icon"> <i class="fa fa-file-pdf"></i></span> <span class="btn-text">Catalogue</span>
            </a>
        </li> -->
        <li class="whataspp-icon none-li imgnone">
            <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+<?=$whatappphone;?>' });"
                href="https://api.whatsapp.com/send?phone=<?=$whatappphone;?>&amp;text=<?=$message;?>" target="_blank">
                <span class="icon1"> <i class="fab fa-whatsapp"></i></span> <span class="btn-text"> Whatsapp</span></a>
        </li>
    </ul>
</div>
<div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload">
    <div class="modal-dialog modal-lg">
        <input type="hidden" id="ispopupopen" value="1">
        <div class="modal-content">
            <div class="modal-body stick_popup">
                <h5 class="modal-title">Get Your Free Quote…!</h5>
                <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
                <div class="row mt-40">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-widgets tag-widget">
                            <input id="inquiery-model" value="<?=$_COOKIE['inquierymodel'];?>" type="hidden" />
                            <input id="isloadopenmodel" value="<?=$_COOKIE['isloadopenmodel'];?>" type="hidden" />
                            <input name="junk_trap" class="junk_trap" type="hidden" />
                            <form class="form-horizontal form1" action="inquiry-action.php" method="post"
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
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- End My Model -->
<!-- catelog model -->
<div class="modal fade bs-example-modal-sm cstm-modal-top-header my-custom-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true" id="onload1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body ">
                <h5 class="modal-title">Catalogue Request Form…!</h5>
                <div class="stick_close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></div>
                <div class="row mt-40">

                    <div class="col-md-12 col-sm-7 col-xs-12">
                        <div class=" footer-widgets tag-widget formtop">
                            <form class="form-horizontal form2" action="catalogue-action.php" method="post">

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="name" id="name2" type="text" placeholder="Name"
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
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="email" id="email2" type="text" placeholder="E-Mail Address"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group has-feedback">
                                            <input name="city" id="city" type="text" placeholder="City"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <input name="number" id="number2" type="tel" placeholder="Phone"
                                                maxlength="10" minlength="10" class="form-control number21">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group has-feedback">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <input name="captcha" id="captcha2" placeholder="Captcha Code"
                                                        class="form-control" type="text">
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <img src="captcha.php" class="capside img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="pt" name="path" value="">

                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="submit2" id="submit2"
                                            class="submit submitbutton btn btn-primary w-100" type="submit"
                                            value="Download Now">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end catelog model -->
<div class="footer-box" style="display: none;">
    <div class="book-app" style="background: #2db640;width:20%;display: flex
;
    align-items: center;
    justify-content: center;">
        <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+<?=$whatappphone;?>' });"
            href="https://api.whatsapp.com/send?phone=<?=$whatappphone;?>&amp;text=<?=$message;?>" target="_blank"
            style="color:#FFF;font-size:12px;font-weight:600;display: flex;align-items: center;justify-content: center;text-decoration: none;"><i class="fab fa-whatsapp fa-2x"
                style="margin-right: 5px;"></i></a>
    </div>
    <div class="book-app" style="background:#0098da;width:80%" id="req-apnmt2">
        <a class="nav_up click1" href="javascript:;" style="color:#FFF;font-size:12px;font-weight:600;display: flex;align-items: center;justify-content: center;text-decoration: none;"><i
                class="fa fa-envelope fa-2x" style="margin-right: 5px;"></i> Enquire Now</a>
    </div>
    <!-- <div class="book-app" style="background: #222;">
        <a pdf="pdf/catalague.pdf" class="nav_up click2" href="pdf/catalague.pdf"
            style="color:#FFF;font-size:12px;font-weight:600;display: flex;align-items: center;justify-content: center;text-decoration: none;"><i class="fa fa-file-pdf"
                style="margin-right: 5px;"></i> Catalogue</a>
    </div> -->
    
</div>
<!-- End My Model -->