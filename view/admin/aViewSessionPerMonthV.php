<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Assign monthly sessions</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Select Monthly session</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Sessions of a subject</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Select degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name" >
                                    <?php echo $_SESSION['degreeList'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject_name" >
                                    <?php echo $_SESSION['subject_list'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select session type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType" id="">
                                    <?php echo $_SESSION['sessionTypes'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calendarYear" placeholder="Calendar Year" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter month</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="month" min="1" max="12" required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="monthlySessionDetails-submit">View sessions</button>
                        <button class="cancelbtn">
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