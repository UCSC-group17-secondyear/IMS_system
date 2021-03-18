<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter time table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Enter time table</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Enter Time Table</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Academic year</label>
                            </div>
                            <div class="col-75">
                                <input type="year" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester" id="" required>
                                    <option value="">Select the Semester</option>
                                    <?php echo $_SESSION['semesters'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="" required>
                                    <option value="">Select the degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Batch</label>
                            </div>
                            <div class="col-75">
                                <select name="batch" id="" required>
                                    <option value="">Select the Batch</option>
                                    <option value="y1">1st year</option>
                                    <option value="y2">2nd year</option>
                                    <option value="y3">3rd year</option>
                                    <option value="y4">4th year</option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="entertt-submit">
                            <a href="#">Enter</a>
                        </button>
                        <button class="cancelbtn" type="submit">
                            <a href="hamHomeV.php">Cancel</a>
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