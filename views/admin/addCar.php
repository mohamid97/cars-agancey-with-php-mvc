
<div class="container">
    <div class="addCar">
        <form action="/admin_panel/addCar" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="category_id" class="form-label">Name Of The Car</label>
                <select class="form-control" id="category_id" name="category_id">
                    <?php foreach ($data as $cat):?>
                      <option value="<?= $cat['id']?>"><?=$cat['categoryName']?></option>
                    <?php endforeach;?>
                </select>

            </div>
                <div class="mb-3">
                    <label for="carName" class="form-label">Name Of The Car</label>
                    <input type="text" name="carName" class="form-control" id="carName"
                           aria-describedby="emailHelp" value="<?= app()->session->oldValue('carName') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'carName')): ?>
                        <p class="alert alert-danger">
                            Name Of The Car <?= app()->session->getFlash('errors')['carName'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">Main Image</label>
                <input type="file" name="avatar" class="form-control" id="avatar" aria-describedby="emailHelp">
                <?php if (app()->session->hasFlashInput('errors' , 'avatar')): ?>
                    <p class="alert alert-danger">
                       Avatar <?= app()->session->getFlash('errors')['avatar'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>


            <div class="mb-3">
                <label for="gallary" class="form-label">Gallary</label>
                <input type="file" name="gallary[]" class="form-control" id="gallary" aria-describedby="emailHelp" multiple>
                <?php if (app()->session->hasFlashInput('errors' , 'gallary')): ?>
                    <p class="alert alert-danger">
                        Gallary Image <?= app()->session->getFlash('errors')['gallary'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                           value="<?= app()->session->oldValue('price') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'price')): ?>
                        <p class="alert alert-danger">
                            Price <?= app()->session->getFlash('errors')['price'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" name="year" class="form-control" id="year"
                           value="<?= app()->session->oldValue('year') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'year')): ?>
                        <p class="alert alert-danger">
                            Year <?= app()->session->getFlash('errors')['year'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" name="model" class="form-control" id="model"
                           value="<?= app()->session->oldValue('model') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'model')): ?>
                        <p class="alert alert-danger">
                            Model <?= app()->session->getFlash('errors')['model'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" id="location"
                               value="<?= app()->session->oldValue('location') ?>">
                        <?php if (app()->session->hasFlashInput('errors' , 'location')): ?>
                            <p class="alert alert-danger">
                                Location <?= app()->session->getFlash('errors')['location'][0]; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <div class="mb-3">
                    <label for="mileage" class="form-label">Mileage</label>
                    <input type="text" name="mileage" class="form-control" id="mileage"
                           value="<?= app()->session->oldValue('mileage') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'mileage')): ?>
                        <p class="alert alert-danger">
                            Location <?= app()->session->getFlash('errors')['mileage'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" class="form-control" id="color"
                           value="<?= app()->session->oldValue('color') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'color')): ?>
                        <p class="alert alert-danger">
                            Color <?= app()->session->getFlash('errors')['color'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="engine" class="form-label">Engine</label>
                    <input type="text" name="engine" class="form-control" id="engine"
                           value="<?= app()->session->oldValue('engine') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'engine')): ?>
                        <p class="alert alert-danger">
                            Engine <?= app()->session->getFlash('errors')['engine'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="status"
                           value="<?= app()->session->oldValue('status'); ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'status')): ?>
                        <p class="alert alert-danger">
                            Engine <?= app()->session->getFlash('errors')['status'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="transimion" class="form-label">Transmision</label>
                    <input type="text" name="transmision" class="form-control" id="transimion"
                           value="<?= app()->session->oldValue('transmision'); ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'transmision')): ?>
                        <p class="alert alert-danger">
                            Transmision <?= app()->session->getFlash('errors')['transmision'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="fuel" class="form-label">Fuel</label>
                    <input type="text" name="fuel" class="form-control" id="fuel"
                           value="<?= app()->session->oldValue('fuel'); ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'fuel')): ?>
                        <p class="alert alert-danger">
                            Fuel <?= app()->session->getFlash('errors')['fuel'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label for="enginesize" class="form-label">Engine Size</label>
                    <input type="text" name="engineSize" class="form-control" id="enginesize"
                           value="<?= app()->session->oldValue('engineSize') ?>">
                    <?php if (app()->session->hasFlashInput('errors' , 'engineSize')): ?>
                        <p class="alert alert-danger">
                            category Name <?= app()->session->getFlash('errors')['engineSize'][0]; ?>
                        </p>
                    <?php endif; ?>
                </div>

            <div class="mb-3">
                <label for="stockNumber" class="form-label">Stock Number</label>
                <input type="text" name="stockNumber" class="form-control" id="stockNumber"
                       value="<?= app()->session->oldValue('stockNumber') ?>">
                <?php if (app()->session->hasFlashInput('errors' , 'stockNumber')): ?>
                    <p class="alert alert-danger">
                        category Name <?= app()->session->getFlash('errors')['stockNumber'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="vin" class="form-label">Vin</label>
                <input type="text" name="vin" class="form-control" id="vin"
                       value="<?= app()->session->oldValue('vin') ?>">
                <?php if (app()->session->hasFlashInput('errors' , 'vin')): ?>
                    <p class="alert alert-danger">
                        category Name <?= app()->session->getFlash('errors')['vin'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="madeIn" class="form-label">Made In</label>
                <input type="text" name="madeIn" class="form-control" id="madeIn"
                       value="<?= app()->session->oldValue('madeIn') ?>">
                <?php if (app()->session->hasFlashInput('errors' , 'madeIn')): ?>
                    <p class="alert alert-danger">
                        category Name <?= app()->session->getFlash('errors')['madeIn'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="madeIn" class="form-label">Description</label>
                <textarea class="form-control" id="editor" name="description"><?= app()->session->oldValue('description') ?></textarea>
                <?php if (app()->session->hasFlashInput('errors' , 'description')): ?>
                    <p class="alert alert-danger">
                        Description <?= app()->session->getFlash('errors')['description'][0]; ?>
                    </p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
