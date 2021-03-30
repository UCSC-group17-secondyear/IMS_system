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
                                <label for="">Start Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" id="starttime" name="starttime" placeholder="Start time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">End Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" id="endtime" name="endtime" placeholder="End time" oninput="checkTime()" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject" required>
                                    <option value="">Select a subject</option>
                                    <?php echo $_SESSION['subject_with_code'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" required>
                                    <option value="">Select a hall</option>
                                    <?php echo $_SESSION['allhalls']?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Day</label>
                            </div>
                            <div class="col-75">
                                <select name="day" required>
                                    <option value="">Select a day</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wedensday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="savett-submit">Enter</button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function checkTime(){
        var start_time = document.getElementById("starttime").value;
        var end_time = document.getElementById("endtime").value;

        if(start_time > end_time){
            alert("The end time you have entered is a time before the start time that you have entered!");
            document.getElementById("endtime").value = "hh-min";
        }
    }
</script>

<?php
    require '../basic/footer.php';
?>