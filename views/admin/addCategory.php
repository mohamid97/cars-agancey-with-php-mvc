<div class="addCategory">
    <div class="container">
        <h4 class="text text-primary"><ion-icon name="bookmark-outline"></ion-icon> Add New Category</h4>

        <form method="post" action="/admin_panel/addCategory">
            <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input  class="form-control" id="categoryName" aria-describedby="emailHelp" name="categoryName" value="<?= app()->session->oldValue('categoryName') ?>">
                <?php if (app()->session->hasFlashInput('errors' , 'categoryName')): ?>
                    <p class="alert alert-danger">
                        category Name <?= app()->session->getFlash('errors')['categoryName'][0]; ?>
                    </p>
                <?php endif; ?>

            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type (modern - classic)</label>
                <select name="type" class="form-group form-control">
                    <option value="">None</option>
                    <option value="classic">Classic</option>
                    <option value="modern">Modern</option>
                </select>
            </div>
            <?php if (app()->session->hasFlashInput('errors' , 'type')): ?>
                <p class="alert alert-danger">
                    type <?= app()->session->getFlash('errors')['type'][0]; ?>
                </p>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>