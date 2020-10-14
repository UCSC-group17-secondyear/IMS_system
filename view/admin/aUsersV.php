<main>

    <title>Users</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>User List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <h1>Users in IMS System</h1>

        <table class="mytable">
            <tr>
                <th>Employee Id</th>
                <th>Initials</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Telephone</th>
                <th>Date of Birth</th>
                <th>Designation</th>
                <th>Appointment Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $_SESSION['user_list'] ?>
        </table>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>