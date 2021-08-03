<!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-7bf65306-fa9c-402c-94fc-b892ddcfb302"></div> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119535321-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119535321-1');
</script>


<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="js/swiper-bundle.min.js" type="text/javascript"></script>
<script src="js/aos.js" type="text/javascript"></script>
<script type="text/javascript">
  //Muse AOS Animation Javascript
  AOS.init ({
    offset: 0,
    once: true,
    easing: 'ease-out'
  });

  //Muse Swiper Clients Slider JavaScript
  var swiper = new Swiper('.swiper-clients', {
    slidesPerView: 6,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 20,
      },
    }
  });

  //Muse Swiper Single Column Slider JavaScript
  var swiper = new Swiper('.swiper-single', {
    spaceBetween: 25,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>