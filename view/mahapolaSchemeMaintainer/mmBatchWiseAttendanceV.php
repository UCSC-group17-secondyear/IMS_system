<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Bacthwise attendance details</title>

    <ul class="breadcrumbs">
        <li><a href="mmHomeV.php">Home</a></li>
        <li class="active">Batch-wise Attendance</li>
    </ul>
    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'mmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Get Batch-wise Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Batch Number</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="batch_number" placeholder="Batch Number" min="0" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Academic Year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="academic_year" placeholder="Academic Year" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree" placeholder="Degree" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject" placeholder="Subject" required/> <br>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-25">
                            <label>Enter Calander Year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="calander_year" placeholder="Calander Year" required/><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="semester" placeholder="Semester" required/> <br>
                        </div>
                    </div> -->
                    
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Start Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="start_date" placeholder="Start Date" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter End Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="end_date" placeholder="End Date" required/> <br>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="select-submit">
                        <a href="mmDisplayBatchAttendanceV.php">Display Attendance</a> 
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