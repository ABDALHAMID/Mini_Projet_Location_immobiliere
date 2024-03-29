    <?php 
    $commentaire=getAllCommentairesController();

    ?>
    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Commentaires</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper comanter-my-style">
          <div class="swiper-wrapper">
            <?php
            foreach ($commentaire as $row) {
              $user = getUserById($row['id']);

            echo'


            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/UsersImages/'.$user['image_path'].'" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        '.$row['Commentaire'].'
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/UsersImages/'.$user['image_path'].'" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">'.$user['nom'].' '.$user['prenom'].'</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->';
          }
            ?>

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->
      <?php 
      include('addCommentaireButton.php');
      
      ?>