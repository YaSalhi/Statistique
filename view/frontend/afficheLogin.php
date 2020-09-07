<!-- title of page -->
<?php $title = "Login"; ?>

<!-- add link to files css -->
<?php ob_start(); ?>

<link rel="stylesheet" href="Public/css/LoginOnly.css">

<?php $css = ob_get_clean(); ?>


<!-- some other fonctionality of login -->
<?php ob_start(); ?>

<div class="container form">
    <form  action="index.php" method="post">
        <div class="row">
            <input type="email" placeholder="Email" name="email" required>
            <small class="help-block hidden">Ces identifiants ne correspondent pas à nos enregistrements</small>
        </div>
        <div class="row">
            <input type="password" placeholder="Password" name="password"  required>
        </div>
        <input type="submit"  name="submit" value="Login">
    </form>
</div>

<?php $content = ob_get_clean(); ?>


<!--    add files javascript -->
<?php ob_start();?>
    <script src="public/js/main.js"></script>
    <script src="public/js/Menu2.js"></script>
<?php $script = ob_get_clean(); ?>


<!-- commun part -->
<?php require 'template.php'; ?>
