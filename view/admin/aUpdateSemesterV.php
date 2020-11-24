<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update semester</title>

    <ul class="breadcrumbs">
        <li><a href="aHomeV.php">Home</a></li>
        <li><a href="aUpdateSemesterFormV.php">Update Semester</a></li>
        <li class="active">Update Semester</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'aSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Update Semester</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/aUpdateSemesterController.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Semester</label>
                        </div>
                        <div class="col-75">
                            <select name="semester" required>
                                <option <?php echo 'value="'.$_SESSION['semester'].'"' ?>><?php echo $_SESSION['semester'] ?></option><!-- 
                                <option value="FirstSemester">First semester: </option>
                                <option value="SecondSemester">Second semester: </option> -->
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Academic Year</label>
                        </div>
                        <div class="col-75">
                            <input  disabled  type="year" name="academic_year" <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Starting Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="start_date" <?php echo 'value="'.$_SESSION['start_date'].'"' ?> required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Ending Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="end_date" <?php echo 'value="'.$_SESSION['end_date'].'"' ?> required/> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="addSemester-submit">Update Semester</button>
                    <button type="submit" name="cancel-submit" class="cancelbtn"><a href="aHomeV.php">Cancel</a></button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
    require '../basic/footer.php';
?>