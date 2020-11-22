<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Departments List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Departments List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Departments List</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Department</th>
                        <th>Abbriviation</th>
                        <th>Department Head</th>
                        <th>Department Head's Email</th>
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