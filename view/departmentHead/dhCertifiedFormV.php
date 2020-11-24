<?php
    require "../basic/topnav.php";
?>

<main>
  <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li class="active">Certified Memebership Forms</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Certified Memebership Forms</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Employee No</th>
                        <th>Initials</th>
                        <th>Surname</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>View</th>
                    </tr>
                    <?php echo $_SESSION['certifiedforms'] ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>