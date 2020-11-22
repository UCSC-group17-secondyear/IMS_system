<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
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
                    <h2>Update a Designation</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateDesignationController.php" method="POST">
                        
                        <div class="row">
                            <div class="col-25">
                                <label>Enter designation</label>
                            </div>
                            <div class="col-75">
                                <select name="designation"required>
                                <option value="">Select designation: </option>
                                <?php echo $_SESSION['desg'] ?>
                                </select>
                            </div>
                        </div>
                    
                        <button class="subbtn" type="submit" name="updateDesignation">Update Designation</button>
                        <button class="cancelbtn" type="submit" name="deleteDesignation" onclick="return confirm('Are you sure?');">Delete Designation</button>
                    </form>
                    <!-- <form>
                        <button type="submit" class="subbtn">
                            <a href="../../controller/aViewDesignationController.php">View current departments</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>