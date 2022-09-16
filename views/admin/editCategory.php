<div class="addCategory">
    <div class="container">

        <h4 class="text text-primary"><ion-icon name="bookmark-outline"></ion-icon> Edit Category</h4>
        <form method="post" action="/admin_panel/editCategory?>">
            <input  type="hidden" name="id" value="<?= $data[0]['id'];?>">
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input  class="form-control" id="categoryName" aria-describedby="emailHelp" name="categoryName" value="<?= $data[0]['categoryName'] ?>">
                <?php if (app()->session->hasFlashInput('errors' , 'categoryName')): ?>
                    <p class="alert alert-danger">
                        category Name <?= app()->session->getFlash('errors')['categoryName'][0]; ?>
                    </p>
                <?php endif; ?>

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type (modern - classic)</label>
                <select name="type" class="form-group form-control">
                    <option value="classic" <?php if($data[0]['type'] == 'classic') {echo 'selected';}?> >Classic</option>
                    <option value="modern" <?php if($data[0]['type'] == 'modern') {echo 'selected';}?> >Modern</option>
                </select>
            </div>
            <?php if (app()->session->hasFlashInput('errors' , 'type')): ?>
                <p class="alert alert-danger">
                    type <?= app()->session->getFlash('errors')['type'][0]; ?>
                </p>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>