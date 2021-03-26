<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a session</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Update or remove a session type</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update or remove a session type</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Select session type</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="sessionType" placeholder="Session type" required/> <br>
                            </div>
                        </div>
                    </form>

                    <button class="subbtn" type="submit" name="updateSession-submit">
                        <a href="aUpdateSessionType.php">Update session type</a>
                    </button>
                    
                    <button id="myBtn" class="cancelbtn">Remove session type</button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>