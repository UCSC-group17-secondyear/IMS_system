<main>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Medical Member List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="">
            <h1>Members in IMS System</h1>
            <table class="mytable">
                <tr>
                    <th>Employee ID</th>
                    <th>Initials</th>
                    <th>Surname</th>
                    <th></th>
                </tr>
                <?php echo $_SESSION['member_info'] ?>
            </table>
            <br>
            <a href="msmViewMedicalMemberlistV.php"><button type="submit" name="MedicalMemberlist-submit">OK</button></a>
        </form>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>