<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a semester</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Semester</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a Semester</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateSemesterController.php" method="POST">
                        
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <select name="academic_year"required>
                                <option value="">Select Academic year: </option>
                                <?php echo $_SESSION['yrs'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester"required>
                                <option value="">Select Semester: </option>
                                <?php echo $_SESSION['nms'] ?>
                                </select>
                            </div>
                        </div>
                    
                        <button class="subbtn" type="submit" name="updateSemester">Update Semester</button>
                        <button class="cancelbtn" type="submit" name="deleteSemester" onclick="return confirm('Are you sure?');">Delete Semester</button>
                    </form>
                    <form>
                        <button type="submit" class="subbtn">
                            <a href="../../controller/aViewSemesterController.php">View current semeters</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
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