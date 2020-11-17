<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="amEnterUpdateAttendaceSelectV.php">Enter or update attendance</a></li>
            <li class="active">Enter attendance</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Enter attendance</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Student Index</th>
                        <th>Student Name</th>
                        <th>Attendance</th>
                    </tr>
                </table>
                <button class="subbtn">
                    <a href="amAttendanceEntered.php">Save Attendance</a>
                </button>
                <button class="cancelbtn">
                    <a href="amHomeV">Cancel</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>