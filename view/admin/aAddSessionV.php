<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a session type</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new session type</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new session type</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter session type</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="sessionType" placeholder="Session type" required/> <br>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addSession-submit">Add session type</button>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="userroleList-submit">
                            <a href="../../controller/adminControllers/manageSessionTypesController.php"> View Current Session Types</a>
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