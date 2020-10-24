<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove Degree</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or Remove Degree</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update or Remove Degree</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateDegreeController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> required/><br>
                            </div>
                        </div>
                    </form>
                    <form action="../../controller/adminControllers/manageDegreeController.php" method="post">
                        <button class="subbtn" type="submit" name="updateDegree-submit">Update Degree</button>
                        <button type="submit" name="removeDegree-submit" class="cancelbtn">Remove Degree</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>