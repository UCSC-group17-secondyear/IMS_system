<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
        <li><a href="mmStudentWiseAttendanceV.php">Studentwise Attendance</a></li>
        <!-- <li><a href="amGetStdStdwiseAttendanceV.php">Filter student details</a></li> -->
        <li class="active">Studentwise Attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Studentwise Attendance</h2>
                </div>

                <table id="tableStyle" class="mytable"  style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Subject Code</th>
                        <th>Attendance</th>
                    </tr>
                </table>

                <button class="mainbtn">
                    <a href="mmStudentWiseAttendanceV.php">View another studentwise attendance</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>