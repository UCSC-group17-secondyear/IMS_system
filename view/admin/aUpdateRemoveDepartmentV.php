<main>
    <title>Update or Remove a department</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Department</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <h1>Department Details</h1>

        <table class="mytable">
            <tr>
                <th>Department</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $_SESSION['dept_list']; ?>
        </table>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>