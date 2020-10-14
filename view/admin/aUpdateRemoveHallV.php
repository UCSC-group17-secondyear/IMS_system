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
        <div>
            <h3>Update or remove a Hall</h3>
        </div>
        
        Enter hall name <input type="text" name="hallName" placeholder="Hall name" required/> <br>

        Enter Hall location <input type="text" name="hallLocation" placeholder="Hall location" required/> <br>

        Enter Seating capacity <input type="text" name="seatingCapacity" placeholder="Seating capacity" required/> <br>

        About AC availability <input type="text" name="acAvailability" placeholder="AC availability" required/> <br>

        <button type="submit" name="updateHall-submit">Save Updates</button>
        
        <button type="submit" name="removeHall-submit">Remove Hall</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>