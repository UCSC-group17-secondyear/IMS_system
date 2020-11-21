<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Medical Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmSelectMembersV.php">Select Members</a></li>
            <li class="active">Medical Member List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Medical Member List</h2>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Employee ID</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <?php echo $_SESSION['member_info'] ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>