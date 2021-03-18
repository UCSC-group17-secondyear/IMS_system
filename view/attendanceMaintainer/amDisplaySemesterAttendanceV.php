<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
        <li><a href="amSemesterWiseAttendanceV.php">Get Semester-wise Attendance</a></li>
        <!-- <li><a href="amGetStdStdwiseAttendanceV.php">Filter student details</a></li> -->
        <li class="active">Semester-wise Attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Semester-wise Attendance</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Subject Code</th>
                        <th>Session Type</th>
                        <th>Attendance</th>
                    </tr>
                    <?php echo $_SESSION['semesterAttendance_list']; ?>
                </table>

                <button class="subbtn">
                    <a href="amSemesterWiseAttendanceV.php">View another semester-wise attendance</a>
                </button>
                <button class="cancelbtn" type="submit" name="cancel-submit">
                    <a href="amHomeV.php">Cancel</a> 
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>