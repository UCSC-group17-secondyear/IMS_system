<main>
        <title>Saved</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li><a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a></li> 
                    <li><a href="mmStudentDetailsV.php">Student Details</a></li>
                    <li>Saved</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../mahapolaSchemeMaintainer/mmSideNavV.php');
                ?>
            </div>
        
            <div class="content">
                <div>
                    <h4>Saved Successfully</h4>
                </div>

                <a href="mmHomeV.php" ><button type="submit" name="" >OK</button></a><br>
            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>







