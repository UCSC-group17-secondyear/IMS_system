<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Enter time table</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Enter time table</li>
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
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Subject Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="subject_name" placeholder="Subject name" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Subject Code</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="subject_code" placeholder="Subject code" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Hall</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="hall" placeholder="Hall" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Start time</label>
                            </div>
                            <div class="col-75">
                              <input type="time" id="" name="s_time" placeholder="Starting_time" required/><br>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                              <label>End time</label>
                            </div>
                            <div class="col-75">
                              <input type="time" id="" name="e_time" placeholder="Ending_time" required/><br>
                            </div>
                        </div>
                        <a href="hamSaveEnterTimeTableV.php"><button class="mainbtn" type="submit" name="">Save</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>