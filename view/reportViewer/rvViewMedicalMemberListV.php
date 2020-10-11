<main>
    <title>View Medical Scheme Memberlist</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Medical Scheme Memberlist</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="cotent">
            <div>
                <h3>Select a Scheme</h3>
            </div>
            <select name="scheme" id="">
                <option value="">Select a Scheme</option>
                <option value="scheme1">Scheme 1</option>
                <option value="scheme2">Scheme 2</option>
                <option value="scheme3">Scheme 3</option>
            </select>
            <br>
            <select name="memberType" id="">
                <option value="">Select a Member Type</option>
                <option value="academic">Academic</option>
                <option value="non-academic">Non - Academic</option>
                <option value="temporary">Temporary</option>
            </select>
            <br>

            <a href="rvMedicalMemberlistV.php"><button type="submit"
                    name="viewMedicalMemberlist-submit">Select</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>

