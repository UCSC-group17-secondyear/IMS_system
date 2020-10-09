<main>
    <title>Update Profile</title>

    <?php
        require('../basic/header.php');
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmProfileV.php">Profile</a></li>
            <li>Update Profile</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Profile</h3>
        </div>
        <div>
            <form action="" method="post">
                <label for="empId">Employee Id</label>
                <input type="text" value=""> <br>
                <label for="nameWithInt">Initials of the name</label>
                <input type="text" value=""> <br>
                <label for="surname">Surname</label>
                <input type="text" value=""> <br>
                <label for="email">Email</label>
                <input type="email" value=""> <br>
                <label for="mobNum">Mobile Number</label>
                <input type="text" value=""> <br>
                <label for="telNum">Telephone Number</label>
                <input type="text" value=""> <br>
                <label for="dob">Date of Birth</label>
                <input type="date" value=""> <br>
                <label for="designation">Designation</label>
                <input type="text" value=""> <br>
                <label for="appointmentDate">Appointment Date</label>
                <input type="date" value=""> <br>                    
            </form>
            <a href="mmUpdateProfileSuccessV.php"><button type="submit">Save Updates</button></a>
        </div>
            <!-- mekedi api database eken gnna data tika for each loop ekk ghla display krnna ona habai mekedi update krnna puluwn wenna ona -->
    </div>
    
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>