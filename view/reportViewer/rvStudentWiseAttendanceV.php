<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Student-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Student-wise Attendance</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Student-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/rvControllers/rvViewAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Select Student Index</label>
                        </div>
                        <div class="col-75">
                            <select name="index_no">
                                <?php echo $_SESSION['student_indexes']; ?>
                            </select>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="filterStudent-submit">Enter
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="rvHomeV.php">Cancel</a> 
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</main>