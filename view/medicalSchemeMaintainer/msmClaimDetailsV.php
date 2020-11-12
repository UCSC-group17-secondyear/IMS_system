<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Claim Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Claim Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Claim Details</h2>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>OPD/Surgical</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th></th>
                    </tr>
                    <?php echo $_SESSION['member_info'] ?>
                </table>
                <form action="" method="post">
                    <button class="subbtn" type="submit">
                        <a href="msmSelectMembersV.php">OK</a>
                    </button>
                    <button type="submit" class="cancelbtn">
                        <a href="msmSelectMembersV.php">Cancel</a>
                    </button>
                </form>
<!-- methnta opd claim details tika danna -->
<!-- methnta surgical claim details tika danna -->
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>