<div class="row" id="ajout"> 
<hr>
    <h4 class="page-title">
        <span class="page-title-icon bg-gradient-success text-white me-2">
            <i class="mdi mdi-database-plus"></i>
        </span> ajouter des administrateurs et des logements
    </h4>
    <div class="add-data-buttons">
        <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?page=adduser' ?>"><i class="hide mdi mdi-plus-circle"></i> <i class="bi bi-person-fill-add"></i> ajouter un administrateur</a>
        <hr style="transform: rotate(90deg);width: 100px">
        <a href="<?php echo htmlspecialchars($_server['PHP_SELF']) . '?page=addlogement' ?>"><i class="hide mdi mdi-plus-circle"></i> <i class="bi bi-house-add-fill"></i> ajouter un Logement</a> 
    </div>
    <hr>
</div>