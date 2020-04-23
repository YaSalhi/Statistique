<!-- title of page -->
<?php $title = "home"; ?>

<!-- add link to files css -->
<?php ob_start(); ?>
<?php $css = ob_get_clean(); ?>

<!-- some other fonctionality of home -->
<?php ob_start(); ?>
<?php $content = ob_get_clean(); ?>

<!--    add files javascript -->
<?php ob_start();?>
    <script src="js/main.js"></script>
    <script src="js/Menu2.js"></script>
<?php $script = ob_get_clean(); ?>

<!-- commun part -->
<?php require 'template.php'; ?>
