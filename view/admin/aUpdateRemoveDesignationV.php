<main>
    <title>Update or Remove a designation</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Designation</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

        <div class="content">
            <h1>Designation Details</h1>

        <table class="mytable">
            <tr>
                <th>Designation</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $_SESSION['designation_list']; ?>
        </table>
        </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>