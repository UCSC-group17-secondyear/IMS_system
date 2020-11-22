<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Modify Students</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <!-- <li><a href="aUsersV.php">Students table</a></li> -->
        <li class="active">Modify Students</li>
    </ul>
    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Modify Students</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/saveUpdatedStdC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Student Index</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="index_no" <?php echo 'value="'.$_SESSION['index_no'].'"' ?> required min="0" /> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Registration Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="registrstion_no" <?php echo 'value="'.$_SESSION['registrstion_no'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Initials</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Last Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="last_name" <?php echo 'value="'.$_SESSION['last_name'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Academic year</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="academic_year" <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree" <?php echo 'value="'.$_SESSION['degree'].'"' ?> required> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="saveStd-submit">Save Updates</button>
                    <button class="cancelbtn" type="submit" name="cancel-submit">
                        <a href="amHomeV.php">Cancel</a> 
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>