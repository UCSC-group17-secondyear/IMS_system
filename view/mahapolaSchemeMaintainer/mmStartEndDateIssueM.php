<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmSubjectWiseAttendanceV.php">Subject-wise Attendance</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!<br>
                        The end date you have entered is a date before the start date that you have entered.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="mmSubjectWiseAttendanceV.php">Try again</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="mmHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>