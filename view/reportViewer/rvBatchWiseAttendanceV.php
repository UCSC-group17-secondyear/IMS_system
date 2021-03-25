<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Batch-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Batch-wise Attendance</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Batch-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name">
                                    <?php echo $_SESSION['degreeList']; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select Academic Year</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="academic_year" placeholder="Academic Year" min="1" max="4" required/> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select Semester</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="semester" placeholder="Semester" min="1" max="2" required/> <br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="filterSubjects-submit">Display Subjects
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