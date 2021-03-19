<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Bacthwise attendance details</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Batch-wise Attendance</li>
    </ul>
    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Get Batch-wise Attendance</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/amViewAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Degree</label>
                        </div>
                        <div class="col-75">
                            <select name="degree_name">
                                <?php echo $_SESSION['degreeList']; ?>
                            </select>
                            <!-- <input type="text" name="degree_name" placeholder="Degree" required/> <br> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Academic Year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="academic_year" placeholder="Academic Year" min="1" max="4" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="semester" placeholder="Semester" min="1" max="2" required/> <br>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="filterSubjects-submit">Display Subjects
                    </button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>