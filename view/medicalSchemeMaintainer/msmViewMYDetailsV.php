<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Medical Years</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Available Medical Years</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 35%;" >
                    <tr>
                        <th>Post Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                    <?php echo $_SESSION['medy_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>