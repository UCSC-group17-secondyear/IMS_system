<main>
    <title>Update or Remove a monthly session</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a session</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update or remove a session</h3>
        </div>
        
        Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>
        
        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        Enter month <input type="text" name="month" placeholder="Month" required/> <br>

        Enter number of sessions per month <input type="text" name="numOfSessions" placeholder="Sessions per month" required/> <br>
        
        <button type="submit" name="updateSession-submit">Update session type</button>
        
        <button type="submit" name="removeSession-submit">Remove session type</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>