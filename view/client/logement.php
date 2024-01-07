<?php
$logement = getLogement($_GET['id']);
$aminoties = getLAmenities();
$LImages = getLImages();

?>

<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">
              <?php echo $logement['name'] ?>
            </h1>
            <span class="color-text-a">
              <?php echo $logement['adresse'] . ', ' . $logement['city'] ?>
            </span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo $_SERVER['PHP_SELF'] ?>">Accueil</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?php echo $_SERVER['PHP_SELF'] . "?page=all_properties" ?>">Propriétés</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?php echo $logement['name'] ?>
              </li>
            </ol>

          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- ======= Property Single ======= -->
  <section class="property-single nav-arrow-b">
    <div class="container">


      <div class="row">
        <div class="col-sm-12">

          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="bi bi-cash">MAD</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">
                      <?php echo $logement['prix'] ?>
                    </h5>
                  </div>
                </div>
              </div>


              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Résumé rapide</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>ID de propriété:</strong>
                      <span>
                        <?php echo $logement['id'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Type de propriété:</strong>
                      <span>
                        <?php echo $logement['type_logement'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Emplacement:</strong>
                      <span>
                        <?php echo $logement['adresse'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>ville:</strong>
                      <span>
                        <?php echo $logement['city'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Statut:</strong>
                      <span>
                        <?php echo $logement['status'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Zone:</strong>
                      <span>
                        <?php echo $logement['area'] ?>m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Lits:</strong>
                      <span>
                        <?php echo $logement['beds'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Bains:</strong>
                      <span>
                        <?php echo $logement['baths'] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garages:</strong>
                      <span>
                        <?php echo $logement['garage'] ?>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Description de la propriété</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?php echo $logement['description'] ?>
                </p>
              </div>
              <?php include('rentButton.php'); ?>

              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Agréments</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <?php
                  foreach ($aminoties as $amin) {
                    echo '<li>' . $amin['amenity'] . '</li>';
                  }
                  ?>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="images-tab" data-bs-toggle="pill" href="#images" role="tab"
                aria-controls="images" aria-selected="true">images</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab"
                aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="images" role="tabpanel" aria-labelledby="images-tab">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div id="property-single-carousel" class="swiper">
                    <div class="swiper-wrapper">
                      <?php
                      foreach ($LImages as $img) {
                        echo '<div class="swiper-slide my-carousel-style">';
                        echo '<div class="backImag" style="background-image: url(assets/img/LogementImages/' . $img['image_path'] . ');"></div>';
                        echo '<div class="backImag-blur"></div>';
                        echo '<img src="assets/img/LogementImages/' . $img['image_path'] . '" alt="" class="img-fluid">';
                        echo '</div>';
                      }
                      ?>
                    </div>
                  </div>
                  <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade my-carousel-style" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img src="assets/img/LogementImages/<?php echo $logement['image_path'] ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Property Single-->

</main><!-- End #main -->