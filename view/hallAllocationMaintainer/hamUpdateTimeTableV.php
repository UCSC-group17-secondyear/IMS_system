<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update time table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Update time table</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Time Table</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Academic year</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="academic_year" <?php echo 'value="'.$_SESSION['u_academic_year'].'"'?> disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Semester</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="semster" <?php echo 'value="'.$_SESSION['u_semester'].'"'?> disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" required>
                                    <option value="">Select a degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Year</label>
                            </div>
                            <div class="col-75">
                                <select name="year" id="" required>
                                    <option value="">Select a year</option>
                                    <option value="1">1st year</option>
                                    <option value="2">2nd year</option>
                                    <option value="3">3rd year</option>
                                    <option value="4">4th year</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Start Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="starttime" <?php echo 'value="'.$_SESSION['u_start_time'].'"'?> required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">End Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="endtime" <?php echo 'value="'.$_SESSION['u_end_time'].'"'?> required>
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
                        <button class="subbtn" type="submit" name="update-event-submit">Update</button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    //Get the button
    var mybutton = document.getElementById("myTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php
    require '../basic/footer.php';
?>