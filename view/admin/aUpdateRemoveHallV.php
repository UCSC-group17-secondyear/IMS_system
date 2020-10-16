<main>
    <title>Update or Remove a hall</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a Hall</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>
        
    <div class="content">
        <h1>Hall Details</h1>

        <table class="mytable">
            <tr>
                <th>Hall Name</th>
                <th>Seating Capacity</th>
                <th>Location</th>
                <th>AC</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php echo $_SESSION['hall_list']; ?>
        </table>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>