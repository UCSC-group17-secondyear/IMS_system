<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a semester</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add a new Semester</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Semester Details</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 25%;" >
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
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>