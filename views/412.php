<?php
    define("_TITLE","You should have provided all data!");
?>

<!doctype html>
<html lang="en-US">
    <?php require_once(_ROOTFOLDER_.'/templates/head.php');?>
    <body>
        <div class="container">
            <h1><?php echo _TITLE;?></h1>
            <img src="/img/missingData.jpeg"/>
            <a class="btn btn-primary btn-lg" href="/" role="button">Go Back</a>
        </div>
        <?php require_once(_ROOTFOLDER_.'/templates/foot.php'); ?>
    </body>
</html>