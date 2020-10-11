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
        <div>
            <h3>Member List</h3>
        </div>

        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>

        <a href="msmViewMedicalMemberlistV.php"><button type="submit" name="MedicalMemberlist-submit">OK</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>


</main>
