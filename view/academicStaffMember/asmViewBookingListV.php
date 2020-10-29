<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Booking Update</title>

    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li>Update or remove a Booking</li>
    </ul>

    <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update or remove a Booking</h2>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Reason</th>
                        <th>Hall</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['booking_list'] ?>
                </table>
                <a href="asmHallDetailsV.php"><button class="mainbtn" type="submit" name="">Ok</button></a>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>