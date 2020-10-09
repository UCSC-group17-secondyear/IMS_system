<main>
    <title>Add a hall</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new hall</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>
            
    <div class="content">
        <div>
            <h3>Add a new hall</h3>
        </div>

        Hall Name: <input type="text" name="hallName" placeholder="Enter hall name" required/><br>
        
        Hall Location: <input type="text" name="hallLocation" placeholder="Enter hall location"
                    required><br>
        
        Seating Capacity: <br><input type="text" name="seatingCapacity" placeholder="Enter seating capacity"
                    required><br>
        
        AC availability: <input type="text" name="acAvailability" placeholder="Enter AC availability"
                    required><br>
        
        <button type="submit" name="addHall-submit">Add hall</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>