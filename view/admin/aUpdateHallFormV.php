<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update halls</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a Hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateHallController.php" method="POST">
                        
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall"required>
                                <option value="">Select hall: </option>
                                <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>
                    
                        <button class="mainbtn" type="submit" name="updateHall">Update Hall</button>
                    </form>
                    <form>
                        <button type="submit" class="subbtn">
                            <a href="../../controller/aViewHallController.php">View current Halls</a>
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