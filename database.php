<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Database";
    require_once "blocks/head.php"
    ?>
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div id="wrapper">
    <div id="leftCol">
        <?php include 'includes/db.php'?>
    </div>
    <?php require_once "blocks/rightCol.php"?>
</div>
<?php require_once "blocks/footer.php"?>
</body>
</html>