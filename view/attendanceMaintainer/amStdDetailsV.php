<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Students</title>

    <ul class="breadcrumbs">
        <li><a href="aHomeV.php">Home</a></li>
        <li><a href="amDeleteUpdateStudentV.php">Select student</a></li>
        <li>Student Detail</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Students in IMS System</h2>
            </div>
            <table id="tableStyle">
                <tr>
                    <th>Index Number</th>
                    <th>Registration number</th>
                    <th>Initials</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Academic year</th>
                    <th>Degree</th>
                </tr>
                <?php echo $_SESSION['std_info'] ?>
            </table>
        </div>
    </div>
</main>


<?php
    require '../basic/footer.php';
?>