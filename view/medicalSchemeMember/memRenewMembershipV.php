<?php
    require "../basic/topnav.php";
?>


<main>
    <title>Renew Membership</title>
    <div class="sansserif">   
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li class="active">Renew Membership</li>
                </ul>
            
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                    <div>
                        <h2>Renew Membership</h2>
                    </div>

                <div class="contentForm">
                    <div>
                        <h2>Change Scheme</h2>
                    </div>
                    
                        <form action="../../controller/memControllers/selectSchemeController.php?user_id=<?php echo $_SESSION['userId']?>" method="POST">
                            <button class="mainbtn" type="submit" name="yes-submit">Yes</button>
                        </form>
                      
                        <form action="../../controller/memControllers/currentMemberDetailsController1.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                            <button class="mainbtn" type="submit" name="no-submit">No</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>