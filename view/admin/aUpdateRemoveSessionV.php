<main>
    <title>Update or Remove a session</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update or remove a session type</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update or remove a session type</h3>
        </div>
        
        Enter session type <input type="text" name="sessionType" placeholder="Session type" required/> <br>
        
        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>
            
        Enter Month <input type="text" name="month" placeholder="Month" required>
        
        Enter number of sessions per semester<input type="text" name="numOfSessions" placeholder="Sessions per semester" required>
        
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