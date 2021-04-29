<?php include('app/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>About Us | <?= APP_NAME ?></title>

        <meta name="description" content="Byteprojects Technologies" />
        <meta name="keywords" content="Byteprojects Technologies" />
        <meta name="author" content="Byteprojects Technologies" />
        <?php include('includes/header.php'); ?>
    </head>
    <body class="bg-black-800 saas-template" data-aos-easing="ease-out" data-aos-duration="400" data-aos-delay="0">
        <div class="container">
            <?php include('includes/navbar.php'); ?>
            <section class="muse-section">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="my-3">
                            <span class="badge badge-primary text-uppercase">About Us</span>
                            <h1 class="display-4 mt-3">Get to know us, we’re honest, dedicated and relentless</h1>
                            <div class="my-4 pb-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <img src="https://fabrx.co/muze/assets/img/pages/about-us.jpg" class="rounded-12 w-100" alt="img" />
                            </div>
                            <p class="big mb-4 mb-md-5 pb-lg-5 lh-lg text-white-600 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMake.
                            </p>
                            <p class="big mb-0 lh-lg text-white-600 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are
                                going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                                making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="my-0 bg-gray-300" />

            <section class="muse-section">
                <div class="row">
                    <div class="col-6 col-md-3 text-center my-2">
                        <h3 class="display-4 mb-0"><span class="counter purecounter" data-purecounter-delay="50" data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="0">120</span>+</h3>
                        <p class="mb-0">Countries</p>
                    </div>
                    <div class="col-6 col-md-3 text-center my-2">
                        <h3 class="display-4 mb-0"><span class="counter purecounter" data-purecounter-delay="50" data-purecounter-start="0" data-purecounter-end="3500" data-purecounter-duration="0">3500</span>+</h3>
                        <p class="mb-0">Clients</p>
                    </div>
                    <div class="col-6 col-md-3 text-center my-2">
                        <h3 class="display-4 mb-0"><span class="counter purecounter" data-purecounter-delay="50" data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="0">120</span></h3>
                        <p class="mb-0">Gadgets</p>
                    </div>
                    <div class="col-6 col-md-3 text-center my-2">
                        <h3 class="display-4 mb-0"><span class="counter purecounter" data-purecounter-delay="50" data-purecounter-start="0" data-purecounter-end="455" data-purecounter-duration="0">455</span></h3>
                        <p class="mb-0">Offices</p>
                    </div>
                </div>
            </section>
            <hr class="my-md-0 bg-gray-300" /> 
            
            <section class="muse-section">
                <div class="bg-blue-400 rounded-12 py-5 px-4 text-center position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="h1 text-white mt-3">Get started for free</h3>
                    <p class="big text-white lh-lg">Turn your 3d ideas into incredible animations</p>
                    <a href="#" class="btn btn-lg btn-blue-50 mt-1 mb-4">Sign up</a>
                    <div class="position-bottom">
                        <img src="https://fabrx.co/muze/assets/img/templates/shape5.png" alt="img" />
                    </div>
                </div>
            </section>
        </div>
    <?php include('includes/footer.php' ); ?>
    <?php include('includes/script.php' ); ?>
    </body>
</html>
