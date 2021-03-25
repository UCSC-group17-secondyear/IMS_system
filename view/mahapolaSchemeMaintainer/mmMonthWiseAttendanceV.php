<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Month Wise Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="mmHomeV.php">Home</a></li>
        <li class="active">Monthwise Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'mmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Monthwise Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/mmControllers/mmViewAttendanceC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calander_year" placeholder="Calander Year" required /> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Enter month</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="month" placeholder="Month" min="1" max="12" required /> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name">
                                    <?php echo $_SESSION['degree_list']; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="academic_year" placeholder="Academic Year" min="1" max="4" required /> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Select Semester</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="semester" placeholder="Semester" min="1" max="2" required /> <br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="getSubjects-submit">Display Attendance
                        </button>
                        <button class="cancelbtn" type="submit" name="cancel-submit">
                            <a href="mmHomeV.php">Cancel</a> 
                        </button>
                    </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>