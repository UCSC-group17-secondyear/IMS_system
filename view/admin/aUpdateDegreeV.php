<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aRemoveUpdateDegreeV.php">Update or remove degree</a></li>
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
                    <h2>Update Degree</h2>
                </div>
                
                <div class="contentForm">
                    <form action="../../controller/aUpdateDegreeController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree code</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_abbriviation" placeholder="degree code" required/><br>
                            </div>
                        </div>
                        <button id="subBtn" class="subbtn" name="updateDegree-submit">Save updates</button>

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