<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Delete or Update Subject Details</title>

    <ul class="breadcrumbs">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="amHomeV.php">Attendance Maintainer Page</a></li>
        <li class="active">Delete or Update Subject Details</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Delete or Update Subjects' Details</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter subject code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
                        </div>
                    </div>
                    <button class="mainbtn" type="submit" name="deleteupdateSubject-submit" href="amDeleteUpdateSubjectV.php">Select</button>
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