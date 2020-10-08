<main>
    <title>Member Details</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                    <li>Current Member Details</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>

            <div class="content">
                <div>
                    <h4>Current Member Details</h4>
                </div>

                <form action="" method="post">
                    <label for="empName">Employee id</label>
                    <input type="text" value=""> <br>
                    <label for="empNumber">Initials of the Name</label>
                    <input type="text" value=""> <br>
                    <label for="designation">Email</label>
                    <input type="text" value=""> <br>
                    <!-- database eken details ganna one -->

                </form>

                <a href="memUpdateSuccessV.php"><button type="submit" name="currentMemberDetail-submit">Save
                        Updates</button></a><br>
            </div>
           

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>





