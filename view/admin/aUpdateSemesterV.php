<main>
    <title>Update semester</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Semester</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Semester</h3>
        </div>
        <div>
            <form action="../../controller/aUpdateSemesterController.php" method="POST">
                <label for="">Enter Semester</label>
                <select name="semester" required>
                    <option <?php echo 'value="'.$_SESSION['semester'].'"' ?>><?php echo $_SESSION['semester'] ?></option>
                    <option value="FirstSemester">First semester: </option>
                    <option value="SecondSemester">Second semester: </option>
                </select>
                <label for="">Enter Academic Year</label>
                <input type="year" name="academic_year" <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> required/> <br>
                <label for="">Enter Starting Date</label>
                <input type="date" name="start_date" <?php echo 'value="'.$_SESSION['start_date'].'"' ?> required/> <br>
                <label for="">Enter Ending Date</label>
                <input type="date" name="end_date" <?php echo 'value="'.$_SESSION['end_date'].'"' ?> required/> <br>                               
                <button type="submit" name="addSemester-submit">Update Semester</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>