<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Subject-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Subject-wise Attendance</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Subject-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                    <div class="row">
                    <form action="rvStudentWiseAttendanceV.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="academic_year" placeholder="Academic Year"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree" placeholder="Degree"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Semester</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="semester" placeholder="Semester"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="subject" placeholder="Subject"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Start Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="start_date" placeholder="Start Date"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter End Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="end_date" placeholder="End Date"/>
                            </div>
                        </div>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="select-submit">
                            <a href="#">Display Attendance</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="rvHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>