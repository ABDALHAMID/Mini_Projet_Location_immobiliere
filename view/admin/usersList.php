<?php

    require_once("./../../controllers/userController.php");

    $users = usersList();



?>
<h3>administrateurs d'aplication</h3>
<table border="1">

    <thead>
        <th>Id:</th>
        <th>nom:</th>
        <th>Prenom:</th>
        <th>E-mail:</th>
    </thead>
    <Tbody>
        
        <?php
        foreach ($users as $user) {
            if($user['type'] === "administrator"){
                echo "<tr>";
                echo "<td>".$user['id']."</td>";
                echo "<td>".$user['nom']."</td>";
                echo "<td>".$user['prenom']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<tr>";
            }
        }
        ?>
    </Tbody>
</table>

<h3>clients d'aplication</h3>
<table border="1">

    <thead>
        <th>Id:</th>
        <th>nom:</th>
        <th>Prenom:</th>
        <th>E-mail:</th>
    </thead>
    <Tbody>
        
        <?php
        foreach ($users as $user) {
            if($user['type'] === "client"){
                echo "<tr>";
                echo "<td>".$user['id']."</td>";
                echo "<td>".$user['nom']."</td>";
                echo "<td>".$user['prenom']."</td>";
                echo "<td>".$user['email']."</td>";
                echo "<tr>";
            }
        }
        ?>
    </Tbody>
</table>



