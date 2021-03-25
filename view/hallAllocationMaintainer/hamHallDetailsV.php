<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Hall Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Details</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/asmControllers/asmViewHallController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Select Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall" required>
                                    <option value="">Select a Hall</option>
                                    <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>
                        
                        <button class="subbtn" type="submit" name="hall-submit">Display Details</button>
                        <button id="myBtn" class="cancelbtn">
                            <a href="hamHomeV.php">Cancel</a>
                        </button>
                        <!-- <button type="submit" class="cancelbtn">
                            <a href="asmHomeV.php">Cancel</a>
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>