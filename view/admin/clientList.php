<?php
$user=getClient();
?>
<div class="row">
<div class="col-12 grid-margin">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Les clients récents</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th> Nom </th>
              <th> Prenom</th>
              <th> Status </th>
              <th> Email </th>
              
            </tr>
          </thead>
          <tbody>
          <?php
                            foreach ($user as $a) {
                              
                              echo'
                              <tr>
                              <td>
                              <img src="assets/img/UsersImages/'.$a['image_path'].'" class="me-2" alt="image"> '.$a['nom'].'
                              </td>
                              <td> '.$a['prenom'].' </td>
                              <td>
                              <label class="badge badge-gradient-success">ADMIN</label>
                              </td>
                              <td> '.$a['email'].' </td>
                              
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