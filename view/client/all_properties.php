<?php
  $logements = allLogement();
?>
<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nos propriétés extraordinaires</h1>
              <span class="color-text-a">Nos propriétés</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Nos propriétés
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <!-- <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">New to Old</option>
                  <option value="2">For Rent</option>
                  <option value="3">For Sale</option>
                </select>
              </form>
            </div>
          </div> -->
          <?php
            foreach ($logements as $logement) {
              echo '
             
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/LogementImages/'.$logement["image_path"].'" alt="'.$logement['name'].', '.$logement['adresse'].', '.$logement['city'].'" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="'.$_SERVER['PHP_SELF'].'?page=logement&id='.$logement['id'].'">'.$logement['name'].'
                        <br />'.$logement['adresse'].', '.$logement['city'].'</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">rent | '.$logement["prix"].'</span>
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
               ';
            }
            ?>
        </div>
        <!-- <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->