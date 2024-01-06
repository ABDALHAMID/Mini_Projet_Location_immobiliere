<div class="click-closed"></div>

<?php

//include_once("formSearch.php"); //error ----> Warning: Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\dashboard\Mini_Projet_Location_immobiliere\view\formSearch.php:1) in C:\xampp\htdocs\dashboard\Mini_Projet_Location_immobiliere\view\login\login.php on line 7

?>
<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
      aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="main-logo-button navbar-brand" data-text="Awesome" href="<?php echo $_SERVER['PHP_SELF'] ?>">
      <span class="actual-text">&nbsp;RENT&nbsp;IT&nbsp;</span>
      <span aria-hidden="true" class="main-logo-button-hover-text">&nbsp;RENT&nbsp;IT&nbsp;</span>
    </a>


    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] ?>">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_SERVER['PHP_SELF'] . "?page=about" ?>">A propos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_SERVER['PHP_SELF'] . "?page=all_properties" ?>">Logement</a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Appartement Single</a>
              <a class="dropdown-item " href="blog-single.html">Studio</a>
              <a class="dropdown-item " href="agents-grid.html">Villa</a>
              <a class="dropdown-item " href="agent-single.html">Bureau</a>
            </div>
          </li> -->
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $_SERVER['PHP_SELF'] . "?page=contactUs" ?>">Contact</a>
        </li>
      </ul>

    </div>
    <?php
    include("view\userIcon.php");
    ?>
   
  </div>
</nav><!-- End Header/Navbar -->