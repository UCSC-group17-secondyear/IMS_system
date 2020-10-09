<main>
    <title>Mark Mahapola Selected Students</title>

    <?php
        require('../basic/header.php');
    ?>

        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li>Mark Mahapola Selected Students By Name</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Mark Mahapola Selected Students</h4>
        </div>

        <form action="" method="POST">
            <!-- <input type="text" id="studentname" name="student" value="studentname"> -->
            <label for="studentname">Search by Student Name</label><br>
            <input type="text" id="studentName">
        </form>
        <br>
        <a href="mmStudentDetailsV.php" ><button type="submit" name="" >Display Student's Details</button></a><br>
            <!-- mekedi js function eka check krla tamai display kranna one -->
    </div>
    

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>