<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update/Delete Time Table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Update/Delete Time Table</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update/Delete Time Table</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                    <div class="row">
                            <div class="col-25">
                                <label>Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester" id="" required>
                                    <option value="">Select the Semester</option>
                                    <?php echo $_SESSION['acayear_with_sem'] ?>
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
                                <label>Year</label>
                            </div>
                            <div class="col-75">
                                <select name="year" id="" required>
                                    <option value="">Select the Year</option>
                                    <option value="1">1st year</option>
                                    <option value="2">2nd year</option>
                                    <option value="3">3rd year</option>
                                    <option value="4">4th year</option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="updatett-submit">Enter</button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>