<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aRemoveUpdateDegreeV.php">Update Remove degrees</a></li>
            <li class="active">Update Degree</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update the selected degree</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 0px;">
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <div class="row">
                            <div class="col-75">
                                <label>Degree Name</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> dissabled /><br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-75">
                              <label>Degree Abbriviation</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="degree_abbriviation"  <?php echo 'value="'.$_SESSION['degree_abbriviation'].'"' ?> min="0" /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="saveUpdateDegree-submit">Save updates</button>
                        <button class="cancelbtn">
                            <a href="aRemoveUpdateDegreeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>