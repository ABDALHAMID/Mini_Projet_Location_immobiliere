
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#profile" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets\img\UsersImages\<?php echo $user['image_path'] ?>" alt="<?php echo $user['image_path'] ?>">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $user['nom'] ?></span>
                  <span class="text-secondary text-small"><?php echo $user['type'] ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Liste d'utilisateurs</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-circle"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=adminList'?>">administrateurs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=clientList'?>">clients</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=listLogement'?>">
                <span class="menu-title">logements</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=logmentToProcess'?>">
                <span class="menu-title">logmentToProcess</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=statistique'?>">
                <span class="menu-title">statistique</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">ajouter</h6>
                </div>
                <a href="#ajout">
                  <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ ajouter</button>
                </a>
              </span>
            </li>
          </ul>
        </nav>