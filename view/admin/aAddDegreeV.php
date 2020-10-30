<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a degree</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new degree</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new degree</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="degree_name" placeholder="Degree name" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Abbreviation/code</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="degree_abbriviation" placeholder="Abbriviation" required/><br>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addDegree-submit">Add degree</button>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="userroleList-submit">
                            <a href="../../controller/adminControllers/manageDegreeController.php"> View Current Degree List</a>
                        </button>
                        <button type="submit" class="cancelbtn">
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