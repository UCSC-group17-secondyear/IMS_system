<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Month-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Month-wise Attendance</li>
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
                    <form action="" method="POST">
                    <div class="row">
                    <form action="rvStudentWiseAttendanceV.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Student Index</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="calander_year" placeholder="Calander Year"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Month</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="month" placeholder="Month"/>
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
                    </form>
                    <form action="" method="post">
                        <a href="#"><button class="subbtn" type="submit" name="select-submit">Display Attendance</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>