<main>

    <title>Modify User</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUsersV.php">Users table</a></li>
            <li>Modify User</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/amControllers/saveUpdatedStdC.php" method="post">
            <label for="">Student Index</label>
            <input type="text" name="index_no" <?php echo 'value="'.$_SESSION['index_no'].'"' ?> required /> <br>

            <label for="">Registration Number</label>
            <input type="text" name="registrstion_no" <?php echo 'value="'.$_SESSION['registrstion_no'].'"' ?> required> <br>

            <label for="">Initials</label>
            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required> <br>

            <label for="">Last Name</label>
            <input type="text" name="last_name" <?php echo 'value="'.$_SESSION['last_name'].'"' ?> required> <br>

            <label for="">Email</label>
            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required> <br>

            <label for="">Academic year</label>
            <input type="text" name="academic_year" <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> required> <br>

            <label for="">Degree</label>
            <input type="text" name="degree" <?php echo 'value="'.$_SESSION['degree'].'"' ?> required> <br>

            <button type="submit" name="saveStd-submit">Save Updates</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>