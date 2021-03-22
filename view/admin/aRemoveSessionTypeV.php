<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Remove session types</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a session type</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
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
                        <button class="subbtn" type="submit" name="removeSessionType-submit">Remove session type</button>

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