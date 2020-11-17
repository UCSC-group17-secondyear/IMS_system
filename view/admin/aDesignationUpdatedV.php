<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a Designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateDesignationV.php">Update Designation</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>The Designation is updated successfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="../../controller/aViewDesignationController.php">Designation List</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="aHomeV.php">Leave</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>