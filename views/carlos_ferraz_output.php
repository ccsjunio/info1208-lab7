<?php
// define a constant with the title 
define("TITLE", "OUTPUT");

// dump the parameters sent through the form in the
// caller page
var_dump($_POST);

// verify if at least one of the parameters in the $_POST are empty
// only if no one of them is empty the attributions to variable,
// calculations and image generations will be made

if( in_array( "", $_POST ) ) {
    header("Location: /412");    
}

// attribute the parameters to its specific variables
// apply sanitation the parameters

$clean_posts = [];

foreach($_POST as $key=>$value){
    $clean_posts[$key] = htmlentities($value);
}

print_r($clean_posts);

reset($clean_posts);

?>

<!doctype html>
<html lang="en-US">
<?php require(_ROOTFOLDER_.'/templates/head.php'); ?>

<body>
    <?php require_once(_ROOTFOLDER_.'/templates/mainNav.php'); ?>
    <div class="jumbotron jumbotron-fluid jumbotron-special">

        <div class="container">

            <div class="card text-white bg-primary mb-3" >
                <div class="card-header h2">String Functions</div>
                <div class="card-body">

                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">"sha1"</div>
                        <div class="card-body">
                            <span class="badge badge-pill badge-primary">Before</span>
                                <?php echo current($clean_posts);?>
                            <br/>
                            <span class="badge badge-pill badge-danger">After</span>
                                <?php echo sha1(current($clean_posts));?>
                        </div>
                    </div>
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">"metaphone"</div>
                        <div class="card-body">
                            <span class="badge badge-pill badge-primary">Before</span>
                                <?php echo next($clean_posts);?>
                            <br/>
                            <span class="badge badge-pill badge-danger">After</span>
                                <?php echo metaphone(current($clean_posts),10);?>
                        </div>
                    </div>
                    <div class="card text-white bg-info mb-3" >
                        <div class="card-header">"str_repeat"</div>
                        <div class="card-body">
                            <span class="badge badge-pill badge-primary">Before</span>
                                <?php echo next($clean_posts);?>
                            <br/>
                            <span class="badge badge-pill badge-danger">After</span>
                                <?php echo str_repeat(current($clean_posts),5);?>
                        </div>
                    </div>

                </div>
            </div><!-- end of string functions -->

            <div class="card text-white bg-info mb-3" >
                <div class="card-header h2">Array Functions</div>
                <div class="card-body">

                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">"array_reduce"</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-info"><span>Before</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-6">
                                            Key
                                        </div>
                                        <div class="col-6">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        foreach($clean_posts as $key=>$value){
                                            ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php echo $key;?>
                                                </div>
                                                <div class="col-6">
                                                    <?php echo $value;?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <!-- end of elements of the array -->   
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-danger"><span>After</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-12">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        function concatenate($acc,$item){
                                            if(strlen($acc)==0){
                                                return $acc . $item;
                                            } else {
                                                return $acc . ', ' . $item;
                                            }  
                                        }

                                        reset($clean_posts);
                                    ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <?php echo array_reduce($clean_posts, "concatenate"); ?>
                                            </div>
                                        </div>
                                    <!-- end of elements of the array -->   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3" >
                        <div class="card-header">"rsort"</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-info"><span>Before</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-6">
                                            Key
                                        </div>
                                        <div class="col-6">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        foreach($clean_posts as $key=>$value){
                                            ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php echo $key;?>
                                                </div>
                                                <div class="col-6">
                                                    <?php echo $value;?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <!-- end of elements of the array -->   
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-danger"><span>After</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-6">
                                            Key
                                        </div>
                                        <div class="col-6">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        $clean_posts_sorted = $clean_posts;
                                        rsort($clean_posts_sorted);
                                        foreach($clean_posts_sorted as $key=>$value){
                                            ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php echo $key;?>
                                                </div>
                                                <div class="col-6">
                                                    <?php echo $value;?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <!-- end of elements of the array -->   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary mb-3" >
                        <div class="card-header">"array_change_key_case"</div>
                        <div class="card-body">
                        <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-info"><span>Before</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-6">
                                            Key
                                        </div>
                                        <div class="col-6">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        foreach($clean_posts as $key=>$value){
                                            ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php echo $key;?>
                                                </div>
                                                <div class="col-6">
                                                    <?php echo $value;?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <!-- end of elements of the array -->   
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 badge badge-pill badge-danger"><span>After</span></div>
                                    </div>
                                    <!-- header -->
                                    <div class="row">
                                        <div class="col-6">
                                            Key
                                        </div>
                                        <div class="col-6">
                                            Value
                                        </div>
                                    </div>
                                    <!-- end of header -->
                                    <!-- elements of the array -->
                                    <?php
                                        $array_with_case_changed = array_change_key_case($clean_posts, CASE_UPPER);
                                        foreach($array_with_case_changed as $key=>$value){
                                            ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <?php echo $key;?>
                                                </div>
                                                <div class="col-6">
                                                    <?php echo $value;?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                    <!-- end of elements of the array -->   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </div>

    </div><!-- end of jumbotron -->



    <?php
    // loads the html code for the foot area, with calls to js code
    // from bootstrap and specific for the web page
    // used to facilitate maintenance of code that
    // appears as the same in multiple pages
    require_once('./templates/foot.php');
    ?>
</body>

</html>