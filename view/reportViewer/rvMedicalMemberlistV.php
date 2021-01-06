<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Medical Scheme Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li class="active">Medical Scheme Member List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Medical Scheme Member List</h2>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Employee ID</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Health Condition</th>
                        <th>Civil Status</th>
                        <th>Scheme</th>
                        <th>Member Type</th>
                    </tr>
                    <?php echo $_SESSION['medical_members'] ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>