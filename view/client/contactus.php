<?php
/*
ini_set("SMTP", "smtp.example.com");
ini_set("smtp_port", "587");
ini_set("sendmail_from", "your_email@example.com");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Envoi du mail
    $to = "rentit.projet@gmail.com"; // Remplacez ceci par votre adresse e-mail
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Construction du message
    $email_message = "Nom: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Object: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Envoyer le message
    mail($to, $subject, $email_message, $headers);
    if ($success) {
      // Redirection après l'envoi du formulaire (à personnaliser)
      header("Location: merci.html");
      exit();
  } else {
      // Afficher un message d'erreur
      echo "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.";
  }

    
    
   
}
*/?>


<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contactez_Nous</h1>
              <span class="color-text-a">"Le plaisir semble émaner de diverses sources, mais chacun le recherche là où il lui plaît. Les responsabilités officielles peuvent être altérées, et ceux qui cherchent à échapper sont difficiles à condamner. Ainsi, même la fatigue peut apporter une joie laborieuse, que nous guidons. La délectation est écartée, et les plaisirs sont variés. Chaque chose semble être inventée ici, souvent motivée par la culpabilité.".</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.1519033094655!2d-9.527485074677488!3d30.403431801474483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b68d27d5f00b%3A0xca0e141e9c9847a1!2sEcole%20Polytechnique%20D&#39;agadir!5e0!3m2!1sar!2sma!4v1703630837309!5m2!1sar!2sma" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) .'?page=contactUs'?>" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Votre Nom" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Votre Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Object" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Message bien envoyer. Merci!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                   
                      <button type="submit" class="btn btn-a">Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Contact</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a">rentit.projet@gmail.com</span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a">+212 500000000</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Localisation</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        Agadir,Maroc 80000;
                        
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Réseaux sociaux</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->
 
