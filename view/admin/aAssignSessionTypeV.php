<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a session type</title>

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
                <h2>Assign sessions to subjects</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter session type</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="sessionType" placeholder="Session type" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter subject</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject" placeholder="Subject" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter number of sessions per smester</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="numOfSessions" placeholder="Number of sessions per smester" required/> <br>
                        </div>
                    </div>
                    <button class="mainbtn" type="submit" name="assignSession-submit">Assign session</button>
                </form>
                <form>
                    <button class="cancelbtn" type="submit" name="cancel-submit">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
    require '../basic/footer.php';
?>