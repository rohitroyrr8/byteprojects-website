<?php include('app/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Contact Us | <?= APP_NAME ?></title>

        <meta name="description" content="Byteprojects Technologies" />
        <meta name="keywords" content="Byteprojects Technologies" />
        <meta name="author" content="Byteprojects Technologies" />
        <?php include('includes/header.php'); ?>
    </head>
    <body class="bg-black-800 saas-template" data-aos-easing="ease-out" data-aos-duration="400" data-aos-delay="0">
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
                            <img src="https://fabrx.co/muze/assets/img/pages/map.jpg" class="w-100" alt="Map" />
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
                                <p class="lh-lg"><a href="mailto:<?= EMAIL_1 ?>" class="text-white"><?= EMAIL_1 ?></a></p>
                            </div>
                            <div class="mb-4 pt-md-3">
                                <h6 class="mb-3">Phone</h6>
                                <p class="mb-2"><a href="tel:<?= CONTACT_1 ?>" class="text-white"><?= CONTACT_1 ?></a></p>
                                <p><a href="tel:<?= CONTACT_2 ?>" class="text-white"><?= CONTACT_2 ?></a></p>
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
