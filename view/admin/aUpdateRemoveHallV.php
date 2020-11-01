<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Hall</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Hall Name</th>
                        <th>Seating Capacity</th>
                        <th>Location</th>
                        <th>AC</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['hall_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>