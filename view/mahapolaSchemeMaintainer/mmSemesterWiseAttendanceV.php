<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="mmHomeV.php">Home</a></li>
        <li class="active">Semester-wise Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'mmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Semester-wise Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/mmControllers/mmViewAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Year that semester began</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="calander_year" placeholder="Calander Year" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="semester" placeholder="Semester" min="1" max="2" required/> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="semesterAttendance-submit">Display Attendance</button>
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