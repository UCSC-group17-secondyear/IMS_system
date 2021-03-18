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

                <div class="contentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject" id="" required>
                                    <option value="" >Select a Subject</option>
                                    <?php echo $_SESSION['subject_with_code'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="" required>
                                    <option value="">Select a Hall</option>
                                    <?php echo $_SESSION['allhalls']?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Day</label>
                            </div>
                            <div class="col-75">
                                <select name="day" id="" required>
                                    <option value="">Select a Day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Start time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" id="" name="start_time" required /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>End time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" id="" name="end_time" required /><br>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="entertt-submit">
                            <a href="#">Enter</a>
                        </button>
                        <button class="cancelbtn" type="submit">
                            <a href="hamHomeV.php">Cancel</a>
                        </button>
                    </form>
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
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>