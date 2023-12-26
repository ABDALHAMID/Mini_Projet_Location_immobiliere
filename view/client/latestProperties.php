<?php
    $logements = lastLogment(10);
?>
<!-- ======= Latest Properties Section ======= -->
<section class="section-property section-t8" id="logement">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Dernières propriétés</h2>
              </div>
              <div class="title-link">
                <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=all_properties'; ?>">Tous les propriétés
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <?php
            foreach ($logements as $logement) {
                # code...
                echo'<div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/'.$logement['image_path'].'" alt="" class="img-a img-fluid">
                  </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                  <div class="card-header-a">
                  <h2 class="card-title-a">
                  <a href="property-single.html">'.$logement['adresse'].
                          '</a>
                          </h2>
                          </div>
                          <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">rent | $'.$logement['prix'].'</span>
                        </div>
                      <a href="#" class="link-a">Click ici
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                      </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div><!-- End carousel item -->';
            }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->
