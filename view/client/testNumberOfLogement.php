<?php
    $logements = lastLogment(10);
?>

<h3>clients d'aplication</h3>
<table border="1">

    <thead>
        <th>Id:</th>
        <th>adresse:</th>
        <th>type_logement:</th>
        <th>nombre_chambres:</th>
        <th>prix:</th>
    </thead>
    <Tbody>
        
        <?php
        foreach ($logements as $logement) {
            
                echo "<tr>";
                echo "<td>".$logement['id']."</td>";
                echo "<td>".$logement['adresse']."</td>";
                echo "<td>".$logement['type_logement']."</td>";
                echo "<td>".$logement['nombre_chambres']."</td>";
                echo "<td>".$logement['prix']."</td>";
                echo "<tr>";

        }
        ?>
    </Tbody>
</table>





