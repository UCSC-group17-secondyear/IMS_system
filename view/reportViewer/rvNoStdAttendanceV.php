<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li><a href="rvStudentWiseAttendanceV.php">Student-wise attendance</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            There are no sessions available for the given subject in the given date duration.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="rvStudentWiseAttendanceV.php">Try again</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="rvHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>