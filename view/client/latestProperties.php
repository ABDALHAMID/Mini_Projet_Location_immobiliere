<?php
    $logements = lastLogement(5);
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
                echo'
                <div class="carousel-item-b swiper-slide ">
                  <div class="card-box-a card-shadow">
                    <div class="img-box-a logement-item-img">
                      <img src="assets/img/LogementImages/'.$logement['image_path'].'" alt="'.$logement['name'].', '.$logement['adresse'].', '.$logement['city'].'" class="img-a img-fluid">
                    </div>
                      <div class="card-overlay">
                        <div class="card-overlay-a-content">
                          <div class="card-header-a">
                            <h2 class="card-title-a">
                            <a href="'.$_SERVER['PHP_SELF'].'?page=logement&id='.$logement['id'].'">'.$logement['name'].'
                            <br />, '.$logement['city'].'</a>
                            </h2>
                          </div>
                          <div class="card-body-a">
                            <div class="price-box d-flex">
                              <span class="price-a">rent | $'.$logement['prix'].'</span>
                            </div>
                            <a href="'.$_SERVER['PHP_SELF'].'?page=logement&id='.$logement['id'].'" class="learn-more" >
                                <span class="learn-more-circle" aria-hidden="true">
                                  <span class="learn-more-icon arrow"></span>
                                </span>
                                <span class="learn-more-button-text">Learn More</span>
                              
                            </a>
                          </div>
                          <div class="card-footer-a">
                            <ul class="card-info d-flex justify-content-around">
                              <li>
                                <h4 class="card-info-title">Zone</h4>
                                <span>'.$logement['area'].'
                                  <sup>2</sup>
                                </span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Lits</h4>
                                <span>'.$logement['beds'].'</span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Bains</h4>
                                <span>'.$logement['baths'].'</span>
                              </li>
                              <li>
                                <h4 class="card-info-title">Garages</h4>
                                <span>'.$logement['garage'].'</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                    <!-- End carousel item -->';
            }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->
