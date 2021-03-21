<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamHallDetailsV.php">View Hall Details</a></li>
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

                <table id="tableStyle">
                    <tr>
                        <th>Name</th>
                        <th>AC</th>
                        <th>Capacity</th>
                        <th>Location</th>
                    </tr>
                    
                    <?php echo $_SESSION['halls'] ?>
                </table>

                <button class="subbtn" type="submit" name="">
                    <a href="../../controller/asmControllers/asmViewHallController.php?user_id=<?php echo $_SESSION['userId'] ?>">Select another hall</a>
                </button>
                <button class="cancelbtn" type="submit" name="">
                    <a href="hamHomeV.php">Exit</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>