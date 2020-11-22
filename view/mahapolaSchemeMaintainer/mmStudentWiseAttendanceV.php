<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Student-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li class="active">View Student-wise Attendance</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Student-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <div class="row">
                    <form action="mmStudentWiseAttendanceV.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Student Index</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="student_index" placeholder="Student Index" />
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
                              <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="academic_year" placeholder="Academic Year"/>
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
                            <a href="mmHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>