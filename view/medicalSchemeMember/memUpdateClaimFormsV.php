<main>
    <title>Update Claim Form</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li>Select Form</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>
            
            <div class="content">
                <div>
                    <h4>Update Claim Forms</h4>
                </div>

                <ul>
                    <li><a href="memClaimFormToUpdateV.php" name="">Form 1</a></li>
                    <li><a href="#" name="">Form 2</a></li>
                    <li><a href="#"></a></li>
                </ul>
                <!-- database eken form list ekak enawa -->
                <!-- eken form eka select krala form page ekat yanwa -->

            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>

