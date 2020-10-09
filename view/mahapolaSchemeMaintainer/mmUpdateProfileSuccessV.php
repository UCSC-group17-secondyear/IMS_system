<main>
        <title>Profile Updated</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li><a href="mmProfileV.php">Profile</a></li>
                    <li><a href="mmUpdateProfileV.php">Update Profile</a></li>
                    <li>Update Successfully</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../mahapolaSchemeMaintainer/mmSideNavV.php');
                ?>
            </div>

            <div class="content">
                <p>Your profile has been updated successfully..</p>

                <a href="mmProfileV.php"><button type="submit">OK</button></a>
            </div>
            
        
            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>






