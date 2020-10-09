<main>
    <title>Hall Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Hall Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Hall Details</h3>
        </div>

        <!-- <h4>Select a Hall</h4> -->
        <select name="hall" id="hall">
            <option value="">Select a Hall</option>
            <option value="E401">E401</option>
            <option value="S104">S104</option>
            <option value="W001">W001</option>
        </select>
        <br>
        <br>
        <a href="asmViewHallDetailsV.php"><button type="submit" name="">Display Details</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>