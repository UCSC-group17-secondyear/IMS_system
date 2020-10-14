<main>
    <title>Update or Remove a semester</title>
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
        
        Enter Semester <input type="text" name="semester" placeholder="Enter Semester" required/> <br>

        Enter starting date <input type="text" name="startDate" placeholder="Starting date" required/> <br>

        Enter ending date <input type="text" name="endDate" placeholder="Ending date" required/> <br>

        <button type="submit" name="updateSemester-submit">Save Updates</button>
        
        <button type="submit" name="removeSemester-submit">Remove semester</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>