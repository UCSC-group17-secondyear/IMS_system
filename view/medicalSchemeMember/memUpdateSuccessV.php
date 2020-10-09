<main>
    <title>Update SUccessfull</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                    <li>Update Success</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>

           <div class="content">
                <p>Your membership renewal form has been sent for the apporoval.You will be informed about the membership
                    later.</p><br>
                <p>Thank You...</p>

                <a href="memHomeV.php"><button type="submit" name="updateSuccess-submit">OK</button></a><br>
            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>



