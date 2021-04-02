<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Enter or Update Attendance</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Enter or Update Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Subject</label>
                        </div>
                        <div class="col-75">
                            <select name="subject" required>
                                <option>Select a subject</option>
                                <?php echo $_SESSION['selected_subjects'] ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Session Type</label>
                        </div>
                        <div class="col-75">
                            <select name="session_type" required>
                                <option>Select a session type</option>
                                <?php echo $_SESSION['session_type'] ?>
                            </select>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="markattendance-submit">Mark Attendance</button>
                    <button class="cancelbtn" type="submit" name="updateattendance-submit">Update Attendance</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>