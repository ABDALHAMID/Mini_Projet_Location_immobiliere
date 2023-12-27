

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

<div class="swiper-wrapper">
    <?php
        $folder = "assets/img/intoSection/";
        $images = glob($folder.'*.{png,jpg,jpeg,gif}', GLOB_BRACE);

        foreach ($images as $image) {
          echo '<div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('.str_replace(' ', '%20', $image).')">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">

                      <h1 class="intro-title mb-4 ">
                         '.pathinfo($image)["filename"].'
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a>offres<span class="color-b price-a ">exceptionnels</span></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>';
                            
        }

    ?>
    


    </div>

<div class="swiper-pagination"></div>
</div><!-- End Intro Section -->