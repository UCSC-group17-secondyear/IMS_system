<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Students' Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Students' Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Students' Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Index No</th>
                        <th>Registration Number</th>
                        <th>Initials</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Academic Year</th>
                        <th>Degree</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>