<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter time table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Enter time table</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Enter Time Table</h2>
                </div>

                <div class="contentForm differentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                    <div class="row">
                            <div class="col-25">
                                <label>Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester" id="" required>
                                    <option value="">Select the Semester</option>
                                    <?php echo $_SESSION['acayear_with_sem'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="" required>
                                    <option value="">Select the degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Batch</label>
                            </div>
                            <div class="col-75">
                                <select name="batch" id="" required>
                                    <option value="">Select the Batch</option>
                                    <option value="y1">1st year</option>
                                    <option value="y2">2nd year</option>
                                    <option value="y3">3rd year</option>
                                    <option value="y4">4th year</option>
                                </select>
                            </div>
                        </div>
                        <table id="tableStyle">
                            <tr>
                                <th name="start_time">Start time</th>
                                <th name="end_time">End time</th>
                                <th name="Monday">Monday</th>
                                <th name="Tuesday">Tuesday</th>
                                <th name="Wednesday">Wedensday</th>
                                <th name="Thursday">Thursday</th>
                                <th name="Friday">Friday</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><input type="time" name="tt[i][]" value="i-start-time"/></td>
                                <td><input type="time" name="tt[i][]" value="i-end-time"/></td>
                                <td>
                                    <select name="tt[i][]" id="mon" required>
                                        <option value="" >Select Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="hall" id="mon" required>
                                        <option value="">Select Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tt[i][]" id="tues" required>
                                        <option value="" >Select Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="hall" id="tues" required>
                                        <option value="">Select Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tt[i][]" id="wed" required>
                                        <option value="" >Select Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="hall" id="wed" required>
                                        <option value="">Select Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tt[i][]" id="thurs" required>
                                        <option value="" >Select Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="hall" id="thurs" required>
                                        <option value="">Select Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <select name="tt[i][]" id="fri" required>
                                        <option value="" >Select Subject</option>
                                        <?php echo $_SESSION['subject_with_code'] ?>
                                    </select>
                                    <select name="hall" id="fri" required>
                                        <option value="">Select Hall</option>
                                        <?php echo $_SESSION['allhalls']?>
                                    </select>
                                </td>
                                <td>
                                    <button class=".green" type="submit" name="addtt-submit"><a href="#">Add</a></button>
                                </td>
                            </tr>
                            <?php //echo $_SESSION['wtt']; ?>
                        </table>
                        <button class="subbtn" type="submit" name="entertt-submit"><a href="#">Enter</a></button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>