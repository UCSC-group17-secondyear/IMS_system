<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove a scheme</title>

   <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Remove a medical scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a medical scheme</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Select Scheme Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="schemeName" placeholder="Scheme Name" required/><br>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="removeScheme-submit">Remove</button>
                    </form>

                    <form>
                        <button class="subbtn" type="submit" name="schemeList-submit">
                            <a href="../../controller/adminControllers/manageScehemesController.php">View Current schemes</a>
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