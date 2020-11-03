<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Designation</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Designation Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Designation</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['designation_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>