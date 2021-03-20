<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aViewSessionPerMonthV.php">View Monthly Sessions</a></li>
            <li class="active">Monthly sessions</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Monthly session details</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Selected degree</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree" disabled <?php echo 'value="'.$_SESSION['degree'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Selected subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="subject" disabled <?php echo 'value="'.$_SESSION['subject'].'"' ?> /><br>
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
                                <label>Entered calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calendarYear" disabled <?php echo 'value="'.$_SESSION['calendarYear'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Entered month</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="month" disabled <?php echo 'value="'.$_SESSION['month'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Number of sessions</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="numSessions" disabled <?php echo 'value="'.$_SESSION['numSessions'].'"' ?> /><br>
                            </div>
                        </div>

                        <button class="subbtn">
                            <a href="aViewSessionPerMonthV.php">View another session</a>
                        </button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Exit</a>
                        </button>
                    </form>
                </div>

                <!-- <table id="tableStyle" class="mytable" style="margin-left: 30%;" >
                    <tr>
                        <th>Subject</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Session type</th>
                        <th>Number of sessions</th>
                    </tr>
                    <?php 
                    /*echo $_SESSION['monthlySession']; */
                    ?>
                </table> 

                <button class="subbtn">
                    <a href="aViewSessionPerMonthV.php">View another session</a>
                </button>
                <button class="cancelbtn">
                    <a href="aHomeV.php">Exit</a>
                </button>-->
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>