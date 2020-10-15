<main>
    <title>Medical Scheme Member List</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Medical Scheme Member List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/msmviewMemberListTwoC.php" method="POST">
            <label>Medical Scheme Type: </label>
            <select name="schemename" id="schemename" required>
                <option value="">Select Scheme</option>
                <?php echo $_SESSION['scheme'] ?>
            </select>
            <br>
            <label>Medical Member Type: </label>
            <select name="member_type" id="member_type" required>
                <option value="">Select Member Type</option>
                <?php echo $_SESSION['member_type'] ?>
            </select>
            <br>
            <button type="submit" name="viewMemberList-submit">Select</button>
        </form>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>