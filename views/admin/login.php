<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Home</title>
    <!-- ======= Styles ====== -->
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php getUrl('bootstrap' , 'admin'); ?>">
    <link rel="stylesheet" href="<?php getUrl('style' , 'admin'); ?>">
    <link rel="stylesheet" href="<?php getUrl('main' , 'admin'); ?>">



</head>

<body>


<div class="login container">
    <?php if (app()->session->hasFlash('notexists')): ?>
        <p class="has-text-danger">
            <?= app()->session->getFlash('notexists')['login'][0]; ?>
        </p>
    <?php endif; ?>
    <form method="post" action="/admin_panel/login">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= app()->session->oldValue('email') ?>">
            <?php if (app()->session->hasFlashInput('errors' , 'email')): ?>
                <p class="alert alert-danger">
                   Email <?= app()->session->getFlash('errors')['email'][0]; ?>
                </p>
            <?php endif; ?>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <?php if (app()->session->hasFlashInput('errors' , 'password')): ?>
            <p class="alert alert-danger">
                password <?= app()->session->getFlash('errors')['password'][0]; ?>
            </p>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>