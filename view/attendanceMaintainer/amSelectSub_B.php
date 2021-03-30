<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Student Wise Attendance</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li><a href="amBatchWiseAttendanceV.php">Batch-wise Attendance</a></li>
        <li class="active">Select subjects</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Select Relevant Subjects</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/amViewBatchAttendanceC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Batch Number</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="batch_number" placeholder="Batch Number" min="0" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter Start Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="startDate" placeholder="Start Date" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Enter End Date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" name="endDate" placeholder="End Date" required/> <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Subject</label>
                        </div>
                        <div class="col-75">
                            <select name="subject_name">
                                <?php echo $_SESSION['subject_list']; ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Select Session Type</label>
                        </div>
                        <div class="col-75">
                            <select name="sessionType">
                                <?php echo $_SESSION['sessionTypes']; ?>
                            </select>
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="batchWise-submit">Enter
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