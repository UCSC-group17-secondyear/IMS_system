<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Month-wise Attendance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">View Month-wise Attendance</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Month-wise Attendance</h2>
                </div>

                <div class="contentForm">
                    <form>
                        <div class="row">
                            <div class="col-25">
                                <label>Selected calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calander_year" disabled <?php echo 'value="'.$_SESSION['calander_year'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected Month</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="month" disabled <?php echo 'value="'.$_SESSION['month'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected Degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name" disabled <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> /><br>
                            </div>
                        </div>

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
                                <label>Total number of days</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="monthDays" disabled <?php echo 'value="'.$_SESSION['monthDays'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Total number of students</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="stdCount" disabled <?php echo 'value="'.$_SESSION['stdCount'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Attendance Percentage</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="attendPercentage" disabled <?php echo 'value="'.$_SESSION['attendPercentage'].'"' ?> /><br>
                            </div>
                        </div>
                    </form>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Index Number</th>
                        <th>Attendance</th>
                    </tr>
                    <?php echo $_SESSION['monthAttendance_list']; ?>
                </table>

                <button class="subbtn">
                    <a href="rvMonthWiseAttendanceV.php">View another monthwise attendance</a>
                </button>
                <button class="cancelbtn" type="submit" name="cancel-submit">
                    <a href="rvHomeV.php">Cancel</a> 
                </button>

            </div>
        </div>
    </div>
</main>