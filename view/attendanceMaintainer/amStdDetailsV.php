<main>

    <title>Users</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="amDeleteUpdateStudentV.php">Select student</a></li>
            <li>Student Detail</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <h1>Students in IMS System</h1>

        <table class="mytable">
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

    <?php
        require '../basic/footer.php';
    ?>

</main>