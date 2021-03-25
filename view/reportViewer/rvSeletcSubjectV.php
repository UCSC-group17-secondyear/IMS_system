<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Month-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Month-wise Attendance</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Month-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Entered calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calander_year" disabled <?php echo 'value="'.$_SESSION['calander_year'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Entered month</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="month" disabled <?php echo 'value="'.$_SESSION['month'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selecetd Degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name"  <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> disabled/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="academic_year" disabled <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected Semester</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="semester" disabled <?php echo 'value="'.$_SESSION['semester'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject_name">
                                    <?php echo $_SESSION['subjects_list']; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select session type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType">
                                    <?php echo $_SESSION['sessionTypes_list']; ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="monthWise-submit">Display Attendance
                        </button>
                        <button class="cancelbtn" type="submit" name="cancel-submit">
                            <a href="rvHomeV.php">Cancel</a> 
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>