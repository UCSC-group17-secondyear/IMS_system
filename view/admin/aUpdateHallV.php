<main>
    <title>Update Hall</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Hall</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Hall</h3>
        </div>
        <div>
            <form action="../../controller/aUpdateHallController.php" method="POST">
                <label for="">Hall Name</label>
                <input type="text" name="hall_name" <?php echo 'value="'.$_SESSION['hall_name'].'"' ?> required/><br>
                <label for="">Hall Location</label>
                <input type="text" name="hall_location" <?php echo 'value="'.$_SESSION['location'].'"' ?> required/><br>
                <label for="">Seating Capacity</label>
                <input type="text" name="seating_capacity" <?php echo 'value="'.$_SESSION['seating_capacity'].'"' ?> required/><br>
                <label for="">AC availability</label>
                <select name="ac"required>
                    <option <?php echo 'value="'.$_SESSION['AC'].'"' ?>><?php echo $_SESSION['AC'] ?></option>
                    <option value="1">A/C</option>
                    <option value="0">Non A/C</option>
                </select>                       
                <button type="submit" name="updateHall-submit">Add Semester</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>