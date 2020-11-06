<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Member Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Member Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Member Details</h2>
                </div>
                <table id="tableStyle">
                    <tr>
                        <th>Employee ID</th>
                    <?php echo $_SESSION['member'] ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>