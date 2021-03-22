<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Update or Remove Degree</li>
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
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Select degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name"required>
                                    <?php echo $_SESSION['degreeList'] ?>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" name="updateDegree-submit" type="submit">Update Degree</button>
                        <button class="cancelbtn" name="removeDegree-submit" type="submit">Remove Degree</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>