<main>
    <title>Claim Details</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li>Enter Year</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>
            
            <div class="content">
                <div>
                    <h4>View Claim Details</h4>
                </div>

                <label for="medicalYear">Enter Medical Year</label><br><br>
                <input type="text" value=""> <br>

                <a href="memYearClaimDetailsV.php"><button type="submit" name="">Display Claim Details</button></a><br>
            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>





