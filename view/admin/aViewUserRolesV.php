<main>
    <title>User Roless List</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>User Roles List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <h1>User roles in IMS System</h1>

        <table class="mytable">
            <tr>
                <th>User role</th>
                <th>Description</th>
            </tr>
            <?php echo $_SESSION['user_role'] ?>
        </table>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>