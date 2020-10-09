<main>
    <title>Enter Subject Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">home</a></li>
            <li>Enter Subject Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Subjects' Details</h3>
        </div>

        Enter Subject Code<input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
        
        Enter Subject Name<input type="text" name="subject_name" placeholder="Subject Name" required/> <br>
            
        Enter Description<input type="textarea" name="description" placeholder="Description" required/> <br>
        
        <button type="submit" name="updateSubject-submit">Save Updates</button>
        
        <button type="submit" name="deleteSubject-submit">Delete</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>