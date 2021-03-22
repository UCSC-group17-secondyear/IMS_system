<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Scheme Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li class="active">View Medical Scheme Details</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Scheme Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Scheme Name</th>
                        <th>Maximum Room Charge</th>
                        <th>Hospital Charges</th>
                        <th>Annual Premium</th>
                        <th>Gvt No Paying Ward</th>
                        <th>Gvt Child Birth Cover</th>
                        <th>Consultant Fee</th>
                        <th>Spectacles Cost</th>
                        <th>Permanent Staff (required service period)</th>
                        <th>Contract Staff (required service period)</th>
                        <th>Temporary Staff (required service period)</th>
                    </tr>
                    <?php echo $_SESSION['scheme_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>