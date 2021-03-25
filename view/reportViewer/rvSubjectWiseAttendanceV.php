<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Subject-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Subject-wise Attendance</li>
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
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Select Subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject_name">
                                    <?php echo $_SESSION['subjectsList'] ; ?> <br>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select Session Type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType">
                                    <?php echo $_SESSION['sessionTypes'] ; ?> <br>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name">
                                    <?php echo $_SESSION['degreeList'] ; ?> <br>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Batch Number</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="batch_number" placeholder="Batch Number" min="1" required/> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter Start Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="startDate" placeholder="Start Date" required/> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter End Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="endDate" placeholder="End Date" required/> <br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="subjectWise-submit">Display Attendance
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