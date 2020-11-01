<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a department</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Department</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Department Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Department</th>
                        <th>Department Head</th>
                        <th>Department Head's Email</th>
                        <th>Description</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['dept_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>