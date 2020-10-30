<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a semester</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new Semester</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new Semester</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aAddSemesterController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester"required>
                                    <option value="">Select semester: </option>
                                    <option value="FirstSemester">First semester: </option>
                                    <option value="SecondSemester">Second semester: </option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="year" name="academic_year" placeholder="Academic Year" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Starting Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="start_date" placeholder="Start date" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Ending Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="end_date" placeholder="End date" required/>
                            </div>
                        </div>
                        <button class="mainbtn" type="submit" name="addSemester-submit">Add Semester</button>
                    </form>
                    <form action="" method="POST">
                        <button class="subbtn" type="submit" name="">View Previous Semesters</button>
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