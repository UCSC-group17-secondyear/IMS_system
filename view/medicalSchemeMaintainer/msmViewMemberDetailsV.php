<main>
    <title>Member Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Member Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
                <h3>Member Details</h3>
            </div>

            <!-- get method wge mokk hri ekakin id eken details aran display krnna ona -->

            <a href="msmRemoveMemberV.php"><button onclick="myFunction()">Delete</button></a>

            <script>
            function myFunction() {
                alert("The employee has been removed successfully.");
            }
            </script>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
