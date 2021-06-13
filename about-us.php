<?php include('app/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>About Us | <?= APP_NAME ?></title>

        <meta name="description" content="About Byteprojects Technologies" />
        <meta name="keywords" content="Byteprojects, About Byteprojects, Blockchain development company, blockchain" />
        <?php include('includes/header.php'); ?>
    </head>
    <body class="saas3-template bg-gray-100" data-aos-easing="ease-out" data-aos-duration="400" data-aos-delay="0">
        <div class="container">
            <?php include('includes/navbar.php'); ?>
            <section class="muse-section">
                <div class="row align-items-center">
                <div class="col-lg-12">
                        <div class="">
                            <h1 class="display-4">The right software development partner can change everything</h1>
                            <span style=" font-size: 16px; font-style: oblique; " class="">We help tech companies to scale up by providing them with agile software development teams</span>
                            <div class="mt-5 row">
                                <div class="col-md-6">
                                    <div class="my-4 pb-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                        <img src="/images/about-us-collage.png" class="rounded-12 w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="aos-animate aos-init" data-aos="fade-up" data-aos-delay="100" style=" margin-top: 127px; ">
                                    From the very beginning, we have focused on creating the environment that would attract the greatest IT talents. And we succeeded. 
                                    During the years, The Software House has completed multiple custom software development projects. 75% of them evolved into long-term partnerships.
                                    These demanding projects resulted in perfecting our agile development process. Its quality is confirmed by 5-star client reviews.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="muse-section">
                <div class="row">
                    <div class="col-6 col-md-3 my-2">
                        <h5 class="mb-0">Performance</h5>
                        <p class="mb-0">Reach high-level project responsiveness and availability by using low-resource cloud components</p>
                    </div>
                    <div class="col-6 col-md-3 my-2">
                        <h5 class="mb-0">Adaptability</h5>
                        <p class="mb-0">Add new features easier — be it a different front end or a process rule — with a software architecture that creates a clear separation of concerns</p>
                    </div>
                    
                    <div class="col-6 col-md-3 my-2">
                        <h5 class="mb-0">Security</h5>
                        <p class="mb-0">Yes, experts agree it can be secure. Your new architecture will comply with best practices in user security and monitoring, information security, and application-level security</p>
                    </div>
                    <div class="col-6 col-md-3 my-2">
                        <h5 class="mb-0">Reliability</h5>
                        <p class="mb-0">Minimize application failures thanks to automated scalability that responds to fluctuating traffic</p>
                    </div>
                </div>
            </section>
            
            <section class="muse-section">
                <div class="bg-blue-400 rounded-12 py-5 px-4 text-center position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="h1 text-white mt-3">Find out how we can help you</h3>
                    <p class="big text-white lh-lg">Looking for a reliable software development partner?</p>
                    <a href="tel:<?= CONTACT_1 ?> " class="btn btn-lg btn-blue-50 mt-1 mb-4">Lets get in touch</a>
                    <div class="position-bottom">
                        <img src="images/shape5.png" alt="img" />
                    </div>
                </div>
            </section>
        </div>
    <?php include('includes/footer.php' ); ?>
    <?php include('includes/script.php' ); ?>
    </body>
</html>
