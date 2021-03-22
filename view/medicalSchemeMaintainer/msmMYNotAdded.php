<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a Medical Year</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmAddMYV.php">Add Medical Year</a></li>
            <li class="active">Action was not success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            The Medical Year is not added.
                        </h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="msmAddMYV.php">Try again</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="msmHomeV.php">Exit</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>