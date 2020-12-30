<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Weekly Time Table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Weekly Time Table</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Weekly Time Table</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Hall Name</th>
                        <th>Semester</th>
                        <th>Academic Year</th>
                    </tr>

                    <?php echo $_SESSION['time_table'] ?>
                    
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>