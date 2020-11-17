<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Student Wise Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li><a href="amStudentWiseAttendanceV.php">Studentwise Attendance</a></li>
        <li class="active">Filter student details</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Filter student details to get attendance</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Select subject/s</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Student Code" /> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Start date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="startDate"/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>End date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="endDate"/> <br>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="select-submit">
                        <a href="amDisplayStdwiseAttendanceV.php">Enter</a>
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