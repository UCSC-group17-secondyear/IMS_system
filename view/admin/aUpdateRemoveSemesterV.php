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
        <h1>Semester Details</h1>

        <table class="mytable">
            <tr>
                <th>Semester</th>
                <th>Academic Year</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $_SESSION['semester_list']; ?>
        </table>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>