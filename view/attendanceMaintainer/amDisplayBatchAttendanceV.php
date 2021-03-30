<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
        <li><a href="amBatchWiseAttendanceV.php">Batch-wise Attendance</a></li>
        <li class="active">Batch-wise Attendance Results</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Batch-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/amControllers/amViewBatchAttendanceC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Selected subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="subject_name" disabled <?php echo 'value="'.$_SESSION['subject_name'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected session type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="sessionType" disabled <?php echo 'value="'.$_SESSION['sessionType'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected Batch</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="batch_number" disabled <?php echo 'value="'.$_SESSION['batch_number'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Start date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="startDate" disabled <?php echo 'value="'.$_SESSION['startDate'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>End date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="endDate" disabled <?php echo 'value="'.$_SESSION['endDate'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Number of students</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="stdCount" disabled <?php echo 'value="'.$_SESSION['stdCount'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Number of days</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="numOfDays" disabled <?php echo 'value="'.$_SESSION['numOfDays'].'"' ?> /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="batchPdf">Generate a pdf
                        </button>
                        <button class="cancelbtn" type="submit" name="cancel-submit">
                            <a href="amHomeV.php">Exit</a> 
                        </button>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Student Index</th>
                        <th>Attendance</th>
                    </tr>
                    <?php echo $_SESSION['batchWise_attendance']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>