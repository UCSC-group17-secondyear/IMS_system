<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Degree</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateRemoveDegreeV.php">Update or Remve Degree</a></li>
            <li>Update Degree</li>
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
                                <label for="">Degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree Abbriviation</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_abbriviation" <?php echo 'value="'.$_SESSION['degree_abbriviation'].'"' ?> required/><br>
                            </div>
                        </div>
                                    
                        <button type="submit" name="updateDegree-submit" class="mainbtn">Update Degree</button>
                    </form>
                    <a href="aHomeV.php"><button type="submit" name="cancel-submit" class="cancelbtn" style="margin-left: 310px;">Cancel</button></a>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>