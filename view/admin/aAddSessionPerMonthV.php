<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Assign monthly sessions</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Assign monthly sessions</li>
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
                              <label>Enter calendar year</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="year" placeholder="Calendar Year" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="month" placeholder="Month" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter subject</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="subject" placeholder="Subject" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter session type</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="sessionType" placeholder="Session type" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter number of sessions per month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="numOfSessions" placeholder="Number of sessions per month" required/>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addMSession-submit">Add session</button>
                    </form>
                    <form action="../../controller/adminControllers/manageMonthlySessionController.php" method="post">
                        <!-- <button class="subbtn" type="submit" name="userroleList-submit">View Current Session Types</button> -->
                        <a href="aHomeV.php"><button type="submit" name="cancel-submit" class="cancelbtn">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- <?php
    // require '../basic/footer.php';
?> -->