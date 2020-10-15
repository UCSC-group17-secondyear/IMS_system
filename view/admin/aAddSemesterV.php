<main>
    <title>Add a semester</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new Semester</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new Semester</h3>
        </div>
        <div>
            <form action="../../controller/aAddSemesterController.php" method="POST">
                <label for="">Enter Semester</label>
                <select name="semester"required>
                    <option value="">Select semester: </option>
                    <option value="FirstSemester">First semester: </option>
                    <option value="SecondSemester">Second semester: </option>
                </select>
                <label for="">Enter Academic Year</label>
                <input type="year" name="academic_year" placeholder="Academic Year" required/> <br>
                <label for="">Enter Starting Date</label>
                <input type="date" name="start_date" placeholder="Start date" required/> <br>
                <label for="">Enter Ending Date</label>
                <input type="date" name="end_date" placeholder="End date" required/> <br>                               
                <button type="submit" name="addSemester-submit">Add Semester</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>