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
                            <select name="med_year" id="">
                                <option value="">Select a Subject</option>
                                <?php echo $_SESSION['subject_with_code'] ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                              <label>Hall</label>
                          </div>
                          <div class="col-75">
                            <select name="med_year" id="">
                                <option value="">Select a Hall</option>
                                <?php echo $_SESSION['allhalls']?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                              <label>Start time</label>
                          </div>
                          <div class="col-75">
                              <input type="time" id="" name="s_time" placeholder="Starting_time" required /><br>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-25">
                              <label>End time</label>
                          </div>
                          <div class="col-75">
                              <input type="time" id="" name="e_time" placeholder="Ending_time" required /><br>
                          </div>
                        </div>
                        <button class="subbtn" type="submit" name="entertt-submit">
                            <a href="#">Save</a>
                        </button>
                        <button class="cancelbtn" type="submit">
                            <a href="hamHomeV.php">Cancel</a>
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