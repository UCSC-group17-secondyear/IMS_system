<main>
    <title>Update Successfull</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memUpdateClaimFormsV.php">Select Form</a></li>
                    <li>Form</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>
            
            <div class="content">
                <p>Your Form has been Submitted Succesfully.</p>
                <!-- form eka updat kalat passe mekay redirect wenne -->

                <a href="memUpdateClaimFormsV.php"><button type="submit" name="">OK</button></a><br>
            </div>
         
            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>




