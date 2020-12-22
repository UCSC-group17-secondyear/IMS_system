<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateHallFormV.php">Update or remove halls</a></li>
            <li class="active">Update Hall</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/aUpdateHallController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Hall Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_name" <?php echo 'value="'.$_SESSION['hall_name'].'"' ?> min="0" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Hall Location</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_location" <?php echo 'value="'.$_SESSION['location'].'"' ?> required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Seating Capacity</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="seating_capacity" <?php echo 'value="'.$_SESSION['seating_capacity'].'"' ?> required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>AC availability</label>
                            </div>
                            <div class="col-75">
                                <select name="ac"required>
                                    <option <?php echo 'value="'.$_SESSION['AC'].'"' ?>><?php echo $_SESSION['AC'] ?></option>
                                    <option value="1">A/C</option>
                                    <option value="0">Non A/C</option>
                                </select>
                            </div>
                        </div>
                        <button class="mainbtn" type="submit" name="updateHall-submit">Update Hall</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>