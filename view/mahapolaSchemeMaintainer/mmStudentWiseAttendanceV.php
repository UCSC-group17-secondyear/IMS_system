<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View StudentWise Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="mmHomeV.php">Home</a></li>
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
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Student Index</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="student_index" placeholder="Student Index" min="0" /> <br>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="select-submit">
                        <a href="mmGetStdStdwiseAttendanceV.php">Enter</a>
                    </button>
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