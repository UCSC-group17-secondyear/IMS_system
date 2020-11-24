<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aViewDesignationV.php">Designations List</a></li>
            <li class="active">Update Designation</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Designation</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateDesignationController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Designation</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Description</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="description" <?php echo 'value="'.$_SESSION['description'].'"' ?> required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateDesignation-submit">Update Designation</button>
                        <button type="submit" name="cancel-submit" class="cancelbtn"><a href="aHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>