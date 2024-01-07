<?php
// update_theme.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['theme'])) {
    $theme = $_POST['theme'];

    // Mettez à jour le cookie de thème ici
    setcookie('theme', $theme, time() + (86400 * 30), "/"); // Cookie valide pendant 30 jours
    echo 'Le thème a été mis à jour avec succès.';
} else {
    echo 'Erreur : Le thème n\'a pas pu être mis à jour.';
}
?>
