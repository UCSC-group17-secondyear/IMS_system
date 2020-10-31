<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a monthly session</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a monthly session</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update or remove a monthly session</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
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
                                <label>Enter subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="subject" placeholder="Subject" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter month</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="month" placeholder="Month" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter number of sessions per month</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="numOfSessions" placeholder="Sessions per month" required/>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="updateSession-submit">Update session</button>
                    </form>
                    <form action="../../controller/adminControllers/manageMonthlySessionController.php" method="post">
                        <button class="subbtn" type="submit" name="">View Current Session Types</button>
                        <button type="submit" name="removeSession-submit" class="cancelbtn">Remove session</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>