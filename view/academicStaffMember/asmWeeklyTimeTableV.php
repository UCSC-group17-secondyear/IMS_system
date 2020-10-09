<main>
    <title>Weekly Time Table</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>View Weekly Time Table</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Weekly Time Table</h3>
        </div>

        <table>
            <tr>
                <th>Date</th>
                <th>Time Duration</th>
                <th>Hall Name</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                </tr>
        </table>

        <a href="asmHomeV.php"><button type="submit" name="">OK</button></a>

        <!-- if lecturer registered as a medical scheme member then redirect to the lecturer home page without "Register to the medical scheme button"  -->
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
