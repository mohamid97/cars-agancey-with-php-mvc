<div class="container">
    <div class="cats">
        <?php if (app()->session->hasFlash('success')): ?>
            <p class="alert alert-success">
                <?= app()->session->getFlash('success')['category'][0]; ?>
            </p>
        <?php endif; ?>
        <a href="/admin/addCategory">
            <button class="addCats btn btn-outline-primary">Add New Category</button>
        </a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">categoryName</th>
                <th scope="col">Type</th>
                <th scope="col">Date</th>
                <th scope="col">Control</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($data)):?>
                <?php foreach ($data as $cat): ?>
                    <tr>
                        <th scope="row"><?= $cat['id']?></th>
                        <td><?= $cat['categoryName']?></td>
                        <td><?= $cat['type']?></td>
                        <td><?= $cat['date']?></td>
                        <td>
                            <a href="/admin_panel/editCategory?id=<?= $cat['id']?>">Edit</a> |
                            <a href="/admin_panel/deleteCategory?id=<?= $cat['id']?>">Delete</a>

                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endif;?>

            </tbody>
        </table>

    </div>
</div>