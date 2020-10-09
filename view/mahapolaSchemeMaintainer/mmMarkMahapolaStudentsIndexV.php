<main>
    <title>Mark Mahapola Slected Students</title>
    <?php
        require('../basic/header.php');    
    ?>

        
    <div class="header">
        
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
            <!-- <input type="radio" id="studentindex" name="student" value="studentindex"> -->
            <label for="studentindex">Search by Student Index</label><br>
            <input type="text" id="studentIndex"><br>
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