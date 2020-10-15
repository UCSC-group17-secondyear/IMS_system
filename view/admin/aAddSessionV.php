<main>
    <title>Add a session type</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new session type</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new session type</h3>
        </div>
        <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
            Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>

            <button type="submit" name="addSession-submit">Add session type</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>