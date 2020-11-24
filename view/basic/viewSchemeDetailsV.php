<!-- <?php
    // require '../basic/topnav.php';
?> -->

<main>
    <!-- <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li class="active">View Medical Scheme Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    // require 'nasmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <div>
                        <h2>Scheme Details</h2>
                    </div> -->

                    <table id="tableStyle" class="mytable">
                        <tr>
                            <th>Scheme Name</th>
                            <th>Maximum Room Charge</th>
                            <th>Hospital Charges</th>
                            <th>Annual Premium</th>
                            <th>Monthly Premium</th>
                            <th>Gvt No Paying Ward</th>
                            <th>Gvt Child Birth Cover</th>
                            <th>Travel Expenses Cover</th>
                            <th>Annual Limit</th>
                            <th>Consultant Fee</th>
                            <th>Investigations Cost</th>
                            <th>Spectacles Cost</th>
                            <th>Permanent Staff (required service period)</th>
                            <th>Contract Staff (required service period)</th>
                            <th>Temporary Staff (required service period)</th>
                        </tr>
                        <?php echo $_SESSION['scheme_list']; ?>
                    </table>
                <!-- </div>
            </div>
        </div>
    </div>-->
</main>

<!-- <?php
    // require '../basic/footer.php';
?>  -->