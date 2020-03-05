<?php
// defines the title of the page
define("TITLE", "INDEX");
?>

<!doctype html>
<html lang="en-US">
<!-- loads the script with the code for the head -->
<!-- separated to be reused through the pages -->
<?php require(_ROOTFOLDER_.'/templates/head.php'); ?>

<body>
    <!-- Just an image -->
    <div class="container">
        <?php require_once(_ROOTFOLDER_.'/templates/mainNav.php'); ?>
        
        <form method="POST" action="/carlos_ferraz_output">

            <div class="form-group">
                <label for="meaningOfLife">Tell me, what is the answer to the meaning of life?</label>
                <input type="text" class="form-control" name="meaningOfLife" id="inputMeaningOfLife" placeholder="the meaning of life">
            </div>

            <div class="form-group">
                <label for="fatherOfLuke">Who is the father of Luke Skywalker?</label>
                <input type="text" class="form-control" name="fatherOfLuke" id="inputFatherSkywalker" placeholder="Father of Luke">
            </div>

            <div class="form-group">
                <label for="fatherOfLuke">In which episode Data is declared a sentient being?</label>
                <input type="text" class="form-control" name="whichEpisode" id="inputWhichEpisode" placeholder="Data is sentient">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div><!-- end of container -->

    <!-- loads the foot of the page, with calls to javascript code -->
    <?php require_once(_ROOTFOLDER_.'/templates/foot.php'); ?>
</body>

</html>