<?php
$logements = getPendingLogement();
if(isset($_GET['aprove'])){
    $result = aproverLogement();
    if($result){
        echo'<script>
        window.location.replace("index.php?page=logmentToProcess");
    </script>';
    }
}
?>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Liste administrateur</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> nom </th>
                                <th> type </th>
                                <th> prix </th>
                                <th> client </th>
                                <th> date de l'order </th>
                                <th> modifier </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($logements as $pendingInfo) {
                                $logement = $pendingInfo['logement'];
                                $user = $pendingInfo['user'];
                                $orderDate = $pendingInfo['order_date'];

                                echo '<tr>
                                <td>' . $logement['name'] . ' </td>
                                <td>' . $logement['type_logement'] . ' </td>
                                <td>' . $logement['prix'] . ' </td>
                                <td>' . $user['prenom'] . ' ' . $user['nom'] . ' </td>
                                <td>' . $orderDate['date_order'] . ' </td>
                                <td><a href="' . $_SERVER['PHP_SELF'] . '?page=logmentToProcess&aprove&id=' . $logement['id'] . '&orderid='.$orderDate['id'].'"> aprove</a> </td>
                              </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>