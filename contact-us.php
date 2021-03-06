<?php include('app/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Contact Us | <?= APP_NAME ?></title>

        <meta name="description" content="Contact Byteprojects Technologies" />
        <meta name="keywords" content="Byteprojects, contact details Byteprojects, Blockchain development company, blockchain" />
        <?php include('includes/header.php'); ?>
    </head>
    <body class="saas3-template bg-gray-100" data-aos-easing="ease-out" data-aos-duration="400" data-aos-delay="0">
        <div class="container">
            <?php include('includes/navbar.php'); ?>
            <section class="muse-section">
                <div class="container text-center py-4 py-md-5 mt-4 mt-md-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="display-3 mb-0">Contact us</h1>
                    <p class="text-white-600 lh-lg big">Get in touch and a team of highly trained ninjas will get back to you</p>
                </div>
            </section>
            <section class="muse-section py-4 py-md-5 mt-md-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="rounded-12 overflow-hidden mb-4 mb-md-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.9793839995127!2d77.08068431507984!3d28.51026798246621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d040105ecafff%3A0xd43d15e9331036e6!2sByteprojects%20-%20Blockchain%20%26%20Web%20Development%20Company!5e0!3m2!1sen!2sin!4v1627714925045!5m2!1sen!2sin" style="border:0; height: 363px" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pt-xl-5 pt-lg-0 pt-md-5 pb-lg-5 px-lg-5">
                            <div class="mb-4">
                                <h6>Location</h6>
                                <p class="lh-lg"><?= ADDRESS ?></p>
                            </div>
                            <div class="mb-4 pt-md-3">
                                <h6>Email</h6>
                                <p class="lh-lg"><a href="mailto:<?= EMAIL_1 ?>" class=""><?= EMAIL_1 ?></a></p>
                            </div>
                            <div class="mb-4 pt-md-3">
                                <h6 class="mb-3">Phone</h6>
                                <p class="mb-2"><a href="tel:<?= CONTACT_1 ?>" class=""><?= CONTACT_1 ?></a></p>
                                <p><a href="tel:<?= CONTACT_2 ?>" class=""><?= CONTACT_2 ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include('includes/footer.php' ); ?>
        <?php include('includes/script.php' ); ?>
    </body>
</html>
