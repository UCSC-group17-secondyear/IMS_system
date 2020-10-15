<main>
    <title>Add a monthly session</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Assign monthly sessions to subjects</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Assign monthly sessions to subjects</h3>
        </div>

        <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
            Enter calendar year <input type="text" name="year" placeholder="Calendar Year" required/><br>

            Enter month <input type="text" name="month" placeholder="Month" required/><br>

            Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

            Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>

            Enter number of sessions per month <input type="text" name="numOfSessions" placeholder="Number of sessions per month" required/> <br>

            <button type="submit" name="addMSession-submit">Add session</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>