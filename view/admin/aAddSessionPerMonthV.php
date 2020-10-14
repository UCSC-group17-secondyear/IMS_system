<main>
    <title>Add a monthly session</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new Session</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new Session</h3>
        </div>
        
        Enter month <input type="text" name="month" placeholder="Month" required/><br>

        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>

        Enter number of sessions per month <input type="text" name="numOfSessions" placeholder="Number of sessions per month" required/> <br>

        <button type="submit" name="addSession-submit">Add session</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>