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
            <h3>Assign sessions to subjects</h3>
        </div>
        
        Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>

        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        Enter number of sessions per smester <input type="text" name="numOfSessions" placeholder="Number of sessions per smester" required/> <br>

        <button type="submit" name="assignSession-submit">Assign session</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>