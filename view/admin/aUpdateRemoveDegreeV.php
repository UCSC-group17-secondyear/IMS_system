<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Degree List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Degree List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Degree List</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 25%;" >
                    <tr>
                        <th>Degree</th>
                        <th>Degree Abbriviation</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php echo $_SESSION['degree_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>