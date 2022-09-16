<div class="container">
    <div class="cats">
        <?php if (app()->session->hasFlash('success')): ?>
            <p class="alert alert-success">
                <?= app()->session->getFlash('success')['users'][0]; ?>
            </p>
        <?php endif; ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Telephone</th>
                <th scope="col">Address</th>
                <th scope="col">data</th>
                <th scope="col">control</th>
            </tr>
            </thead>
            <tbody>

              <?php if(!empty($data)):?>
                  <?php foreach ($data as $user): ?>
                      <tr>
                          <th scope="row"><?= $user['id']?></th>
                          <td><?= $user['firstName']?></td>
                          <td><?= $user['lastName']?></td>
                          <td><?= $user['telephone']?></td>
                          <td><?= $user['address']?></td>
                          <td><?= $user['data']?></td>
                          <td>

                              <a href="/admin_panel/deleteUser?id=<?= $user['id']?>">Delete</a>

                          </td>
                      </tr>
                  <?php endforeach;?>
              <?php endif;?>

            </tbody>
        </table>

    </div>
</div>