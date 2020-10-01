<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

	<h1><?= getTitleMenuItem($menuArray); ?></h1>

<?php
include($_SERVER['DOCUMENT_ROOT'] . '/templates/main_template.php');
include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php');
