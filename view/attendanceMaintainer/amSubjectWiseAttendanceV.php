<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Subject Wise Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="amhomePageV.php">Home</a></li>
        <li class="active">Subject-wise Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Get Subject-wise Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject" placeholder="Subject" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Batch Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="batch_number" placeholder="Batch Numbe" min="0" required/> <br>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-25">
                            <label>Enter Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree" placeholder="Degree" required/> <br>
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
                        <a href="amDisplaySubjectAttendanceV.php">Display Attendance</a> 
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>