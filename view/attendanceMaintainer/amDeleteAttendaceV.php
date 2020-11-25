<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amDeleteAttendaceSearchV.php">Delete attendance</a></li>
            <li class="active">Attendance</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Attendance</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                    </tr>
                </table>
                <button class="subbtn">
                    <a href="amAttendanceDeleted.php">Delete Attendance</a>
                </button>
                <button class="cancelbtn">
                    <a href="amHomeV.php">Cancel</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>