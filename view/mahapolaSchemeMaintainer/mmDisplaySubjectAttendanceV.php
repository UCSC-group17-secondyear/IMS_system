<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
        <li><a href="mmSubjectWiseAttendanceV.php">Subjectwise Attendance</a></li>
        <!-- <li><a href="amGetStdStdwiseAttendanceV.php">Filter student details</a></li> -->
        <li class="active">Subject-wise Attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Subject-wise Attendance</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Attendance</th>
                    </tr>
                </table>

                <button class="subbtn">
                    <a href="mmSubjectWiseAttendanceV.php">View another subject-wise attendance</a>
                </button>
                <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="mmHomeV.php">Cancel</a> 
                    </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>