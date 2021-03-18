<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li class="active">Subject Details</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;" >
            <div class="col left20">
                <?php
                    require 'amSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Subject Details</h2>
                </div>

                <table id="tableStyle" class="mytable" style="margin-left: 15%;" >
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Name</th>
                        <th>Degree</th>
                        <th>Academic Year</th>
                        <th>Semester</th>
                    </tr>
                    <?php echo $_SESSION['subject_list']; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>