<?php
    $logements = allLogement();
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
                            <th> nombre de chambre </th>
                            <th> prix </th>
                            <th> status </th>
                            <th> modifier </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($logements as $logement) {
                                echo '<tr>
                                <td>'.$logement['name'].' </td>
                                <td>'.$logement['type_logement'].' </td>
                                <td>'.$logement['nombre_chambres'].' </td>
                                <td>'.$logement['prix'].' </td>
                                <td>'.$logement['status'].' </td>
                                <td><a href="'.$_SERVER['PHP_SELF'].'?page=modifier&id='.$logement['id'].'"> modifier</a> </td>
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