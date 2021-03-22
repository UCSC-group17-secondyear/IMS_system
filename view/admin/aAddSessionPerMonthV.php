<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Assign monthly sessions</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Assign monthly sessions</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Assign monthly sessions to subjects</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter the calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calendarYear" placeholder="Calendar Year" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter the month</label>
                            </div>
                            <div class="col-75">
                              <input type="number" name="month" placeholder="Month" min="1" max="12" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name" id="">
                                    <?php echo $_SESSION['degreeList'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject_name" id="">
                                    <?php echo $_SESSION['subject_list'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the session type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType" id="">
                                    <?php echo $_SESSION['sessionTypes'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter the number of sessions per month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="numOfSessions" placeholder="Number of sessions per month" min="0" required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="addMSession-submit">Add session</button>
                        <button class="cancelbtn" type="submit">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>